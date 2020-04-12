<?php

namespace taskBooks\base;

use taskBooks\Database;
use Valitron\Validator;

abstract class Model
{
    public $attr = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Database::instance();
    }

    public function load($data) {
        foreach ($this->attr as $name=>$val) {
            if (isset($data[$name])) {
                $this->attr[$name] = $data[$name];
            }
        }
    }

    public function save($table)
    {
        $res = \R::dispense($table);
        foreach ($this->attr as $name => $value) {
            $res->$name = $value;
        }
        return \R::store($res);
    }

    public function update($table, $id)
    {
        $bean = \R::load($table,$id);
        foreach ($this->attr as $name => $value) {
            $bean->$name = $value;
        }
        return \R::store($bean);
    }

    public function validation($data)
    {
        Validator::langDir(WWW . '/validation/lang');
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if ($v->validate()) {
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }
}