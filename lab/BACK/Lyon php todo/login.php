<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login PAGE</title>
</head>
<body>
<div class="header">
	<h2>Login</h2>
</div>
<form method="post" action="traitement.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="usernameL" value="">
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="passwordL">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">SE connecter</button>
	</div>
    <p>
		Pas encore <a href="register.php">Inscrit</a>
	</p>
</form>
</body>
</html>