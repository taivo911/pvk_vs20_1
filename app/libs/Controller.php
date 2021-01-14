<?php


class Controller
{
    // load model
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }
    // load view
    public function view($view, $vaade = array())
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View '.$view.' does not exist');
        }
    }
}