<?php

namespace taskBooks;

class Database
{
    use Base;
    protected function __construct()
    {
        $db = require CONFIG . '/config_db.php';
        class_alias('\RedBeanPHP\R','\R');
        \R::setup($db['dsn'],$db['user'],$db['pass']);
        if (!\R::testConnection()) {
            throw new \Exception("Соединения нет", 500);
        }
        \R::freeze(true);
    }
}
