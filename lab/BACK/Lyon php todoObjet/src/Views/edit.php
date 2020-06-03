<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Edite</title>
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
            <div class="container bg-purple-300 pt-16 px-6">
            <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24">
    <form action="" method="post">
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="-mx-3 md:flex mb-6">
        </div>
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-full px-3" id="task-container">
          <div class="flex flex-wrap">
          <h1 class="mb-8 text-2xl text-purple-900 font-bold"><i class="fas fa-book mr-4 text-purple-900"></i>List :  </h1>
          </div>  
          <h1 class="mb-8 text-2xl text-purple-900 font-bold"><i class="fas fa-thumbtack mr-4 text-purple-900"></i>Titre de la TodoList :  </h1>
            <input id="innerhtml" class="w-full bg-purple-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" placeholder="Titre" value="<?php echo $todo->getTitle();?>" name="title">
            <span class="text-xs italic text-red-500"><?php echo isset($_SESSION["errors"]["title"]) ? $_SESSION["errors"]["title"] : "";?></span>
            <h1 class="mb-8 text-2xl text-purple-900 font-bold"><i class="fas fa-tasks mr-4 text-purple-900"></i>Liste de tache :  </h1>
            <?php  foreach ($tasks as $task) { ?>  
               <div class="flex flex-wrap items-start">
               <input id="innerhtml" class="w-2/4 h-12 bg-purple-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" placeholder="Titre" value="<?php echo $task->getTitle();?>" name="task-<?php echo $task->getId();?>">
                <div class="relative ml-5">
                  <input type="submit" class="rounded-lg p-4 h-12 w-12 bg-purple-600 text-white" formaction="/dashboard/task/<?php echo $task->getId();?>/delete" value="">
                  <div class="absolute icon">
                     <i class="fas text-gray-100 fa-trash aboslute z-10 block"></i>
                  </div>
                </div>
                
            </input>
         </div>
               <?php } ?>
          </div>
        </div>
        <div class="-mx-3 md:flex mt-2">
          <div class="md:w-full px-3">
          <button onclick="creatediv(event)" class="md:w-50 bg-purple-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
              +
            </button>
            
            <button class="md:w-50 bg-purple-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full" type="submit">
              Valider
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
            </div>
         </div>
		 
		 <!--Sidebar-->
         <div class="w-full md:w-1/5 bg-purple-900 md:bg-purple-900 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
            <div class="md:relative mx-auto lg:float-right lg:px-6">
               <ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
                  <li class="mr-3 flex-1">
                     <a href="/" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">home</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="/dashboard" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">dashBoard</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-600">
                     <i class="fas fa-link pr-0 md:pr-3 text-pink-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">TodoList</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <script>
        let compteur = 2
        function creatediv(event) {
            event.preventDefault()
            var div = document.createElement('div');
            div.innerHTML = '<input id="innerhtml" class="w-2/4 h-12 bg-purple-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" placeholder="ajoute une tache ici" name="task-' + compteur + '">';
            document.getElementById('task-container').appendChild(div);
            compteur++
        }
        </script>
   </body>
</html>

<?php unset($_SESSION["errors"]);