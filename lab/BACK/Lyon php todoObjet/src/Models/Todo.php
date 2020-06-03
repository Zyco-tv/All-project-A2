<?php

namespace Todo\Models;

class Todo {
    private $title;
    private $id;

    public function getId()
    {
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getTask(){
        return $this->task;
    }
    public function setTitle($title){
        is_string($title) && strlen($title) >= 2 ? $this->title = $title : trigger_error('le titre doit avoir minimum 2 caractères', E_USER_NOTICE);
        }
}