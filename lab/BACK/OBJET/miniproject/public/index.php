<?php

//composer 



// CHEMAIN


    define('SRC', __DIR__ . '/../src/');
    define('CONTROLLER', __DIR__ . '/../src/Controllers/');
    define('MODEL', __DIR__ . '/../src/Models/');
    define('VIEW', __DIR__ . '/../src/Views/');

// ACCES BDD

    define('USER', 'root');
    define('DATABASE', 'objetuser');
    define('PASSWORD', 'root');
    // $bdd = new PDO('mysql:host=127.0.0.1;dbname=' . DATABASE . ';charset=utf8', USER, PASSWORD);
    // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// require du router
require '../vendor/autoload.php';

    $router = new User\Router();
    $router->run();