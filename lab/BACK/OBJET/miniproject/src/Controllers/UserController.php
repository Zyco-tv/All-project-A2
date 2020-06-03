<?php
namespace User\Controllers;

use User\Models\UserManager;


class UserController {

    public function index(){
        $manager = new UserManager();     //cree une instance objet
        $users = $manager->all();       //utilise l'objet -> recup les objets 
        require VIEW.'index.php';         //apeller la vue 
    }

    public function edit($username){
        $manager = new UserManager();     //cree une instance objet
        $user = $manager->findByUsername($username);
        require VIEW.'edit.php';  //apeler la vue du fichier
    }

    public function delete($username){
        $manager = new UserManager();     //cree une instance objet
        $user = $manager->delete($username);
        header('Location: /');
    }

    public function show($username){
        $manager = new UserManager();     //cree une instance objet
        $user = $manager->findByUsername($username);
        require VIEW.'show.php';  //apeler la vue du fichier
    }

    public function create(){
        require VIEW.'create.php';         //apeller la vue 
    }

    public function store(){
        $manager = new UserManager();
        $user = $manager->create($_POST);
        header('Location: /');        //apeller la vue 
    }

    public function update($username){
        $manager = new UserManager();
        $user = $manager->update($username);
        header('Location: /');        //apeller la vue 
    }

}