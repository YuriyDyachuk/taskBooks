<?php

namespace taskBooks\base;

abstract class Controller
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $data = [];
    public $meta = ['tile' => '','desc'=> '', 'keywords' => ''];
    public $layout;

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
    }

    public function setMeta($title = '', $desc = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

    public function getView()
    {
        $viewObj = new View($this->route, $this->layout, $this->view, $this->meta, $this->prefix);
        $viewObj->render($this->data);
    }

    public function res($data)
    {
        $this->data = $data;
    }

}