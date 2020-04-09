<?php

namespace app\models;

class Product extends AppModel {

    public function setRecentlyViewed($id){
        $recentlyViewed = $this->getAllRecentlyViewed();
        if(!$recentlyViewed){
            setcookie('recentlyViewed', $id, time() + 3600*24, '/');
        }else{
            $recentlyViewed = explode('.', $recentlyViewed);
            if(!in_array($id, $recentlyViewed)){
                $recentlyViewed[] = $id;
                $recentlyViewed = implode('.', $recentlyViewed);
                setcookie('recentlyViewed', $recentlyViewed, time() + 3600*24, '/');
            }
        }
    }

    public function getRecentlyViewed(){
        if(!empty($_COOKIE['recentlyViewed'])){
            $recentlyViewed = $_COOKIE['recentlyViewed'];
            $recentlyViewed = explode('.', $recentlyViewed);
            return array_slice($recentlyViewed, -10);
        }
        return false;
    }

    public function getAllRecentlyViewed(){
        if(!empty($_COOKIE['recentlyViewed'])){
            return $_COOKIE['recentlyViewed'];
        }
        return false;
    }
    public function linkedList($mods)
    {
        foreach ($mods as $mod) {
            $order_mods = \R::findAll('order_mod', 'id = ?', [$mod->order_mod_id]);
            foreach ($order_mods as $order_mod) {
                if ($order_mod['id'] == $mod['order_mod_id']) {
                    $list[$order_mod['title']]['title'] = $order_mod['title'];
                    $list[$order_mod['title']]['id'] = $mod['order_mod_id'];
                }
            }
            }
        if (isset($list))
            return $list;
        }

}