<?php

namespace app\controllers;

use app\models\Product;
use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::getAll("SELECT id, alias, slider_img, slider_text FROM product WHERE slider = 'on' ");
        $brands =  \R::convertToBeans('product', $brands);
        $hits = \R::getAll("SELECT *, brand.img as brand_img, product.img, brand.title as brand_title, product.title,product.alias, product.id FROM product JOIN brand ON brand.id = product.brand_id LIMIT 6 ");
        $hits =  \R::convertToBeans('product',$hits);

        // запись в куки запрошенного товара
        $p_model = new Product();


        // просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if($r_viewed){
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ')  LIMIT 10', $r_viewed);
        }
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands', 'hits','recentlyViewed'));

    }

}