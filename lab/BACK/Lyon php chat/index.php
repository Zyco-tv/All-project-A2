<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
  }

try
{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=chat;charset=utf8','root','root');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
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
<body class="flex flex-col h-screen">
    <header class="bg-orange-500 text-white">
        <div class="container mx-auto text-center">
            <h1 class="p-2 text-2xl">Mini Chat</h1>
        </div>
    </header>

    <main class="flex-grow pt-2">
        <div class="container mx-auto p-2 bg-gray-100 rounded flex flex-col">
            <div id="messages" class="messages flex-grow overflow-auto text-white" style="height:calc(100vh - 120px)">          
                    <div class="flex mb-4">
                        <div class="message rounded-lg px-4 py-2 bg-red-500 max-w-lg">Author: Un message </div>
                    </div>

                    <div class="flex mb-4">
                        <div class="message rounded-lg px-4 py-2 bg-red-500 max-w-lg">Author: Un message </div>
                    </div>

                    <div class="flex mb-4">
                        <div class="message rounded-lg px-4 py-2 bg-red-500 max-w-lg">Author: Un message </div>
                    </div>

                    <div class="flex mb-4">
                        <div class="message rounded-lg px-4 py-2 bg-red-500 max-w-lg">Author: Un message </div>
                    </div>

                    <div class="flex mb-4 justify-end">
                        <div class="message rounded-lg px-4 py-2 bg-red-500 max-w-lg">Un message </div>
                    </div>
            </div>      

            <form action="traitement.php" method="post" class="-mx-2 flex w-full">
                <input type="text" name="message" placeholder="Tapez votre message ici!" value="" class="py-2 px-4 border flex-grow">
                <input type="submit" value="Envoyer" class="px-4 py-2 rounded bg-green-500">
            </form> 
        </div>
          
    </main>

    <script>
        document.getElementById('messages').scrollTop = 9999999;
    </script>
</body>
</html>