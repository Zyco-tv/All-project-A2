<?php 
session_start();

function getError($field) {
    if(isset($_SESSION[$field])) {
        $error = $_SESSION[$field];
        unset($_SESSION[$field]);
        return $error;
    }
}
function getValue($fieldR) {
    if(isset($_SESSION[$fieldR])) {
        $erroR = $_SESSION[$fieldR];
        unset($_SESSION[$fieldR]);
        return $erroR;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
</head>
<body class="text-gray-800 bg-gray-100">

    <header class="bg-gray-700">
        <div class="container mx-auto text-center flex justify-between">
            <a href="index.php"><h1 class="p-4 text-white">Contact</h1></a>
            <a href="contact.php" class="p-4 text-white">Voir message</a>
        </div>
    </header>

    <main class="container mx-auto">
        <form action="traitement.php" method="post" class="md:w-2/3 lg:w-1/2 mx-auto p-4 rounded bg-white mt-8">
            <h2 class="text-center p-4 text-xl">Nous contacter</h2>
            <div class="form-control flex flex-wrap">
                <label for="name" class="w-24 inline-block">Votre nom</label>
                <input type="text" class="px-4 py-2 border flex-grow" name="name" value="<?php echo getValue('name');?>" id="name">
                <span class="text-red-500"><?php echo getError('nameErr');?></span>
            </div>

            <div class="form-control my-4 flex flex-wrap">
                <label for="subject" class="w-24 inline-block">Sujet</label>
                <input type="text" class="px-4 py-2 border flex-grow" name="subject" value="<?php echo getValue('subject');?>" id="subject">    
                <span class="text-red-500"><?php echo getError('subjectErr');?></span>
            </div>

            <div class="form-control flex flex-wrap">
                <label for="message" class="w-24 inline-block">Message</label>
                <textarea type="text" rows="5"class="px-4 py-2 border flex-grow" name="message" id="message"><?php echo getValue('message');?></textarea>
                <span class="text-red-500"><?php echo getError('messageErr');?></span>
            </div>
            <div class="text-center">
                <input type="submit" value="Envoyer" class="px-4 py-2 bg-green-500 rounded mt-4">
            </div>
        </form>
    </main>
    
</body>
</html>