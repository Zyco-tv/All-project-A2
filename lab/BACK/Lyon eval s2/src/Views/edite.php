<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Me.io</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link href=https://stitches.hyperyolo.com/output.css rel="stylesheet">
  <script src="https://kit.fontawesome.com/8d60ba43fe.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
	}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="paralax">
  <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_man.png" data-weight="10" data-direction="bottom" class="man"/> -->
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_03.png" data-weight="10" data-direction="bottom" class="bg1"/>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_02.png" data-weight="20" data-direction="bottom" class="bg2"/>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_01.png" data-weight="100" data-direction="bottom" class="bg3"/>
  <?php  foreach ($textcontenus as $textcontenu) { ?>
  <a class="gitlink"
  data-weight="-20" target="_blank">
  <form action="/edite/header" method="post">
  <input class="inputedite" type="text" value="<?php echo $textcontenu->getPrenom();?>" name="prenom">
  <input class="inputedite" type="text" value="<?php echo $textcontenu->getJob();?>" name="job">
  <button type="submit"><i class="fas fa-check text-green-600"></i>
</button>
  </form>
  </a>
  <?php } ?>
</div>

<section class="">
	<div class="container max-w-5xl mx-auto m-8">
		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-100">Moi</h1>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>
	  <div class="flex justify-center">
        <?php  foreach ($textmois as $textmoi) { ?>
		<div class="">
		<!-- <div class="items-center">
				<img class="text-3xl text-gray-100 font-bold leading-none mb-3 profileimage h-48" src="https://image.noelshack.com/fichiers/2020/11/2/1583832038-6bb68b3e-0bbd-4248-aab1-e342bbb09869.jpg"></img>
				</div> -->
					<div class="flex items-stretch  h-24">
          <form action="/edite/moi" method="post">
						<div class="flex-1 text-gray-700 text-center px-4 py-2 m-2"></div>
						<div class="flex-1 text-gray-700 text-center px-4 py-2 m-2">
            <h2>Photo de profile</h2>
            <input class="" value="<?php echo $textmoi->getMoiimg();?>" alt="" name="img">
            </div>
						<div class="flex-1 text-gray-700 text-center px-4 py-2 m-2"></div>
					</div>
				<textarea cols="63" rows="6" class="break-words text-gray-600 mb-8 ml-36 mt-40 text-center inputedite" name="contenue"><?php echo $textmoi->getContenue();?></textarea>
				<button type="submit"><i class="fas fa-check text-green-600"></i>
				</form>
				</div>
				<?php } ?>
	</div>
</section>

<section class="">
	
	<div class="container mx-auto flex flex-wrap pt-4 pb-12">
    
		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-100">Compétence</h1>
		<div class="w-full mb-4">	
		<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
  </div>
		</div>
		</section>		
<section class="my-8 font-sans container m-auto max-w-xl ">
        <div class="flex flex-col sm:flex-row flex-wrap my-8">
		<?php  foreach ($textcompetences as $textcompetence) { ?>
		  <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col items-center justify-center h-48 md:h-64  hover:shadow-md hover:border-0 hover:transform-scale-subtle transition-normal hover:show-child">
		  <form action="/edite/competence/<?php echo $textcompetence->getId();?>" method="post">
		  <p class="text-gray-100">Liens IMG:</p>
			<input class="inputedite text-center text-gray-100" value="<?php echo $textcompetence->getCompetenceimg();?>" name="img">
			<p class="text-gray-100">Titre:</p>
			<input class="mt-4 text-center mb-1 text-gray-100 inputedite" value="<?php echo $textcompetence->getCompetence();?>" name="titre">
			<p class="text-gray-100">description:</p>
			<input class="mt-4 text-center text-gray-100 leading-normal px-6 block inputedite" value="<?php echo $textcompetence->getCompetencedesc();?>" name="description">
			<button type="submit"><i class="fas fa-check text-green-600"></i></button>
			</form>
      <form action="/edite/competence/delete/<?php echo $textcompetence->getId();?>" method="post">
    <button type="submit"><i class="fas fa-trash text-red-600"></i></button>
    </form>
          </div>
		  <?php } ?>
		  <div class="flex items-stretch  h-24">
  <div class="text-center px-4 py-2 m-2"></div>
  <div class="text-center py-2 m-2"><button onclick="document.getElementById('id01').style.display='block'" class="bg-transparent border border-gray-500 text-gray-500 font-bold py-2 px-4 rounded-full">+</button></div>
  <div class="text-center px-4 py-2 m-2"></div>
