<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login-Page</title>
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
   
   <body class="bg-purple-300 font-sans leading-normal tracking-normal">
      <div class="flex md:flex-row-reverse flex-wrap">
		
		 <!--Main Content-->
         <div class="w-full md:w-4/5 bg-purple-300">
            <div class="container bg-purple-300 pt-16 px-6">
            <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">Login</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="/login">
                            <div class="flex flex-col mt-4">
                                <input id="email" type="text" class="flex-grow h-8 px-2 border rounded border-grey-400" name="username" value="" placeholder="Pseudo">
                                <span class="text-xs italic text-red-500"><?php echo isset($_SESSION["errors"]["username"]) ? $_SESSION["errors"]["username"] : "";?></span>

                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="password" required placeholder="Password">
                                <span class="text-xs italic text-red-500"><?php echo isset($_SESSION["errors"]["password"]) ? $_SESSION["errors"]["password"] : "";?></span>

                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember" class="text-sm text-grey-dark">se rapeller de moi</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <a class="no-underline hover:underline text-blue-dark text-xs" href="{{ route('password.request') }}">
                                Mot de passe oublier ?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('https://static-s.aa-cdn.net/img/gp/20600000012812/dHlZgPvCEM_i-MeMXeoCwaTCSMzc6zUM4wVgiyjMZf2gh27tH35k2rCGnb7feeRwwCw=w300'); background-size: cover; background-position: center center;"></div>
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
                     <a href="/login" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-600">
                     <i class="fas fa-link pr-0 md:pr-3 text-pink-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">Login</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="/register" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Register</span>
                     </a>
                  </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </body>
</html>

<?php unset($_SESSION['errors']);