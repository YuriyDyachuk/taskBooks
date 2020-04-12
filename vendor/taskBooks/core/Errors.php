<?php

namespace taskBooks;

use http\Encoding\Stream\Debrotli;

class Errors
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_exception_handler([$this,'exception']);
    }

    public function exception($obj) {
        $this->logErrors($obj->getMessage(), $obj->getFile(), $obj->getLine());
        $this->displayError('Text', $obj->getMessage(), $obj->getFile(), $obj->getLine(), $obj->getCode());
    }

    public function logErrors($mess = '', $file = '', $line = '') {
        error_log("[". date('Y-m-d H:i:s'). "] 
        Текст ошибки: {$mess} : Файл: {$file} : Строка: {$line} ",3,ROOT. '/temp/errors.log');
    }

    protected function displayError($errNo, $errStr, $errFile, $errLine, $responce = 404) {
        http_response_code($responce);
        if ($responce == 404 && !DEBUG) {
            require  WWW . '/errors/404.php';
            die();
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        }else{
            require WWW. '/errors/prod.php';
        }
        die();
    }
}