<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link>
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<ul id="navigation">
    <img src="https://gamewave.fr/static/images/esport/teams/cdfe6-solary-53ps7sn1.png" alt="">
    <li><a href="#" title="">Profile1</a></li>
    <li><a href="#" title="">Profile2</a></li>
    <li><a href="#" title="">Profile3</a></li>
  </ul> 
      <h1>Création de compte </h1>
  <?php

        if (isset($_COOKIE["pseudo"]) && isset ($_COOKIE["password"])) {
          ?>
            <p>Pseudo: <?php echo $_COOKIE ["pseudo"]?></p>
            <p>Password: <?php echo $_COOKIE ["password"]?></p>
            <a href="logout.php">Logout</a>
          <?php
        } else {
          ?>
            <form action="traitement.php" method='post'>
              <p>pseudo: </p>
              <input type="text" name="pseudo">
              <p>Mot de passe: </p>
              <input type="password" name="password">
              <input type="submit" value="envoyer">
            </form>
            <?php
        }
          ?>
    
</body>
</html>