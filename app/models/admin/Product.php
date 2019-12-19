<?php

namespace app\models\admin;

use app\models\AppModel;

class Product extends AppModel {

    public $attributes = [
        'title' => '',
        'category_id' => '',
        'keywords' => '',
        'description' => '',
        'price' => '',
        'old_price' => '',
        'content' => '',
        'status' => '',
        'hit' => '',
        'alias' => '',
        'brand_id' =>'',
        'slider_text' =>'',
        'slider' =>'',
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['category_id'],
            ['price'],
        ],
        'integer' => [
            ['category_id'],
        ],
    ];
    public function detail($id,$data)
    {
        $detail = \R::getAssoc("SELECT  attribute_id, attr_value FROM product_detail JOIN detail ON product_detail.attribute_id = detail.id WHERE product_detail.product_id = ?", [$id]);

        $tmp = [];
if(!empty($data['detail'])) {
    foreach ($data['detail'] as $key => $value) {
        foreach ($data['detail_attrs'] as $k => $v) {

            if ($key == $k) {
                $tmp[$value] = $v;
            }
        }

    }
    $sql_part = '';
    foreach ($tmp as $v => $k) {
        $v = (int)$v;
        $k = (string)$k;
        $sql_part .= "($id, $v,'$k'),";
    }

    $sql_part = rtrim($sql_part, ',');
    // если добавляется характеристика товара
    if (empty($detail) && !empty($data['detail'])) {
        \R::exec("INSERT INTO product_detail (product_id, attribute_id,attr_value) VALUES $sql_part");
        return;
    }
}


        // если менеджер убрал характеристику товара
        if(empty($data['detail']) && !empty($detail)) {


            \R::exec("DELETE FROM product_detail WHERE product_id = ?", [$id]);

            return;
        }
        // если изменились характеристики   - удалим и запишем новые

        if(!empty($data['detail']))
        {

            $result = array_diff($tmp, $detail);
            if (!empty($result) || count($tmp) != count($detail)) {
                \R::exec("DELETE FROM product_detail WHERE product_id = ?", [$id]);

                \R::exec("INSERT INTO product_detail (product_id, attribute_id,attr_value) VALUES $sql_part");
                return;
            }
        }
    }
    public function editRelatedProduct($id, $data){
        $related_product = \R::getCol('SELECT related_id FROM related_product WHERE product_id = ?', [$id]);
        // если менеджер убрал связанные товары - удаляем их
        if(empty($data['related']) && !empty($related_product)){
            \R::exec("DELETE FROM related_product WHERE product_id = ?", [$id]);
            return;
        }
        // если добавляются связанные товары
        if(empty($related_product) && !empty($data['related'])){
            $sql_part = '';
            foreach($data['related'] as $v){
                $v = (int)$v;
                $sql_part .= "($id, $v),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO related_product (product_id, related_id) VALUES $sql_part");
            return;
        }
        // если изменились связанные товары - удалим и запишем новые
        if(!empty($data['related'])){
            $result = array_diff($related_product, $data['related']);
            if(!empty($result) || count($related_product) != count($data['related'])){
                \R::exec("DELETE FROM related_product WHERE product_id = ?", [$id]);
                $sql_part = '';
                foreach($data['related'] as $v){
                    $v = (int)$v;
                    $sql_part .= "($id, $v),";
                }
                $sql_part = rtrim($sql_part, ',');
                \R::exec("INSERT INTO related_product (product_id, related_id) VALUES $sql_part");

            }
        }
    }

    public function brand($id, $data)
    {

    }
    public function editFilter($id, $data){

        $filter = \R::getCol('SELECT attr_id FROM attribute_product WHERE product_id = ?', [$id]);
        // если менеджер убрал фильтры - удаляем их
        if(empty($data['attrs']) && !empty($filter)){
            \R::exec("DELETE FROM attribute_product WHERE product_id = ?", [$id]);

            return;

        }

        // если фильтры добавляются
        if(empty($filter) && !empty($data['attrs'])){
            $sql_part = '';
            foreach($data['attrs'] as $v){
                $sql_part .= "($v, $id),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_part");
            return;
        }
        // если изменились фильтры - удалим и запишем новые
        if(!empty($data['attrs'])){

            $result = array_diff($filter, $data['attrs']);
            if(!$result || count($filter) != count($data['attrs'])){
                \R::exec("DELETE FROM attribute_product WHERE product_id = ?", [$id]);
                $sql_part = '';
                foreach($data['attrs'] as $v){
                    $sql_part .= "($v, $id),";
                }
                $sql_part = rtrim($sql_part, ',');

                \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_part");
            }
        }
    }

    public function getImg(){
        if(!empty($_SESSION['single'])){
            $this->attributes['img'] = $_SESSION['single'];
            unset($_SESSION['single']);
        }
        if(!empty($_SESSION['slider'])){
            $this->attributes['slider_img'] = $_SESSION['slider'];
            unset($_SESSION['slider']);
        }
    }

    public function saveGallery($id){
        if(!empty($_SESSION['multi'])){
            $sql_part = '';
            foreach($_SESSION['multi'] as $v){
                $sql_part .= "('$v', $id),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO gallery (img, product_id) VALUES $sql_part");
            unset($_SESSION['multi']);
        }
    }

    public function uploadImg($name, $wmax, $hmax){
        $uploaddir = WWW . '/images/';
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES[$name]['name'])); // расширение картинки
        $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
        if($_FILES[$name]['size'] > 1048576){
            $res = array("error" => "Ошибка! Максимальный вес файла - 1 Мб!");
            exit(json_encode($res));
        }
        if($_FILES[$name]['error']){
            $res = array("error" => "Ошибка! Возможно, файл слишком большой.");
            exit(json_encode($res));
        }
        if(!in_array($_FILES[$name]['type'], $types)){
            $res = array("error" => "Допустимые расширения - .gif, .jpg, .png");
            exit(json_encode($res));
        }
        $new_name = md5(time()).".$ext";

        $uploadfile = $uploaddir.$new_name;

        if(@move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)){

            if($name == 'single'){
                $_SESSION['single'] = $new_name;
            }elseif($name == 'multi'){
                $_SESSION['multi'][] = $new_name;
            }
        elseif($name == 'slider'){
            $_SESSION['slider'] = $new_name;
        }
            self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);
            $res = array("file" => $new_name);
            exit(json_encode($res));
        }
        exit("файл не переместился");
    }

    /**
     * @param string $target путь к оригинальному файлу
     * @param string $dest путь сохранения обработанного файла
     * @param string $wmax максимальная ширина
     * @param string $hmax максимальная высота
     * @param string $ext расширение файла
     */
    public static function resize($target, $dest, $wmax, $hmax, $ext){
        list($w_orig, $h_orig) = getimagesize($target);
        $ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная

        if(($wmax / $hmax) > $ratio){
            $wmax = $hmax * $ratio;
        }else{
            $hmax = $wmax / $ratio;
        }

        $img = "";
        // imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
        switch($ext){
            case("gif"):
                $img = imagecreatefromgif($target);
                break;
            case("png"):
                $img = imagecreatefrompng($target);
                break;
            default:
                $img = imagecreatefromjpeg($target);
        }
        $newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки

        if($ext == "png"){
            imagesavealpha($newImg, true); // сохранение альфа канала
            $transPng = imagecolorallocatealpha($newImg,0,0,0,127); // добавляем прозрачность
            imagefill($newImg, 0, 0, $transPng); // заливка
        }

        imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
        switch($ext){
            case("gif"):
                imagegif($newImg, $dest);
                break;
            case("png"):
                imagepng($newImg, $dest);
                break;
            default:
                imagejpeg($newImg, $dest);
        }
        imagedestroy($newImg);
    }
}