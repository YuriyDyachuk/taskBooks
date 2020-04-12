<?php

namespace app\controllers\admin;

use RedBeanPHP\R;

class MainController extends BaseController
{
    public function indexAction()
    {
        $count_task = R::count('tasks',"publish = '1'");
        $count_day = R::count('tasks','created_at = ?',[date('Y-m-d')]);
        $count_user = R::count('users');

        $this->setMeta('Admin panel');
        $this->res(compact('count_task','count_day','count_user'));
    }

}