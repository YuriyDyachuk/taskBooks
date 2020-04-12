<?php

namespace app\controllers\admin;

use app\models\User;
use taskBooks\base\Controller;
use RedBeanPHP\R;

class BaseController extends Controller
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
        if (!User::authAdmin() && $route['action'] != 'login-admin') {
            header('Location: ' . PATH . 'user/login');
        }
        $db = require CONFIG . '/config_db.php';
        class_alias('\R','\RedBeanPHP\R');
        R::setup($db['dsn'],$db['user'],$db['pass']);
    }

    public function getId($get = true, $id = 'id')
    {
        if ($get) {
            $data = $_GET;
        }else {
            $data = $_POST;
        }
        $id = $data[$id] ? $data[$id] : null;
        if (!$id) {
            echo '';
        }else {
            return $id;
        }
    }
}