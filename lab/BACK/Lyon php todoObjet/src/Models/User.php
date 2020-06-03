<?php

namespace Todo\Models;

class User {
    private $id;
    private $username;
    private $password;
    public function getId()
    {
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        is_string($username) && strlen($username) >= 2 ? $this->username = $username : trigger_error('username doit avoir minimum 2 caractères', E_USER_NOTICE);
        }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword(String $password){
        strlen($password) >= 6 ? $this->password = $password : trigger_error('le password doit avoir minimum 6 caractères', E_USER_NOTICE);
    }
}