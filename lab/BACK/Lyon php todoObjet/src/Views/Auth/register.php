<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tailwind Starter Template - Responsive Header : Tailwind Toolbox</title>
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
            <div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://static-s.aa-cdn.net/img/gp/20600000012812/dHlZgPvCEM_i-MeMXeoCwaTCSMzc6zUM4wVgiyjMZf2gh27tH35k2rCGnb7feeRwwCw=w300')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Création de compte!</h3>
						<form method="post" action="/register" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
							
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="pseudo">
									Pseudo
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="text"
									name="username"
									placeholder="Pseudo"
									value=""
								/>
								<span class="text-xs italic text-red-500"><?php echo isset($_SESSION["errors"]["username"]) ? $_SESSION["errors"]["username"] : "";?></span>
							</div>
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password"
										type="password"
										name="password"
										placeholder="***"
									/>
									<span class="text-xs italic text-red-500"><?php echo isset($_SESSION["errors"]["password"]) ? $_SESSION["errors"]["password"] : "";?></span>
									<!-- <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										Confirm Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password"
										type="password"
										name="password"
										placeholder="***"
									/> -->
									<span class="text-xs italic text-red-500"></span>
								</div>
								
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="submit"
								>
									Création de compte
								</button>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="/login"
								>
									Déja un compte ? Login!
								</a>
							</div>
						</form>
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
                     <a href="/login" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">login</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="/register" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-600">
                     <i class="fas fa-link pr-0 md:pr-3 text-pink-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">Register</span>
                     </a>
                  </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </body>
</html>

<?php unset($_SESSION["errors"]);