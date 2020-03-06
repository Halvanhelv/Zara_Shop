<?php

namespace app\controllers\admin;

use app\models\admin\Product;
use app\models\AppModel;
use ishop\App;
use ishop\libs\Pagination;

class ProductController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('product');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $products = \R::getAll("SELECT product.*, category.title AS cat FROM product JOIN category ON category.id = product.category_id ORDER BY product.title LIMIT $start, $perpage");
        $this->setMeta('Список товаров');
        $this->set(compact('products', 'pagination', 'count'));
    }

    public function deleteAction()
    {
        $id = $_GET['id'];
        if (\R::exec("DELETE FROM product WHERE id = ?",[$id]))
        {
            $_SESSION['success'] = 'Товар Удален';
        }
        else
        {
            $_SESSION['error'] = 'Ошибка';
        }
        redirect();
    }

    public function addImageAction(){
        $name = $_POST['name'];
        $product = new Product();
        $file_name = md5(time());
        if(isset($_GET['upload'])){
            if($_POST['name'] == 'single'){

                foreach(App::$app->getProperty('img') as $item)
                {
                    $background = $item[2];
                    $wmax = $item[0];
                    $hmax = $item[1];
                    $upload = $item[3];

             $product->uploadImg($name, $wmax, $hmax,$background,$upload,$file_name);

                }

                exit(json_encode(array("file" => $_SESSION['single'])));

            }
            elseif($_POST['name'] == 'multi') {

                foreach (App::$app->getProperty('gallery') as $item)
                {

                    $background = $item[2];
                $wmax = $item[0];
                $hmax = $item[1];
                $upload = $item[3];
                $product->uploadImg($name, $wmax, $hmax, $background, $upload,$file_name);

            }
            exit(json_encode(array("file" => end($_SESSION['multi']))));
            }

            else{

                foreach (App::$app->getProperty('slider') as $item)
                {
                    $background = $item[2];
                    $wmax = $item[0];
                    $hmax = $item[1];
                    $upload = $item[3];

                    $product->uploadImg($name, $wmax, $hmax, $background, $upload,$file_name);

                }
                exit(json_encode(array("file" => $_SESSION['slider'])));
            }




        }

    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $product = new Product();
            $data = $_POST;


            $product->load($data);
            $product->attributes['status'] = $product->attributes['status'] ? 'on' : 'off';
            $product->attributes['hit'] = $product->attributes['hit'] ? 'on' : 'off';
            $product->attributes['old_price'] = $product->attributes['old_price'] ? $product->attributes['old_price'] : '0';
            $product->attributes['brand_id'] = $product->attributes['brand_id'] ? $product->attributes['brand_id'] : '0';
            $product->attributes['slider'] = $product->attributes['slider'] ? 'on' : 'off';
            $product->attributes['best_seller'] = $product->attributes['best_seller'] ? 'on' : 'off';
            $product->getImg();
            $product->modification($id,$data);
            if(!$product->validate($data)){
                $product->getErrors();
                redirect();
            }
            if($product->update('product', $id)){
                $product->editFilter($id, $data);

                $product->detail($id,$data);
                $product->editRelatedProduct($id, $data);
                $product->saveGallery($id);
                $alias = AppModel::createAlias('product', 'alias', $data['title'], $id);
                $product = \R::load('product', $id);
                $product->alias = $alias;

                \R::store($product);



                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = \R::load('product', $id);
        App::$app->setProperty('parent_id', $product->category_id);
        App::$app->setProperty('brand_id', $product->brand_id);
        $filter = \R::getCol('SELECT attr_id FROM attribute_product WHERE product_id = ?', [$id]);
        $related_product = \R::getAll("SELECT related_product.related_id, product.title FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$id]);
        $gallery = \R::getCol('SELECT img FROM gallery WHERE product_id = ?', [$id]);
        $detail = \R::getAll("SELECT * FROM product_detail JOIN detail ON product_detail.attribute_id = detail.id WHERE product_detail.product_id = ?", [$id]);

        $this->setMeta("Редактирование товара {$product->title}");

        $this->set(compact('product', 'filter', 'related_product', 'gallery','detail'));
    }

    public function addAction(){
        if(!empty($_POST)){
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            $product->attributes['status'] = $product->attributes['status'] ? 'on' : 'off';
            $product->attributes['hit'] = $product->attributes['hit'] ? 'on' : 'off';
            $product->attributes['old_price'] = $product->attributes['old_price'] ? $product->attributes['old_price'] : '0';
            $product->attributes['brand_id'] = $product->attributes['brand_id'] ? $product->attributes['brand_id'] : '0';
            $product->attributes['slider'] = $product->attributes['slider'] ? 'on' : 'off';
            $product->attributes['best_seller'] = $product->attributes['best_seller'] ? 'on' : 'off';
            $product->getImg();



            if(!$product->validate($data)){
                $product->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if($id = $product->save('product')){
                $product->saveGallery($id);
                $alias = AppModel::createAlias('product', 'alias', $data['title'], $id);
                $p = \R::load('product', $id);
                $p->alias = $alias;
                \R::store($p);
                $product->editFilter($id, $data);
                $product->editRelatedProduct($id, $data);

                $product->detail($id,$data);



                $_SESSION['success'] = 'Товар добавлен';
            }
            redirect();
        }

        $this->setMeta('Новый товар');
    }

    public function relatedProductAction(){
        /*$data = [
            'items' => [
                [
                    'id' => 1,
                    'text' => 'Товар 1',
                ],
                [
                    'id' => 2,
                    'text' => 'Товар 2',
                ],
            ]
        ];*/

        $q = isset($_GET['q']) ? $_GET['q'] : '';
        $data['items'] = [];
        $products = \R::getAssoc('SELECT id, title FROM product WHERE title LIKE ? LIMIT 10', ["%{$q}%"]);
        if($products){
            $i = 0;
            foreach($products as $id => $title){
                $data['items'][$i]['id'] = $id;
                $data['items'][$i]['text'] = $title;
                $i++;
            }
        }
        echo json_encode($data);
        die;
    }
    public function detailProductAction(){
        /*$data = [
            'items' => [
                [
                    'id' => 1,
                    'text' => 'Товар 1',
                ],
                [
                    'id' => 2,
                    'text' => 'Товар 2',
                ],
            ]
        ];*/

        $q = isset($_GET['q']) ? $_GET['q'] : '';
        $data['items'] = [];
        $products = \R::getAssoc('SELECT id, detail_name FROM detail WHERE detail_name LIKE ? LIMIT 10', ["%{$q}%"]);
        if($products){
            $i = 0;
            foreach($products as $id => $title){
                $data['items'][$i]['id'] = $id;
                $data['items'][$i]['text'] = $title;
                $i++;
            }
        }
        echo json_encode($data);
        die;
    }

    public function deleteGalleryAction(){

        if(isset($_POST['upload'])) {
            $src = isset($_POST['src']) ? $_POST['src'] : null;
            foreach ($_SESSION['multi'] as $item => $value)
            {
                if ($value == $src)
                {

                    unset($_SESSION['multi'][$item]);
                    break;
                }
            }
            @unlink(WWW . "/images/$src");
            exit('1');

        }



        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        if(!$id || !$src){
            return;
        }
        if(\R::exec("DELETE FROM gallery WHERE product_id = ? AND img = ?", [$id, $src])){
            @unlink(WWW . "/images/$src");
            exit('1');
        }
        return;
    }

}
