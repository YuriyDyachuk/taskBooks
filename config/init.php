<?php

define('DEBUG', 0);
define('ROOT', dirname(__DIR__));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/vendor/taskBooks/core');
define('LIBS', ROOT . '/vendor/taskBooks/core/libs');
define('CACHE', ROOT . '/temp/cache');
define('CONFIG', ROOT . '/config');
define('LAYOUT', 'pride');

$path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$path = preg_replace("#[^/]+$#", '', $path);
$path = str_replace('/public/','', $path);
define('PATH', $path);
define('ADMIN', PATH . 'admin');

// composer
require_once ROOT . '/vendor/autoload.php';