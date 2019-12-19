<?php


namespace app\controllers\admin;
use app\models\admin\Brand;
use app\models\AppModel;
use ishop\App;
use ishop\libs\Pagination;



class BrandController extends AppController
{

    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('brand');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $brand = \R::getAll("SELECT * FROM brand LIMIT $start, $perpage");
        $this->setMeta('Список брендов');
        $this->set(compact('brand', 'pagination', 'count'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {

            $brand = new Brand();
            $data = $_POST;
            $brand->load($data);

            if (!$brand->validate($data)) {
                $brand->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if ($id = $brand->save('brand')) {
                $alias = AppModel::createAlias('brand', 'alias', $data['title'], $id);
                $p = \R::load('brand', $id);
                $p->alias = $alias;
                \R::store($p);
                $_SESSION['success'] = 'Бренд добавлен';
            }
            redirect();
        }

    }

public function deleteAction()
{
    $id = $this->getRequestID();

           if ( !$brand = \R::findOne('product',"brand_id = ?",[$id]))
           {
               $_SESSION['success'] = 'Бренд удален';
               redirect();

           }
    $_SESSION['error'] = 'Удаление невозможно, есть товары с указанным брендом';
           redirect();

    }



    public function editAction()
    {
        if(!empty($_POST)) {

            $id = $this->getRequestID(false);
            $brand = new Brand();
            $data = $_POST;

            $brand->load($data);


            if ($brand->update('brand', $id)) {
                $alias = AppModel::createAlias('brand', 'alias', $data['title'], $id);
                $brand = \R::load('brand', $id);
                $brand->alias = $alias;
                \R::store($brand);

                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }
        $id = $this->getRequestID(true);
        $brand = \R::load('brand', $id);
        $this->setMeta("Редактирование бренда {$brand->title}");
        $this->set(compact('brand'));
    }
}