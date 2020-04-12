<?php

namespace app\controllers;

use taskBooks\App;
use taskBooks\libs\Pagination;

class MainController extends BaseController
{
    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $count = \R::count('tasks',"");
        $pagination = new Pagination($page,$perpage,$count);
        $start = $pagination->getStart();
        $tasks = \R::getAll("SELECT `tasks`.`id`,`tasks`.`title`,`tasks`.`description`,`tasks`.`publish`,`tasks`.`created_at`,`users`.`name`,`users`.`email` FROM `tasks`,`users` WHERE `tasks`.`user_id` = `users`.`id` GROUP BY `tasks`.`id` ORDER BY `tasks`.`id` LIMIT $start,$perpage");

        $this->setMeta('Главная страница','Онлайн задачник','');
        $this->res(compact('tasks','pagination'));
    }

}