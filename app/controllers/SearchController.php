<?php

namespace app\controllers;

use ishop\App;
use ishop\libs\Pagination;

class SearchController extends AppController{

    public function typeaheadAction(){
        if($this->isAjax()){
            $query = !empty(trim($_GET['term'])) ? trim($_GET['term']) : null;
            if($query){
                $products = \R::getAll('SELECT alias, id, title FROM product WHERE title LIKE ? LIMIT 11', ["%{$query}%"]);
                   foreach ($products as $item)
                {
                    $result_search[] = ['label' => $item['title'],
                        'id' => $item['alias']];
                }
                echo json_encode($result_search);
            }
        }
        die;
    }

    public function indexAction(){

        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = \R::count('product', "title LIKE ?", ["%{$query}%"]);

        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();
        if($total){
            $products = \R::find('product',  "title LIKE ? LIMIT $start, $perpage",  ["%{$query}%"] );
        }

        $this->setMeta('Поиск по: ' . h($query));
        $this->set(compact('products', 'query','pagination', 'total'));
    }

}