<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Dashboard</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">
      <link rel="stylesheet" href="/style.css">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
      <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <!--Totally optional :) -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   </head>
   
   <body class="bg-purple-300 font-sans leading-normal tracking-normal">
        <div class="flex md:flex-row-reverse flex-wrap">
            
            <!--Main Content-->
            <div class="w-full md:w-4/5 bg-purple-300">
                <div class="container pt-16 px-6">
                    <div class="centered">
                    <h1 class="mb-8 text-2xl text-purple-900 font-bold"><i class="fas fa-book mr-4 text-purple-900"></i>Mes todo list :</h1>
                        <div class="flex flex-wrap">
                        <?php  foreach ($titles as $title) { ?>
                            <div class="px-6 py-4 w-1/2 p-4">
                                <div class="bg-purple-900 rounded overflow-hidden shadow-lg p-4">
                                    <div class="font-bold text-gray-100 text-xl mb-2"><?php echo $title->getTitle();?></div>
                                    
                                    <div class="actions">
                                    <div class="flex flex-wrap">
                                        <!-- <a href="dashboard/<?php echo $title->getTitle(); ?>/show" class="p-2  hover:bg-purple-600 text-white">
                                            <i class="fas text-gray-100 fa-eye"></i>
                                        </a> -->
                                        <a href="dashboard/<?php echo $title->getTitle(); ?>/edit" class="p-2  hover:bg-purple-600 text-white">
                                            <i class="fas text-gray-100 fa-eye"></i>
                                        </a>
                                        <form method="POST" action="dashboard/<?php echo $title->getTitle(); ?>/delete">
                                            <button type="submit" class="p-2  hover:bg-purple-600 text-white">
                                                <i class="fas text-gray-100 fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="px-6 py-4 w-1/2 p-4">
                                <div class="bg-purple-900 rounded overflow-hidden shadow-lg p-4">
                                <a class="p-4 text-center bg-purple-900 text-white" href="/dashboard/nouveau">
                                <i class="fas text-gray-100 fa-plus"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
		 
		 <!--Sidebar-->
         <div class="w-full md:w-1/5 bg-purple-900 md:bg-purple-900 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
            <div class="md:relative mx-auto lg:float-right lg:px-6">
               <ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
                  <li class="mr-3 flex-1">
                     <a href="/" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Home</span>
                     </a>
                  </li>
                  
                  <li class="mr-3 flex-1">
                     <a href="/dashboard" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-600">
                     <i class="fas fa-link pr-0 md:pr-3 text-pink-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">DashBoard</span>
                     </a>
                  </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </body>
</html>