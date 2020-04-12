<?php

namespace app\models;

class User extends AppModel
{
    public $attr = [
      'name' => '',
      'email' => '',
      'login' => '',
      'password' => '',
      'role' => 'user',
    ];

    public $rules = [
      'required' => [
        ['name'],
        ['email'],
        ['login'],
        ['password'],
        ],
      'email' => [
          ['email'],
        ],
      'lengthMin' => [
        ['password', 3],
      ]
    ];

    public function login($admin = false)
    {
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $pass = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if ($login && $pass) {
            if ($admin) {
                $user = \R::findOne('users',"login = ? AND role = 'admin'", [$login]);
            }else{
                $user = \R::findOne('users','login = ?', [$login]);
            }
            if ($user) {
                if (password_verify($pass, $user->password)) {
                    foreach ($user as $k=>$v) {
                        if ($k !='password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
                }
            }
        }
        return false;
    }


    public function emailUnique()
    {
        $user = \R::findOne('users','login = ? OR email = ?',[$this->attr['login'], $this->attr['email']]);
        if ($user) {
            if ($user->login == $this->attr['login']) {
                $this->errors['unique'][] = 'Логин уже занят';
            }
            if ($user->email == $this->attr['email']) {
                $this->errors['unique'][] = 'E-mail уже занят';
            }
            return false;
        }
        return true;
    }

    public static function authUser()
    {
        return isset($_SESSION['user']);
    }

    public static function authAdmin()
    {
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin');
    }

}