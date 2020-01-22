<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Category;
use app\widgets\filter\Filter;
use ishop\App;
use ishop\libs\Pagination;

class   CategoryController extends AppController {

    public function viewAction(){
        $alias = $this->route['alias'];
        $category = \R::findOne('category', 'alias = ?', [$alias]);
        if(!$category){
            throw new \Exception('Страница не найдена', 404);
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);

        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;
        Filter::ids($ids);


        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');

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


        $total = \R::count('product', "WHERE status = 'on' AND category_id IN ($ids) $sql_part");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $products = \R::find('product', " WHERE status = 'on' AND category_id IN ($ids)  $sql_part  LIMIT $start, $perpage");
        if (!isset($_GET['price'])) {
            $min = \R::getAssoc("SELECT MIN(price) FROM product ");
            $min = implode('', $min);
            $max = \R::getAssoc("SELECT MAX(price) FROM product ");
            $max = implode('', $max);
            $min_step = $min;
            $max_step = $max;
        }
        else
        {
            $min = \R::getAssoc("SELECT MIN(price) FROM product ");
            $min = implode('', $min);
            $max = \R::getAssoc("SELECT MAX(price) FROM product ");
            $max = implode('', $max);
          $price =  Filter::getPrice();
          $min_step = $price[0];
          $max_step = $price[1];
        }
        if($this->isAjax()){
            $this->loadView('filter', compact('products', 'total', 'pagination'));
        }

        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('products', 'breadcrumbs', 'pagination', 'total','min','max','min_step','max_step'));
    }

}