<?php

namespace Todo;
use Todo\Controllers\UserController;
use Todo\Controllers\TodoController;

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
        }elseif ($this->url=='/dashboard') {
            $todocontroller = new TodoController();
            $todocontroller -> dash();      
       }elseif (preg_match('#^\/dashboard/([a-z0-9A-Z-]+)\/edit$#',$this->url,$matches) && $this->method == 'GET'){
            $todocontroller = new TodoController();
            $todocontroller -> edit($matches[1]);
        }elseif (preg_match('#^\/dashboard/([a-z0-9A-Z-]+)\/edit$#',$this->url,$matches) && $this->method == 'POST'){
            $todocontroller = new TodoController();
            $todocontroller -> update($matches[1]);
        }elseif (preg_match('#^\/dashboard/([a-z0-9A-Z-]+)\/show$#',$this->url,$matches) && $this->method == 'GET'){
            $todocontroller = new TodoController();
            $todocontroller -> show($matches[1]);
        }elseif ($this->url=='/dashboard/nouveau' && $this->method == 'GET') {
            $todocontroller = new TodoController();
            $todocontroller -> create();
        }elseif ($this->url=='/dashboard/nouveau' && $this->method == 'POST') {
            $todocontroller = new TodoController();
            $todocontroller -> store();
        }elseif (preg_match('#^\/dashboard/([a-z0-9A-Z-]+)$#',$this->url,$matches)){
            $todocontroller = new TodoController();
            $todocontroller->show($matches[1]);
        }elseif(preg_match('#^\/dashboard/([a-z0-9A-Z-]+)\/delete$#',$this->url,$matches) && $this->method == 'POST') {
            $todocontroller = new TodoController();
            $todocontroller -> delete($matches[1]);
        }elseif(preg_match('#^\/dashboard\/task\/([0-9]+)\/delete$#',$this->url,$matches) && $this->method == 'POST') {
            $todocontroller = new TodoController();
            $todocontroller -> deleteTask($matches[1]);
        }elseif(($this->url == '/login') && $this->method == "GET") {
            $controller ->showLogin();
        }elseif(($this->url == '/login') && $this->method == "POST") {
            $controller ->login();
        }elseif(($this->url == '/register') && $this->method == "GET") {
            $controller ->showRegister();
        }elseif(($this->url == '/register') && $this->method == "POST") {
            $controller ->register();
        }
        
        else {
            echo 'aucune rooute';
        }
    }

}