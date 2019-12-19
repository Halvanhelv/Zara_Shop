<?php


namespace app\models\admin;


use app\models\AppModel;

class Brand extends AppModel
{
    public $attributes = [
        'title' => '',

    ];
    public $rules = [
        'required' => [
            ['title'],
        ],

    ];
}