<?php


namespace ishop\libs;


class Layouts
{
    protected $tpl;
    public function __construct($options = []){

        $this->tpl = __DIR__ . '/menu_tpl/menu.php';
        $this->getOptions($options);
      $this->catToTemplate();

    }

    protected function getOptions($options){
        foreach($options as $k => $v){
            if(property_exists($this, $k)){
                $this->$k = $v;


            }
        }
    }
    protected function catToTemplate(){


        require $this->tpl;
      
    }

}
