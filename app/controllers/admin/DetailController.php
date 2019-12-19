<?php


namespace app\controllers\admin;


use app\models\admin\Detail;
use app\models\admin\Product;
use app\models\AppModel;
use ishop\App;
use ishop\libs\Pagination;

class DetailController extends AppController
{

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('detail');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $detail = \R::getAll("SELECT * FROM detail LIMIT $start, $perpage");
        $this->setMeta('Список характеристик');
        $this->set(compact('detail', 'pagination', 'count'));
    }




public function addAction()
{
    if(!empty($_POST))
    {

        $detail = new Detail();
        $data = $_POST;
        $detail->load($data);

        if(!$detail->validate($data)){
            $detail->getErrors();
            $_SESSION['form_data'] = $data;
            redirect();
        }
$detail->save('detail');
        $_SESSION['success'] = 'Товар добавлен';
        redirect();

    }


}
    public function editAction(){
        if(!empty($_POST)){

            $id = $this->getRequestID(false);
            $detail = new Detail();
            $data = $_POST;

            $detail->load($data);


            if($detail->update('detail', $id)){
                $detail = \R::load('detail', $id);
                \R::store($detail);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID(true);

        $detail = \R::load('detail', $id);
        $this->setMeta("Редактирование Характеристики {$detail->detail_name}");
        $this->set(compact('detail'));
    }
}