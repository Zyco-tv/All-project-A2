<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link href=https://stitches.hyperyolo.com/output.css rel="stylesheet">
    <title>Se connecter</title>
</head>
<body>

        <div id="vantajs" style="background-size: cover">
    <div class="h-screen w-screen">
            <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
                    <div class="rounded opak flex flex-col w-full md:w-1/2 p-4">
                        <div class="flex flex-col flex-1 justify-center mb-8">
                            <h1 class="text-4xl text-center font-thin text-purple-700 hover:text-purple-500">Se connecter</h1>
                            <div class="w-full mt-4">
                                <form class="form-horizontal w-3/4 mx-auto" method="POST" action="/login">
                                    <div class="flex flex-col mt-4">
                                        <label class="text-purple-700 hover:text-purple-500">Pseudo</label>

                                        <input id="email" type="text" value="<?php echo isset($_SESSION["old"]["pseudo"]) ? $_SESSION["old"]["pseudo"] : "";?>" class="flex-grow h-8 px-2 border rounded border-grey-400" name="pseudo">

                                        <span class="text-red-500"><?php echo isset($_SESSION["errors"]["pseudo"]) ? $_SESSION["errors"]["pseudo"] : "";?></span>
                                    </div>
                                    <div class="flex flex-col mt-4">
                                        <label class="text-purple-700 hover:text-purple-500">Mot de passe</label>

                                        <input id="password" type="password" value="<?php echo isset($_SESSION["old"]["password"]) ? $_SESSION["old"]["password"] : "";?>" class="flex-grow h-8 px-2 rounded border border-grey-400" name="password">

                                        <span class="text-red-500"><?php echo isset($_SESSION["errors"]["password"]) ? $_SESSION["errors"]["password"] : "";?></span>
                                    </div>
                                    <div class="flex flex-col mt-8">
                                        <button type="submit" class="bg-purple-700 hover:bg-purple-600 text-sm text-white font-semibold py-2 px-4 rounded">
                                            Se connecter
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4">
                                    <a class="no-underline hover:underline text-blue-dark text-xs" href="{{ route('password.request') }}">
                                        <!-- Mot de passe oublier? -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
        </div>
</body>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js'></script>
<script src='https://www.vantajs.com/dist/vanta.birds.min.js'></script>
<script src='https://yandex.st/highlightjs/8.0/highlight.min.js'></script><script  src="./script.js"></script> -->
</html>

<?php
unset($_SESSION["errors"]);
unset($_SESSION["old"]);

