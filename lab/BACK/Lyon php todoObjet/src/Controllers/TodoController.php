<?php

namespace Todo\Controllers;

use Todo\Models\UserManager;
use Todo\Models\TodoManager;
use Todo\Models\TaskManager;
use Todo\Validator;


class TodoController extends Controller{
    private $manager;

    public function __construct()
    {
        $this->manager = new TodoManager();
        parent::__construct();

        if (!isset($_SESSION["user"])) {
            $this->redirect('login');
        }
    }
    public function create(){
        require VIEW.'create.php';       
    }

    public function store(){
        $this->validator->validate([
            "title" => ["required", "alphaNumDash", "min:2"],
        ]);
        if(!$this->validator->hasErrors()) {
           
            $title = $this->manager->findByTitle($_POST["title"]);
            if ($title) {
                $_SESSION['errors']["title"] = "Le nom est deja pris";
                $this->redirect('dashboard/nouveau');
            }

            $title = $manager->create($_POST);
            $this->redirect('dashboard');
        }
        $this->redirect('dashboard/nouveau');
    }

    public function dash()
    {
        $titles = $this->manager->all();
        require VIEW . 'dash.php';
    }
    public function edit($title){
        $itemManager = new TaskManager();   //cree une instance objet
        $todo = $this->manager->findByTitle($title);
        $tasks = $itemManager->all($todo->getId());
        //tasks
        require VIEW.'edit.php';  //apeler la vue du fichier
    }
    public function show($title){     //cree une instance objet
        $todo = $this->manager->findByTitle($title);
        require VIEW.'show.php';  //apeler la vue du fichier
    }
    public function delete($title){
    //cree une instance objet
        $todo = $this->manager->delete($title);
        $this->redirect('dashboard');
    }
    public function update($title){
        //cree une instance objet
        $taskManager = new TaskManager(); 
        $todoManager = new TodoManager();

        $toValidate= [];
        foreach($_POST as $field => $input) {
            // si le champs ressemble a task-
            if (preg_match("#^task-\d+$#", $field)) {
                $toValidate[$field] = ["required"];
            }
        }

        // utiliser validtae avec Tovalidate
        $this->validatorTask->validate($toValidate);

        // si cest valid
        if (!$this->validatorTask->hasErrors()) {
            $todo = $todoManager->findByTitle($title);

            foreach($_POST as $field => $input) {
                if (preg_match("#^task-(\d+)$#", $field, $matches)) {

                    $task = $taskManager->find($matches[1]);
                    // existe update
                    if ($task) {
                        $id = $taskManager->update($matches[1], $field);
                    } else {
                        $taskManager->store($field, $todo->getId());
                    }

                    //create
                }
            //utiliser task manager pour chaque "store($field)
            }
        }


        $validatorTodo = new Validator();
        $validatorTodo->validate([
            "title" => ["required", "alphaNumDash", "min:2"],
        ]);
        if(!$validatorTodo->hasErrors()) {
            $todo = $todoManager->update($title);
            if ($todo) {
                $_SESSION['errors']["title"] = "Le nom est deja pris";
            }
        } 

        $this->redirect('dashboard/' . $_POST["title"].'/edit');
    }

    public function deleteTask($id){
        $manager = new TaskManager();     //cree une instance objet
        $task = $manager->deleteTask($id);
        $this->redirect($_SERVER["HTTP_REFERER"]);
    }
}

