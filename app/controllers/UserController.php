<?php

namespace app\controllers;

use app\models\User;

class UserController extends BaseController
{
    const URL = PATH;
    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if($user->login()) {
                $_SESSION['success'] = 'Добро пожаловать';
                header('Location: ' . self::URL);
            }else{
                $_SESSION['error'] = 'Введите коректные данные!';
            }
        }
        $this->setMeta('Вход');
    }

    public function registerAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if (!$user->validation($data) || !$user->emailUnique()) {
                $user->getErrors();
                $_SESSION['form-data'] = $data;
            }else{
                $user->attr['password'] = password_hash($user->attr['password'],PASSWORD_DEFAULT);
                if ($user->save('users')) {
                    $_SESSION['success'] = 'Пользователь зарегистрирован';
                }else{
                    $_SESSION['error'] = 'Ошибка!';
                }
            }
        }
        $this->setMeta('Регистрация','','');
    }

    public function logoutAction()
    {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
            header('Location: ' . self::URL);
    }
}