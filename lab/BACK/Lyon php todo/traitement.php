<?php

session_start();

try
{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8','root','root');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
if (isset($_POST["todo"])) {
   $req = $bdd->prepare('INSERT INTO item(item) VALUES(:item)');
   $req->execute(array(
    "item"=> $_POST["todo"],
   ));
}
if (isset($_POST["delete"])) {
   $req = $bdd->prepare('DELETE FROM item WHERE id=:id');
   $req->execute(array(
    "id"=> $_POST["id"],
   ));
}
if (isset($_POST["update"])) {
   $req = $bdd->prepare('UPDATE item SET item=:item WHERE id=:id');
   $req->execute(array(
   "item"=> $_POST["update"],
   "id"=> $_POST["id"],
   ));
}

if (isset($_POST['usernameR']) && !empty($_POST["usernameR"]) && isset($_POST['passwordR']) && !empty($_POST["passwordR"])) {
   $req = $bdd->prepare('INSERT INTO users(pseudo, password) VALUES (:pseudo, :password)');
   $req->execute(array(
       'pseudo' => $_POST['usernameR'],
       'password' => $_POST['passwordR'],
       ));

       $_SESSION['user'] = [$_POST['usernameR'], $_POST['passwordR']];
}

if (isset($_POST['usernameL']) && !empty($_POST["usernameL"]) && isset($_POST['passwordL']) && !empty($_POST["passwordL"])) {
   $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
   $req->execute(array(
       'pseudo' => $_POST['usernameL'],
       'password' => $_POST['passwordL'],
       ));
   if ($user = $req->fetch()) {
       $_SESSION['user'] = [$_POST['usernameL'], $_POST['passwordL']];
   }
}


header("location: /");
?>

