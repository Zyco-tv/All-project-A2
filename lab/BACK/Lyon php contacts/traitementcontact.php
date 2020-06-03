<?php
session_status();

try
{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=evaluation;charset=utf8','root','root');
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}

if (isset($_POST["delete"])) {
    $req = $bdd->prepare('DELETE FROM contact WHERE id=:id');
    $req->execute(array(
     "id"=> $_POST["delete"],
    ));
    header('Location: contact.php');
 }

?>