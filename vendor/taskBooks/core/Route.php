<?php

namespace taskBooks;

class Route
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        $url = self::removeQuery($url);
        if (self::matchRoute($url)) {
            $contr = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if (class_exists($contr)) {
                $contrObj = new $contr(self::$route);
                $action = self::lowerCase( self::$route['action'] . 'Action');
                 if (method_exists($contrObj, $action)) {
                     $contrObj->$action();
                     $contrObj->getView();
                 }else{
                     throw new \Exception("$contr::$action не найден",404);
                 }
            }else{
                throw new \Exception("$contr не найден",404);
            }
        }
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {
                foreach ($matches as $key => $value) {
                    if (is_string($key)) {
                        $route[$key] = $value;
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                }else{
                    $route['prefix'] .= '\\';
                }
                $route['controller'] = self::upperCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    protected static function upperCase($name)
    {
       return str_replace(' ','', ucwords(str_replace('-',' ', $name)));

    }

    protected static function lowerCase($name)
    {
        return lcfirst(self::upperCase($name));
    }

    public static function removeQuery($url)
    {
        if ($url) {
            $param = explode('&', $url,2);
            if (false === strpos($param[0],'=')) {
                return rtrim($param[0],'/') ;
            }else{
                return '';
            }
        }
    }

}