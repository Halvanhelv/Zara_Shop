<?php

namespace app\controllers;

use app\widgets\filter\Filter;
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


        $sql_part = '';


        if(!empty($_GET['price'])){
            /*
            SELECT `product`.*  FROM `product`  WHERE category_id IN (6) AND id IN
            (
            SELECT product_id FROM attribute_product WHERE attr_id IN (1,5) GROUP BY product_id HAVING COUNT(product_id) = 2
            )
            */
            $price = Filter::getPrice();

            if($price){
                $sql_part .= "AND  price >= $price[0] AND price <= $price[1] ";
            }


        }



        if(!empty($_GET['filter'])){
            /*
            SELECT `product`.*  FROM `product`  WHERE category_id IN (6) AND id IN
            (
            SELECT product_id FROM attribute_product WHERE attr_id IN (1,5) GROUP BY product_id HAVING COUNT(product_id) = 2
            )
            */
            $filter = Filter::getFilter();


            if($filter){
                $cnt = Filter::getCountGroups($filter);
                $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt)";
            }


        }
        $sort = Filter::getSort();
        if ($sort) {
            $sql_part.= $sort;}

        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = \R::count('product', "title LIKE  ? $sql_part", ["%{$query}%"]);

        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();
        if($total){
            $products = \R::find('product',  "title LIKE ?  $sql_part LIMIT $start, $perpage",  ["%{$query}%"] );
        }
        $price =  Filter::price_filter();
        $min = $price['min'];
        $max = $price['max'];
        $min_step = $price['min_step'];
        $max_step = $price['max_step'];
        if($this->isAjax()){
            $this->loadView('filter', compact('products', 'total', 'pagination'));
        }
        $this->setMeta('Поиск по: ' . h($query));
        $this->set(compact('products', 'query','pagination', 'total','min','max','min_step','max_step'));
    }

}