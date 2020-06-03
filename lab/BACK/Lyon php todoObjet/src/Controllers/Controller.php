<?php

namespace Todo\Controllers;
use Todo\Validator;

class Controller {
    protected $validator;
    protected $validatorTask;
    function __construct(){
        $this->validator = new Validator();
        $this->validatorTask = new Validator();
    }

    public function redirect($url){
        header("Location: /" . $url);
        exit();
    }
}