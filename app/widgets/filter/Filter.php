<?php

namespace app\widgets\filter;

use app\controllers\AppController;
use app\models\Category;
use ishop\base\Model;
use ishop\Cache;

class Filter  {

    public $groups;
    public $attrs;
    public $tpl;
    public $filter;
    public static $ids;

    public function __construct($filter = null, $tpl = ''){
        $this->filter = $filter;
        $this->tpl = $tpl ?: __DIR__ . '/filter_tpl.php';
        $ids = new Category();
        $this->run();
    }
    public static function ids($ids)
    {
        self::$ids = $ids;
    }


    protected function run(){
        $cache = Cache::instance();
        $this->groups = $cache->get('filter_group');
        if(!$this->groups){
            $this->groups = $this->getGroups();
            $cache->set('filter_group' . self::$ids , $this->groups, 30);
        }
        $this->attrs = $cache->get('filter_attrs' .  self::$ids);
        if(!$this->attrs){
            $this->attrs = self::getAttrs();
            $cache->set('filter_attrs' .self::$ids, $this->attrs, 30);
        }
        $filters = $this->getHtml();
        echo $filters;
    }

    protected function getHtml(){
        ob_start();
        $filter = self::getFilter();
        if(!empty($filter)){
            $filter = explode(',', $filter);
        }
        require $this->tpl;
        return ob_get_clean();
    }

    protected function getGroups(){
        return \R::getAssoc('SELECT id, title FROM attribute_group');
    }

    protected static function getAttrs(){
        $ids = self::$ids;
        $attrs = [];
        if(!empty($ids)) {
            $data = \R::getAll("SELECT `value`,`attr_group_id`,`attr_id` FROM product JOIN attribute_product ON product.id = attribute_product.product_id JOIN attribute_value ON attribute_product.attr_id = attribute_value.id WHERE category_id IN ($ids) GROUP BY `value`  ");
            foreach ($data as $k => $v) {
                $attrs[$v['attr_group_id']][$v['attr_id']] = $v['value'];
            }
        }
        else
        {
            $data = \R::getAssoc('SELECT * FROM attribute_value');
            foreach($data as $k => $v){
                $attrs[$v['attr_group_id']][$k] = $v['value'];
            }
        }





        return $attrs;
    }

    public static function getFilter(){
        $filter = null;

        if(!empty($_GET['filter'])){
            $filter = preg_replace("#[^\d,]+#", '', $_GET['filter']);
            $filter = trim($filter, ',');


        }
        return $filter;
    }
    public static function getPrice(){

        $price = null;
        if(!empty($_GET['price'])){
            $price = preg_replace("#[^\d,]+#", '', $_GET['price']);
            $price = explode(",",$price);
        }
        return $price;
    }
    public static function getCountGroups($filter){
        $filters = explode(',', $filter);
        $cache = Cache::instance();
        $attrs = $cache->get('filter_attrs');
        if(!$attrs){
            $attrs = self::getAttrs();
        }
        $data = [];
        foreach($attrs as $key => $item){
            foreach($item as $k => $v){
                if(in_array($k, $filters)){
                    $data[] = $key;
                    break;
                }
            }
        }
        return count($data);
    }

}