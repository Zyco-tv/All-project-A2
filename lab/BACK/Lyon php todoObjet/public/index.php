<?php
session_start();

//composer 



// CHEMAIN


    define('SRC', __DIR__ . '/../src/');
    define('CONTROLLER', __DIR__ . '/../src/Controllers/');
    define('MODEL', __DIR__ . '/../src/Models/');
    define('VIEW', __DIR__ . '/../src/Views/');

// ACCES BDD

    define('USER', 'root');
    define('DATABASE', 'todolist');
    define('PASSWORD', 'root');
    // $bdd = new PDO('mysql:host=127.0.0.1;dbname=' . DATABASE . ';charset=utf8', USER, PASSWORD);
    // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// require du router
require '../vendor/autoload.php';

    $router = new Todo\Router();
    $router->run();

// fct helper
function errors($field) {
    if(isset($_SESSION['errors'][$field])) {
        $error = $_SESSION['errors'][$field];
        unset($_SESSION['errors'][$field]);
        return $error;
    }
  }

  function getold($field) {
    if(isset($_SESSION['old'][$field])) {
        $error = $_SESSION['old'][$field];
        unset($_SESSION['old'][$field]);
        return $error;
    }
  }