</div>
		  

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
		<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		<div class="modal-content py-4 text-left px-6">
		<div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Ajoute une competence !</p>
        </div>
        <form action="/edite/ajoute/competence" method="post">
		   <!-- <div class="flex">
		   <p>titre:</p>
			<input class="border border-gray-400 focus:border-blue-500 rounded" name="titre">
			</div>
			<p>description:</p>
			<input class="border border-gray-400 focus:border-blue-500 rounded" name="contenue">
			<p>liens projet:</p>
			<input class="border border-gray-400 focus:border-blue-500 rounded" name="url">
			<button type="submit"><i class="fas fa-check text-green-600"></i></button> -->
			<div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-first-name">
          Titre
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="titre" >
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["titre"]) ? $_SESSION["errors"]["titre"] : "";?></span>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-last-name">
          URL de l'image
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="img" >
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["url"]) ? $_SESSION["errors"]["url"] : "";?></span>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-password">
          Description
        </label>
        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" name="description"></textarea>
        <span class="text-red-500"><?php echo isset($_SESSION["errors"]["contenue"]) ? $_SESSION["errors"]["contenue"] : "";?></span>
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
		<i class="fas fa-check text-green-600"></i>
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
		</form>
      </div>
    </div>
  </div>
		</div>
        </div>
      </section>
<section class="container mx-auto text-center py-6 mb-12">

	<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Mes projets</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
  </div>
  <div class="ml-16">
<ul>
  <?php  foreach ($textprojets as $textprojet) { ?>
  <li>
	<div>
		<form action="/edite/projet/<?php echo $textprojet->getId();?>" method="post">
			<input class="inputedite" value="<?php echo $textprojet->getProjettitre();?>" name="titre">
			<input class="inputedite" value="<?php echo $textprojet->getDescription();?> "name="contenue">
			<input class="inputedite" value="<?php echo $textprojet->getUrl()?>" name="url">
			<button type="submit"><i class="fas fa-check text-green-600"></i></button>
		</form>
    <form action="/edite/projet/delete/<?php echo $textprojet->getId();?>"method="post">
    <button type="submit"><i class="fas fa-trash text-red-600"></i></button>
    </form>
	</div>
  </li>
  <?php } ?>
</ul>

		
		<button class="modal-open bg-transparent border border-gray-500 text-gray-500 font-bold py-2 px-4 rounded-full">+</button>
  
  <!--Modal-->
  <!-- MODAL PROJET -->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Ajoute un projet!</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
       <form action="/edite/ajoute/projet" method="post">
		   <!-- <div class="flex">
		   <p>titre:</p>
			<input class="border border-gray-400 focus:border-blue-500 rounded" name="titre">
			</div>
			<p>description:</p>
			<input class="border border-gray-400 focus:border-blue-500 rounded" name="contenue">
			<p>liens projet:</p>
			<input class="border border-gray-400 focus:border-blue-500 rounded" name="url">
			<button type="submit"><i class="fas fa-check text-green-600"></i></button> -->
			<div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-first-name">
          Titre
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="titre" >
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["titre"]) ? $_SESSION["errors"]["titre"] : "";?></span>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-last-name">
          URL de l'image
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="url" >
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["url"]) ? $_SESSION["errors"]["url"] : "";?></span>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-password">
          Description
        </label>
        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" name="contenue"></textarea>
        <span class="text-red-500"><?php echo isset($_SESSION["errors"]["contenue"]) ? $_SESSION["errors"]["contenue"] : "";?></span>
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
		<i class="fas fa-check text-green-600"></i>
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
		</form>

        <!--Footer-->
        <!-- <div class="flex justify-end pt-2">
          <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Ferme</button>
        </div> -->
        
      </div>
    </div>
  </div>
<!-- MODAL COMPETENCE -->
  
</div>
</section>
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
			<g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
				<g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
					<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
					<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
					<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
				</g>
			</g>
		</g>
	</g>
</svg>

<section class="container mx-auto text-center py-6 mb-12">

	<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Contacte Moi</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
	</div>

	<h3 class="my-4 text-3xl leading-tight text-white">Tu peut me contacte avec ce formulaire si dessus!</h3>	

  <form  action="/dashboard/candidature" method="post">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-first-name">
          Nom
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" placeholder="Jane">
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["name"]) ? $_SESSION["errors"]["name"] : "";?></span>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-last-name">
          Email
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="mail" placeholder="exemple@gmail.com">
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["mail"]) ? $_SESSION["errors"]["mail"] : "";?></span>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-password">
          Message
        </label>
        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" name="message"></textarea>
        <span class="text-red-500"><?php echo isset($_SESSION["errors"]["message"]) ? $_SESSION["errors"]["message"] : "";?></span>
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
          ENVOYER
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
  </form>
		
</section>
<!-- partial -->
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://rawgit.com/DSlike/UI/master/JQuery%20plugins/JSoftParallax.js'></script>
<script  src="script.js"></script>

</body>
</html>

<?php 
unset($_SESSION["errors"]);
unset($_SESSION["old"]);