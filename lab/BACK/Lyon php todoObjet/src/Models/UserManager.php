<?php

namespace Todo\Models;


class UserManager {
    private $table = 'user';
    private $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public function find($id)
    {
    $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE id = :id');
    $req->execute ([
        "id" => $id 
    ]);
    $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\User');
    return $req->fetch();
    }

    public function findByUsername($username)
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $req->execute([
            "username" => $username
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\User');
        return $req->fetch();
    }

    public function all()
    {
        $req = $this->pdo->query('SELECT * FROM ' . $this->table);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\User');
        return $req->fetchAll();
    }
    
    public function storeUser($data)
    {
        $req = $this->pdo->prepare('INSERT INTO ' . $this->table . ' (username,password) VALUES (:username, :password)');
        $req->execute([
            'username' => $data['username'],
            'password' => password_hash($data['password'],PASSWORD_DEFAULT)
        ]);

        return $this->pdo->lastInsertId();
    }
    
}