<?php
namespace Todo\Controllers;

use Todo\Models\UserManager;
use Todo\Validator;



class UserController extends Controller{

    private $manager;

    public function __construct()
    {
        $this->manager = new UserManager();
        parent::__construct();
    }
    
    public function index(){
    //cree une instance objet
        $users = $this->manager->all();       //utilise l'objet -> recup les objets 
        require VIEW.'index.php';         //apeller la vue 
    }

    

    // public function show($username){
    //     $manager = new UserManager();     //cree une instance objet
    //     $user = $manager->findByUsername($username);
    //     require VIEW.'show.php';  //apeler la vue du fichier
    // }

    public function update($username){
        $user = $this->manager->update($username);
        $this->redirect('');
              //apeller la vue 
    }
    
    public function showRegister() {
        require VIEW . "Auth/register.php";
    }

    public function showLogin() {
        require VIEW . "Auth/login.php";
    }

    function login() {
        // valid
        $this->validator->validate([
            "username" => ["required"],
            "password" => ["required"],
        ]);
        if(!$validator->hasErrors()) {
            $user = $this->manager->findByUsername($_POST["username"]);
            if ($user && password_verify($_POST["password"], $user->getPassword())) {
                //session
                $_SESSION["user"] = ["username" => $user->getUsername(), "id" => $user->getId()];
                $this->redirect('dashboard');
                
            }
            $_SESSION['errors']["username"] = "Les identifiants ne sont pas bon";        
        }
        $this->redirect('login');
    }

    function register() {
        
        // valid
        $this->validator->validate([
            "username" => ["required", "alphaNumDash", "min:2"],
            "password" => ["required", "min:4"],
        ]);
        if(!$validator->hasErrors()) {
            $user = $this->manager->findByUsername($_POST["username"]);
            if ($user) {
                $_SESSION['errors']["username"] = "Le nom est deja pris";
                $this->redirect('register');
                
            }
            $id = $manager->storeUser($_POST);
            $_SESSION["user"] = ["username" => $_POST["username"], "id" => $id];
            $this->redirect('dashboard');
            
        }
        $this->redirect('register');
        
    }



}