<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="bg-blue-500 text-white p-4 text-center">
        <h1>Traitement des erreurs</h1>
    </header>

    <main class="p-8">
        <div class="alert p-4 border-2 rounded mb-4">
            Alerte en cas de reussite ou erreur
        </div>
        <p>Nom: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Password: <?php echo $pass; ?></p>
        <p>Age:</p>

        <hr class="my-8">

        <form action="" method="post">
            <div class="input">
                <label for="name" class="w-32 inline-block">
                    Name: 
                </label>
                <input value="<?php echo $name; ?>" type="text" name="name" id="name" class="p-2 rounded shadow-inner border-2">
                <span class="text-red-500">Erreur: <?php echo $nameErr; ?>
</span>
            </div>

            <div class="input mt-4">
                <label for="email" class="w-32 inline-block">
                    email: 
                </label>
                <input value="<?php echo $email; ?>" type="text" name="email" id="email" class="p-2 rounded shadow-inner border-2">
                <span class="text-red-500">Erreur: <?php echo $emailErr; ?></span>
            </div>

            <div class="input mt-4">
                <label for="password" class="w-32 inline-block">
                    password: 
                </label>
                <input value="<?php echo $pass; ?>" type="password" name="password" id="password" class="p-2 rounded shadow-inner border-2">
                <span class="text-red-500">Erreur: <?php echo $passErr; ?></span>
            </div>
            

            <div class="input mt-4">
                <label for="age" class="w-32 inline-block">
                    Age: 
                </label>
                <input value="" type="text" name="age" id="age" class="p-2 rounded shadow-inner border-2">                
                <span class="text-red-500">Erreur</span>
            </div>
            

            <input type="submit" value="Envoyer" class="py-2 px-4 rounded">

        </form>
    </main>
</body>
</html>