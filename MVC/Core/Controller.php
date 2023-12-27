<?php
class Controller
{
    public function model($model)
    {
        require_once "./MVC/Model/" . $model . ".php";
        return new $model;
    }
    public function view($view, $data = [])
    {
        require_once "./MVC/View/" . $view . ".php";;
    }
}