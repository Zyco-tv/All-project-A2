<?php
    session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_POST['name'])) {
        if (empty($_POST['name'])) {
            $_SESSION['name'] = 'le champ name et requis';
        }else if (!preg_match("#^[a-zA-Z]{2,20}$#", $_POST[name])) {
            $nameErr = "Entre 2 et 20 lettres";
            $name = $_POST['name'];
        }else {
            $name = $_POST['name'];
        }
    }
    if (isset($_POST["email"])) {
        if (empty($_POST['email'])) {
            $_SESSION['email'] = "l'email est requis";
        }else if (!preg_match('#^[A-Za-z0-9.]+\@[A-Za-z0-9.]+.[A-Za-z]{1,4}$#', $_POST[email])) {
            $emailErr = "Format incorrect (exemple@domain.ext)";
        } else {
            $email = $_POST['email'];
        }
    }
    if (isset($_POST["pass"])) {
        if (empty($_POST['pass'])) {
            $_SESSION['pass'] = "le password est requis";
        }else if (!preg_match('#^[A-Za-z0-9]{6,}$#', $_POST[pass])) {
            $passErr = "Format incorrect (au moins 6 caractères)";
        } else {
            $pass = $_POST['pass'];
        }
    }
    if (isset($_SESSION["age"])) {
        if (empty($_SESSION['age'])) {
            $_SESSION['age'] = "l'age est requis";
        }else if (!preg_match('#^[0-9]+$#', $_SESSION['age'])) {
            $ageErr = "Format incorrect (il ne faut que des chiffres)";
        } else {
            $age = $_SESSION['age'];
        }
    }
}
?>
