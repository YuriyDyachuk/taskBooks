<?php

namespace app\models\admin;

use RedBeanPHP\R;

class User extends AppAdmin
{
    public $attr = [
      'id' => '',
      'name' => '',
      'email' => '',
      'login' => '',
      'password' => '',
      'role' => '',
    ];

    public function adminCheck()
    {
        $user = R::findOne('users','(login = ? OR email = ?) AND id <> ?',
          [$this->attr['login'], $this->attr['email'], $this->attr['id']]);
        if ($user) {
            return false;
        }
        return true;
    }
}