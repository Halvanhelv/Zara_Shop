<?php


namespace app\models\admin;
use app\models\AppModel;

class Detail extends AppModel
{
    public $attributes = [
        'detail_name' => '',

    ];
    public $rules = [
        'required' => [
            ['detail_name'],
        ],

    ];

}