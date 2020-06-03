<?php

namespace Todo\Models;


class TodoManager {
    private $table = 'todo_list';
    private $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function create($data)
    {
        $req = $this->pdo->prepare('INSERT INTO ' . $this->table . ' (title, user_id) VALUES (:title, :user_id)');
        $req->execute([
            'title' => $data['title'],
            "user_id" => $_SESSION["user"]['id']
        ]);
    }

    public function all()
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id');
        $req->execute([
            "user_id" => $_SESSION["user"]['id']
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\Todo');
        return $req->fetchAll();
    }

    public function delete($title) {

        $req = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE title = :title');
        $req->execute([
            "title" => $title
        ]);
    }

    public function findByTitle($title)
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE title = :title');
        $req->execute([
            "title" => $title
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\Todo');
        return $req->fetch();
    }

    public function update($title)
    {
        $req = $this->pdo->prepare('UPDATE ' . $this->table . ' SET title = :title WHERE title = :titleParam');
        $req->execute([
            "title" => $_POST['title'],
            "titleParam" => $title
        ]);
    }
}