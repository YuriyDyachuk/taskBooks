<?php

namespace taskBooks;

class App
{
    public static $app;

    public function __construct()
    {
        $res = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
        new Errors();
        Route::dispatch($res);
    }

    protected function getParams()
    {
        $params = require CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                self::$app->setProperty($key, $val);
            }
        }
    }
}