<?php

//Entité
namespace User\Models;
class User {
    private $username;
    private $password;
    private $bio;
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
    public function getBio(){
        return $this->bio;
    }
    public function setBio($bio){
        if (is_string($bio)) {
            $this->bio = $bio;
        }
        echo 'error';
    }
    public function getShortBio($limit){
        return strlen($this->bio) > $limit ? substr($this->bio, 0, $limit) . '...' : $this->bio;
    }
}