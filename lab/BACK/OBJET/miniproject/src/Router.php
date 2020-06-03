<?php

namespace User;
use \User\Controllers\UserController;

Class Router{
    private $method;
    private $url;

    public function __construct(){

        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REQUEST_URI'];

    }

    public function run(){

        $controller = new UserController();

        if ($this->url=='/') {
             $controller -> index();      
        }elseif (preg_match('#^\/([a-z0-9A-Z-]+)\/edit$#',$this->url,$matches) && $this->method == 'GET'){
            $controller -> edit($matches[1]);
        }elseif (preg_match('#^\/([a-z0-9A-Z-]+)\/edit$#',$this->url,$matches) && $this->method == 'POST'){
            $controller -> update($matches[1]);
        }
        elseif ($this->url=='/nouveau' && $this->method == 'GET') {
            $controller -> create();
        }elseif ($this->url=='/nouveau' && $this->method == 'POST') {
            $controller -> store();
        }
        elseif (preg_match('#^\/([a-z0-9A-Z-]+)$#',$this->url,$matches)){
            $controller->show($matches[1]);
        }elseif(preg_match('#^\/([a-z0-9A-Z-]+)\/delete$#',$this->url,$matches) && $this->method == 'POST') {
            $controller -> delete($matches[1]);
        } else {
            echo 'aucune rooute';
        }
    }

}