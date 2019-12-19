<?php

namespace app\widgets\menu;

use ishop\App;
use ishop\Cache;
use RedUNIT\Base\Threeway;

class Menu{

    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    public $tpl2;
    public $tpl3;

    public $tpl_num;
    protected $container = 'div';
    protected $table = 'category';
    protected $cache = 3600;
    protected $cacheKey;
    protected $attrs = [];
    protected $prepend = '';

    public function __construct($options = []){

        $this->tpl = __DIR__ . '/menu_tpl/menu.php';
        $this->getOptions($options);
        $this->run();


    }

    protected function getOptions($options){
        foreach($options as $k => $v){
            if(property_exists($this, $k)){
                $this->$k = $v;


            }
        }
    }

    protected function run(){
        $cache = Cache::instance();
        $this->menuHtml = $cache->get($this->cacheKey);
        if(!$this->menuHtml){
            $this->data = App::$app->getProperty('cats');
            if(!$this->data){
                $this->data = $cats = \R::getAssoc("SELECT * FROM {$this->table}");
            }
            $this->tree = $this->getTree();

            $this->menuHtml = $this->getMenuHtml($this->tree,$tab='',$this->tpl_num);





            if($this->cache){
                $cache->set($this->cacheKey, $this->menuHtml, $this->cache);
            }
        }
        $this->output();
    }

    protected function output(){
        $attrs = '';
        if(!empty($this->attrs)){
            foreach($this->attrs as $k => $v){
                $attrs .= " $k='$v' ";
            }
        }
        echo "<{$this->container}  $attrs>";
        echo $this->prepend;
        echo $this->menuHtml;
        echo "</{$this->container}>";
    }

    protected function getTree(){
        $tree = [];
        $data = $this->data;
        foreach ($data as $id=>&$node) {
            if (!$node['parent_id']){
                $tree[$id] = &$node;
            }else{
                $data[$node['parent_id']]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '',$tpl){

        $str = '';
        foreach($tree as $id => $category){
            $str .= $this->catToTemplate($category, $tab, $id,$tpl);
        }
        return $str;
    }



    protected function catToTemplate($category, $tab, $id,$tpl){

        ob_start();
        if($tpl=='1') {
            require $this->tpl;

        }

        elseif ($tpl=='2')
        {
            require $this->tpl2;
        }
        elseif($tpl=='3')
        {
            require $this->tpl3;
        }



        return ob_get_clean();
    }


}