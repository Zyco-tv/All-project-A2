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
        <form action="traitement.php" method="post" class="w-1/2 mx-auto bg-white rounded p-4">
            <div class="username mb-4">
                <label for="username" class="w-24 inline-block">Username</label>
                <input type="text" id="username" name="usernameR" value="<?php echo getValue('usernameR');?>" class="rounded py-2 px-4 border">
                <span class="text-red-500"><?php echo getError('usernameErr'); ?></span>
            </div>

            <div class="password mb-4">
                <label for="password" class="w-24 inline-block">Password</label>
                <input type="password" id="password" name="passwordR" value="<?php echo getValue('passwordR');?>" class="rounded py-2 px-4 border">
                <span class="text-red-500"><?php echo getError('passwordErr'); ?></span>
            </div>

            <div class="password mb-4">
                <label for="confirm" class="w-24 inline-block">Confirm Password</label>
                <input type="password" id="confirm" name="confirmR" value="<?php echo getValue('confirmR');?>" class="rounded py-2 px-4 border">
                <span class="text-red-500"><?php echo getError('confirmErr'); ?></span>
            </div>
            <input type="submit" value="S'inscrire" class="px-4 py-2 rounded bg-gray-500 mx-auto">
        </form>
    </main>
</body>
</html>