<?php

namespace taskBooks\base;

use taskBooks\App;

class View
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];

    public function __construct($route, $layout = '', $view = '', $meta = '')
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
        $this->meta = $meta;
        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if (is_array($data)) extract($data);

        $view = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if (is_file($view)) {
            ob_start();
            require_once $view;
            $content = ob_get_clean();
        } else {
            throw new \Exception("$view не найден", 500);
        }
        if (false !== $this->layout) {
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($layoutFile)) {
                require_once $layoutFile;
            }else{
                throw new \Exception("$this->layout шаблон не найден", 500);
            }
        }
    }

    public function getMeta()
    {
        $data = '<title>' . $this->meta['title']  . '</title>'. PHP_EOL;
        $data .= '<meta="description" content="' . $this->meta['desc'] . '">' . PHP_EOL;
        return $data;
    }
}