<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex flex-col h-screen bg-gray-100">
    <header class="bg-orange-500 text-white">
        <div class="container mx-auto text-center">
            <h1 class="p-2 text-2xl">Mini Chat</h1>
        </div>
    </header>

    <main class="container mx-auto mt-10">
    
        <div class="alert w-1/2 mx-auto mb-8 p-4 bg-red-300 border-2 rounded border-red-500">
            <p>Une erreur sur les identifiants !</p>
        </div>
        
        <form action="traitement.php" method="post" class="w-1/2 mx-auto bg-white rounded p-4">
            <div class="username mb-4">
                <label for="username" class="w-24 inline-block">Username</label>
                <input type="text" id="username" name="usernameL" value="" class="rounded py-2 px-4 border">
                <span class="text-red-500">Erreur message</span>
            </div>

            <div class="password mb-4">
                <label for="password" class="w-24 inline-block">Password</label>
                <input type="password" id="password" name="passwordL" value="" class="rounded py-2 px-4 border">
                <span class="text-red-500">Erreur message</span>
            </div>

            <input type="submit" value="Se connecter" class="px-4 py-2 rounded bg-gray-500 mx-auto">
            <span><a href="register.php" class="text-blue-500">Pas de compte ? S'inscrire</a></span>
        </form>
    </main>
</body>
</html>