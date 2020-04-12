<?php

namespace app\models;

class Task extends AppModel
{
    public $attr = [
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

    public static function saveTask($data)
    {
        $tasks = \R::dispense('tasks');
        $tasks->user_id = $data['user_id'];
        $tasks->title = $data['title'];
        $tasks->description = $data['description'];
        \R::store($tasks);
    }

}