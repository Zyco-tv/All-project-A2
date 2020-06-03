<?php 
namespace App\Models;

class AppManager {
    private $table = 'application';
    private $tables = 'projet';
    private $tabless = 'deventure';
    private $tablesss = 'moi';
    private $tablessss = 'competence';
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    
    public function storeApp(){
        $request = $this->pdo->prepare('INSERT INTO application (name,mail,message,user_id) VALUES (:name,:mail,:message,:user_id)' );
        $request->execute([
            "name" => $_POST["name"],
            "mail" => $_POST["mail"],
            "message" => $_POST["message"],
            "user_id" => $_SESSION["user"]->getId()
        ]);
        // return $this->pdo->lastInsertId();
    }



    public function all() {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->table . '');
        $request->execute();
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }

    public function allmoi() {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tablesss . '');
        $request->execute();
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }

    public function alldeventure() {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tabless . '');
        $request->execute();
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }
    public function allprojet() {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tables . '');
        $request->execute();
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }

    public function allcompetence() {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tablessss . '');
        $request->execute();
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }
    
    public function find($name)
    {
    $req = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE name = :name');
    $req->execute ([
        "name" => $name
    ]);
    $req->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\App');
    return $req->fetch();
    }

    public function delete($name)
    {
        $req = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE name = :nameParam');
        $req->execute([
            "nameParam" => $name
        ]);
    }

    public function updateHeader()
    {
        $req = $this->pdo->prepare('UPDATE deventure SET prenom = :prenom, job = :job  WHERE id = :id');
        $req->execute(array(
            "prenom" => $_POST["prenom"],
            "job" => $_POST["job"],
            "id" => "1"
        ));
    }

    public function updateMoi()
    {
        $req = $this->pdo->prepare('UPDATE moi SET contenue = :contenue, img = :img WHERE id = :id');
        $req->execute(array(
            "contenue" => $_POST["contenue"],
            "img" => $_POST["img"],
            "id" => "1"
        ));
    }

    public function updateCompetence($id)
    {
        $req = $this->pdo->prepare('UPDATE competence SET titre = :titre, img = :img, description = :description WHERE id = :id');
        $req->execute(array(
            "titre" => $_POST["titre"],
            "img" => $_POST["img"],
            "description" => $_POST["description"],
            "id" => $id
        ));
    }

    public function updateProjet($id)
    {
        $req = $this->pdo->prepare('UPDATE projet SET titre = :titre, contenue = :contenue, url = :url WHERE id = :id');
        $req->execute(array(
            "titre" => $_POST["titre"],
            "contenue" => $_POST["contenue"],
            "url" => $_POST["url"],
            "id" => $id
        ));
    }

    public function addProjet(){
        $request = $this->pdo->prepare('INSERT INTO projet (titre,contenue,url) VALUES (:titre,:contenue,:url)' );
        $request->execute([
            "titre" => $_POST["titre"],
            "contenue" => $_POST["contenue"],
            "url" => $_POST["url"]
        ]);
        // return $this->pdo->lastInsertId();
    }

    public function addCompetence(){
        $request = $this->pdo->prepare('INSERT INTO competence (titre,img,description) VALUES (:titre,:img,:description)' );
        $request->execute([
            "titre" => $_POST["titre"],
            "img" => $_POST["img"],
            "description" => $_POST["description"]
        ]);
        // return $this->pdo->lastInsertId();
    }
    public function deleteCompetence($id)
    {
        $req = $this->pdo->prepare('DELETE FROM competence WHERE id = :id');
        $req->execute(array(
            "id" => $id
        ));
    }
    public function deleteProjet($id)
    {
        $req = $this->pdo->prepare('DELETE FROM projet WHERE id = :id');
        $req->execute(array(
            "id" => $id
        ));


        
    }

}