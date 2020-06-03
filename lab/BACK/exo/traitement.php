<?php

session_start();
setcookie("pseudo", $_POST["pseudo"]); 
setcookie("password", $_POST["password"]); 

header('location: index.php')
?>