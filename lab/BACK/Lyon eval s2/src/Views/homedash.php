<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link href=https://stitches.hyperyolo.com/output.css rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"><!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-900 font-sans leading-normal tracking-normal ">
    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-900 shadow-lg h-16 fixed bottom-0 md:relative md:h-screen z-10 w-full md:w-48">
            <div class="md:fixed">
            <div class=" md:w-48 md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-innocent-500">
                            <i class="fas fa-envelope pr-0 md:pr-3 text-gray-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Home</span>
                        </a>
                    </li>
                   
                    
                </ul>
            </div>
        </div>


        </div>
        <!-- LES CANDIDATURE -->
        <div class="main-content flex-1 bg-gray-100 pb-24 md:pb-5">
            
            <div class="bg-gray-900 p-2 shadow text-xl text-white">
                <h3 class="font-bold pl-2">Home</h3>
            </div>
            


            <div class="flex flex-row flex-wrap flex-grow mt-2">
                <!-- FOR EACH A METTRE ICI POUR REPETER LES BOX -->
                <div class="w-full md:w-full xl:w-full p-3">
                    <!--Template Card-->
                    <!-- <div class="bg-white border-transparent rounded-lg shadow-lg">
                        <div class="bg-gray-400 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Creation de candidature</h5>
                        </div>
                        <div class="p-5">
                            <h1>Nom:</h1>
                            <h1>Prenom:</h1>
                            <h1>Liens Gdocs:</h1>
                            <h1>Activiter:</h1>
                        </div>
                        <div class="flex justify-end flex-wrap p-4">
                            <div>
                            <a href="" class="p-2 bg-blue-900 rounded hover:bg-gray-600 text-white">
                                <i class="fas text-gray-100 fa-file-archive"></i>
                            </a>
                        </div>
                            <div class="ml-5">
                            <a href="" class="p-2 bg-blue-900 rounded hover:bg-gray-600 text-white">
                                <i class="fas text-gray-100 fa-eye"></i>
                            </a>
                        </div>
                        </div>
                        
                    </div> -->
                    <div class="container mx-auto p-8">
                        <div class="title text-center p-8 text-3xl md:text-5xl ">
                            Dash board tomLitaudon.io <br />
                             </div>
                        
                      </div>
                    <!--/Template Card-->
                </div>
            </div>
        </div>
    </div>

    </div>






    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>


</body>

</html>