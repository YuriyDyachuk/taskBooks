<?php

namespace app\models\admin;

class Task extends AppAdmin
{
    public $attr = [
      'id' => '',
      'user_id' => '',
      'title' => '',
      'description' => '',
    ];

    public $rules = [
      'required' => [
        ['title'],
        ['description'],
      ],
    ];
}