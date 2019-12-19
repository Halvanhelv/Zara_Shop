<?php


namespace app\widgets\brand;
use ishop\App;
use ishop\Cache;
use RedUNIT\Base\Threeway;

class Brand
{
    protected $data;
    protected $menuHtml;
    protected $tpl;
    protected $container = 'select';
    protected $table = 'brand';
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
            $this->data = App::$app->getProperty('brand');
            if(!$this->data){
                $this->data = $cats = \R::getAssoc("SELECT id, title  FROM {$this->table}");
            }


            $this->menuHtml = $this->getMenuHtml($this->data);





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
    protected function getMenuHtml($data){

        $str = '';
        foreach($data as $id => $brand){
            $str .= $this->catToTemplate($brand,$id);
        }
        return $str;
    }
    protected function catToTemplate($brand,$id){


        ob_start();

            require $this->tpl;

        return ob_get_clean();
    }
}

