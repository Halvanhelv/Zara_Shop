<?php


namespace app\models;


class Checkout extends AppModel
{
    public $attributes = [
        'name' => '',
        'email' => '',
        'address' => '',
        'login' => '',

    ];

    public $rules = [
        'required' => [
            ['name'],
            ['email'],
            ['address'],
        ],
        'email' => [
            ['email'],
        ],'numeric' => [
         ['address']
         ]
    ];

}