<?php
session_start();

try
{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=chat;charset=utf8','root','root');
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}

$_SESSION['usernameR'] = $_POST['usernameR'];
$_SESSION['passwordR'] = $_POST['passwordR'];
$_SESSION['confirmR'] = $_POST['confirmR'];

if (isset($_SESSION["usernameR"])) {
    if (empty($_SESSION['usernameR'])) {
        $_SESSION['usernameErr'] = "le name est requis";
    }else if (!preg_match('#^[A-Za-z]{2,20}$#', $_SESSION['usernameR'])) {
        $_SESSION['usernameErr'] = "Format incorrect (entre 2 et 20 lettres)";
    } else {
        $_SESSION['usernameR'] = $_SESSION['usernameR'];
    }
}
if (isset($_SESSION["passwordR"])) {
    if (empty($_SESSION['passwordR'])) {
        $_SESSION['passwordErr'] = "le password est requis";
    }else if (!preg_match('#^[A-Za-z0-9]{6,}$#', $_SESSION['passwordR'])) {
        $_SESSION['passwordErr'] = "Format incorrect (au moins 6 caractères)";
    } else {
        $_SESSION['passwordR'] = $_SESSION['passwordR'];
    }
}
if (isset($_SESSION["confirmR"])) {
    if (empty($_SESSION['confirmR'])) {
        $_SESSION['confirmErr'] = "le password est requis";
    }else if (!preg_match('#^[A-Za-z0-9]{6,}$#', $_SESSION['confirmR'])) {
        $_SESSION['confirmErr'] = "Format incorrect (au moins 6 caractères)";
    } else {
        $_SESSION['confirmR'] = $_SESSION['confirmR'];
    }
    if ($_SESSION['passwordR'] != $_SESSION['confirmR']) {
        $_SESSION['confirmErr'] = "ce n'est pas égal au password";
    }
}

if (isset($_POST['usernameR']) && !empty($_POST["usernameR"]) && isset($_POST['passwordR']) && !empty($_POST["passwordR"])) {
    $req = $bdd->prepare('INSERT INTO user(pseudo, password) VALUES (:pseudo, :password)');
    $response = $req->execute(array(
        'pseudo' => $_POST['usernameR'],
        'password' => $_POST['passwordR'],
        ));
        $_SESSION['user'] = [$_POST['usernameR'], $_POST['passwordR']];
 }
 if (isset($_POST['usernameL']) && !empty($_POST["usernameL"]) && isset($_POST['passwordL']) && !empty($_POST["passwordL"])) {
    $req = $bdd->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND password = :password');
    $req->execute(array(
        'pseudo' => $_POST['usernameL'],
        'password' => $_POST['passwordL'],
        ));
    if ($user = $req->fetch()) {
        $_SESSION['user'] = [$_POST['usernameL'], $_POST['passwordL']];
    }
}
    if (!isset($_SESSION['usernameErr']) && !isset($_SESSION['passwordErr'])) {
        header('Location: index.php');
        exit();
    }
        header('Location: register.php');
?>

<!--    SQL COMMANDE

    CREATE DATABASE chat;
    -------------------
    CREATE TABLE user(
    -> id INT NOT NULL,
    -> pseudo VARCHAR(255) UNIQUE NOT NULL,
    -> password VARCHAR(50) NOT NULL, 
    -> PRIMARY KEY (id)
    -> );
    --------------------
    CREATE TABLE message(
    -> id INT NOT NULL,
    -> user_id INT NOT NULL,
    -> PRIMARY KEY (id)
    -> );
    --------------------
     ALTER TABLE message ADD CONSTRAINT fk_chat_user FOREIGN KEY (user_id) REFERENCES user(id);


 -->