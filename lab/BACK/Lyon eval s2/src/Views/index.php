<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Me.io</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link href=https://stitches.hyperyolo.com/output.css rel="stylesheet">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="paralax">
  <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_man.png" data-weight="10" data-direction="bottom" class="man"/> -->
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_03.png" data-weight="10" data-direction="bottom" class="bg1"/>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_02.png" data-weight="20" data-direction="bottom" class="bg2"/>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_01.png" data-weight="100" data-direction="bottom" class="bg3"/>
  <?php  foreach ($textcontenus as $textcontenu) { ?>
  <a href="https://www.linkedin.com/in/tom-litaudon-22a0141a2" class="gitlink"
  data-weight="-20" target="_blank"><?php echo $textcontenu->getPrenom();?>
  
  <?php echo $textcontenu->getJob();?>
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
  <div class="flex-1 text-gray-700 text-center px-4 py-2 m-2"></div>
  <div class="flex-1 text-gray-700 text-center px-4 py-2 m-2"><img class="profileimage h-48 lg:ml-24" src="<?php echo $textmoi->getMoiimg();?>" alt=""></div>
  <div class="flex-1 text-gray-700 text-center px-4 py-2 m-2"></div>
</div>
				<p class="break-words text-gray-600 mb-8 ml-36 mt-40 text-center"><?php echo $textmoi->getContenue();?>
				</p>
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
            <div class="w-24 h-24 rounded-full bg-gray-300" alt=""> <img src="<?php echo $textcompetence->getCompetenceimg();?>" alt=""></div>
            <h3 class="mt-4 mb-1 text-gray-100"><?php echo $textcompetence->getCompetence();?></h3>
            <p class="mt-4 text-center text-gray-100 leading-normal px-6 hidden hover:block"><?php echo $textcompetence->getCompetencedesc();?></p>
          </div>
		  <?php } ?>
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
      <h2><?php echo $textprojet->getProjettitre();?></h2>
      <p><?php echo $textprojet->getDescription();?></p>
      <a href="<?php echo $textprojet->getUrl()?>" target="_blank">
      <span>Site du projet</span>
        <span class="text-xs ml-1">&#x279c;</span>
        </a>
    </div>
  </li>
  <?php } ?>
</ul>
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
<footer class="font-sans bg-black text-white py-8 px-4">
  <div class="mx-auto max-w-xl overflow-hidden flex justify-between items-center">
    <ul class="text-sm text-gray-700 list-none p-0 flex items-center">
      <!-- <li> <a href="/" class="block mr-4 w-32">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Apple_logo_grey.svg/1200px-Apple_logo_grey.svg.png" class="" alt="logo">
        </a></li> -->
      <li><a href="/login" class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Connexion</a></li>
      <li><a href="/register" class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Inscription</a></li>
    </ul>
  </div>
</footer>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://rawgit.com/DSlike/UI/master/JQuery%20plugins/JSoftParallax.js'></script>
<script  src="script.js"></script>

</body>
</html>

<?php 
unset($_SESSION["errors"]);
unset($_SESSION["old"]);