<?php

namespace app\controllers\admin;

use app\models\User;
use RedBeanPHP\R;

class UserController extends BaseController
{
    public function indexAction()
    {
        $users = R::findAll('users');

        $this->setMeta('Список пользователей');
        $this->res(compact('users'));
    }
}