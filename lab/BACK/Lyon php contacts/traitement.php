<?php
session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$_SESSION['name'] = $_POST['name'];
$_SESSION['subject'] = $_POST['subject'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['date_creation'] = $_POST['date_creation'];
$_SESSION['delete'] = $_POST['delete'];


// verifier que nom est bien en alphabetique et des tirets et minimum 2 caractères 

if (isset($_SESSION["name"])) {
    if (empty($_SESSION['name'])) {
        $_SESSION['nameErr'] = "le champ est requis";
    }else if (!preg_match('#^[A-Za-z-]{2,}$#', $_SESSION['name'])) {
        $_SESSION['nameErr'] = "Format incorrect: 2 ou plus caractères alphabetique";
        header('Location: index.php');
    } else {
        $_SESSION['name'] = $_SESSION['name'];
    }
}
// verifier le sujet est bien alpha-numerique et des tirets et minim 2 caractères 

if (isset($_SESSION["subject"])) {
    if (empty($_SESSION['subject'])) {
        $_SESSION['subjectErr'] = "le champ est requis";
    }else if (!preg_match('#^[A-Za-z0-9-]{2,}$#', $_SESSION['subject'])) {
        $_SESSION['subjectErr'] = "Format incorrect 2 ou plus caractères alphabetique";
        header('Location: index.php');
    } else {
        $_SESSION['subject'] = $_SESSION['subject'];
    }
}
// pour le Message pas possible d'avoir des champs vides 

if (isset($_SESSION["message"])) {
    if (empty($_SESSION['message'])) {
        $_SESSION['messageErr'] = "le champ est requis";
        header('Location: index.php');
    }else {
        $_SESSION['message'] = $_SESSION['message'];
    }
}

// Si tout sa c'est bon connexion a la base de donée

try
{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=evaluation;charset=utf8','root','root');
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
// Puis envoyer le formulaire 

if (!isset ($_SESSION ['nameErr']) && !isset($_SESSION['subjectErr']) && !isset($_SESSION['messageErr'])) {
    $req = $bdd->prepare('INSERT INTO contact(name, subject, message) VALUES (:name, :subject, :message)');
    $response = $req->execute(array(
        'name' => $_POST['name'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message'],
        ));
        header('Location: contact.php');
}

//DELETE les message



// Pouvoir les Afficher en plus grand 


}
//redirection
