<?php

namespace Todo\Models;


class TaskManager {
    private $table = 'item';
    private $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function store($field, $idTodo)
    {
        $req = $this->pdo->prepare('INSERT INTO ' . $this->table . ' (title, todo_id) VALUES (:title, :todo_id)');
        $req->execute([
            'title' => $_POST[$field],
            "todo_id" => $idTodo
        ]);
    }
    public function findByTask($task)
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE title = :title');
        $req->execute([
            "title" => $title
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\Todo');
        return $req->fetch();
    }

    public function all($todoId)
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE todo_id = :todo_id');
        $req->execute([
            "todo_id" => $todoId
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\Task');
        return $req->fetchAll();
    }

    //find($id)
    public function find($id)
    {
        $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $req->execute([
            "id" => $id
        ]);
        $req->setFetchMode(\PDO::FETCH_CLASS, 'Todo\Models\Task');
        return $req->fetch();
    }


    //update
    public function update($id, $field)
    {
        $req = $this->pdo->prepare('UPDATE ' . $this->table . ' SET title = :title WHERE id = :id');
        $req->execute([
            "title" => $_POST[$field],
            "id" => $id
        ]);
    }

    public function deleteTask($id) {

        $req = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $req->execute([
            "id" => $id
        ]);
    }
}