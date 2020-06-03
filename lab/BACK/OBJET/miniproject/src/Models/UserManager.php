<?php

namespace User\Models;

class UserManager {
    private $table = 'users';
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
    $req->setFetchMode(\PDO::FETCH_CLASS, 'User\Models\User');
    return $req->fetch();
    }
    public function findByUsername($username)
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $req->execute([
            "username" => $username
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'User\Models\User');
        return $req->fetch();
    }
    public function all()
    {
        $req = $this->pdo->query('SELECT * FROM ' . $this->table);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'User\Models\User');
        return $req->fetchAll();
    }
    public function create($data)
    {
        $req = $this->pdo->prepare('INSERT INTO ' . $this->table . ' (username,password,bio) VALUES (:username, :password, :bio)');
        $req->execute([
            'username' => $data['username'],
            'password' => $data['password'],
            'bio' => $data['bio']
        ]);
    }
    public function update($username)
    {
        $req = $this->pdo->prepare('UPDATE ' . $this->table . ' SET username = :username, password = :password, bio = :bio WHERE username= :oldUser ');
    $req->execute ([
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "bio" => $_POST['bio'],
        "oldUser" => $username
    ]);
    }
    public function delete($username)
    {
        global $bdd;
        $req = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE username = :username');
        $req->execute([
            "username" => $username
        ]);
    }
}