<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">
      <link rel="stylesheet" href="/public/style.css">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
      <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <!--Totally optional :) -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   </head>
   
   <body>
   <div class="text-white mt-0 border border-blue-800 bg-no-repeat bg-cover py-0 w-full h-full" style="background-image:url('https://media.gettyimages.com/vectors/abstract-purple-vector-background-with-stripes-vector-id972475894?b=1&k=6&m=972475894&s=612x612&w=0&h=5Qv7CUaOCiPJSxrqCJPcLPMZhBAjNTNS1JRa43MnMGY=')">
    <header class="flex md:justify-between p-8">
        <div class="flex align-items-center">
            <img class="sm:w-12 w-10 inline mr-3" src="https://to-do-cdn.microsoft.com/static-assets/c87265a87f887380a04cf21925a56539b29364b51ae53e089c3ee2b2180148c6/icons/logo.png"> 
            <h1 class="inline text-white sm:text-3xl text-2xl font-bold"><a href="/">TodoList.IO</a></h1>
        </div>
        <div class="lg:flex md:text-white hidden">
            <ul class="align-items-center pt-2">
                <li class="ml-4 p4"><a href="">Home</a></li>
                <li class="ml-4 p4"><a href="/login">Connexion</a></li>
                <li class="ml-4 p4"><a href="/register">Inscription</a></li>
            </ul>
        </div>
    </header>
    <section class="px-2 lg:px-0 mt-16 sm:mt-32 flex w-full container mx-auto pb-16">
        <div class="w-full text-white flex justify-center md:justify-start text-center md:text-left">
            <div class="md:w-1/2 w-full">
                <h2 class="leading-none font-bold text-2xl xs:text-2x1 md:text-5xl lg:6x1 uppercase">Une app desktop et mobile pour crée des <span class="text-blue-400">Liste de Tache</span></h2>
                <p class="mt-12 mb-12">Cette application permet de faire des Liste de tache avec des tache et pouvoir etre alerter en cas de dead line </p>
                <button href="/register" class="px-16 rounded-full bg-blue-400 text-white font-bold p-4 uppercase border-blue-500 border">Teste maintenant !</button>
            </div>
            <div class="md:w-1/2 md:justify-center md:flex hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/GNOME_Todo_icon_2019.svg/1024px-GNOME_Todo_icon_2019.svg.png" alt="Mobile Phone" />
            </div>
        </div>
    </section>
</div>
   </body>
</html>