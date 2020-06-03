<?php
session_start();
try
{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=evaluation;charset=utf8','root','root');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM contact');

function escape($donnees){
                            
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
</head>
<body class="text-gray-800 bg-gray-100 h-screen">

    <header class="bg-gray-700">
        <div class="container mx-auto text-center flex justify-between">
            <a href="index.php" class="p-4 text-white">Contact</a>
            <a href="contact.php" class="p-4 text-white">Voir message</a>
        </div>
    </header>

    

    <main class="container mx-auto flex ">
    <?php
           while ($donnees = $reponse->fetch()) {
                   ?>
    
    <div class="md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card card shadow rounded px-4 bg-white">
            <header class="border-b py-4">
                <h3><i class="fas fa-user mr-4"></i><?php echo $donnees["name"] ?></h3>
            </header>
            <div class="content mb-4 break-words">
                <h4 class="py-4">Sujet: <?php echo $donnees["subject"] ?></h4>
                <p>
                <i class="fas fa-envelope mr-4"></i>
                <?php echo substr($donnees ["message"], 0, 20); ?> ...
                </p>
            </div>
            <footer class="flex border-t py-4 justify-between items-center">
                <p><i class="far fa-clock mr-4"></i><?php echo $donnees["date_creation"] ?></p>
                <div class="action text-white flex">
                    <button onclick="document.getElementById('id<?php echo $donnees['id'];?>').style.display='block'" id="see-"  class="see"><i class="fas fa-eye bg-blue-500 p-4 mr-2"></i></button>
                        <div id="id<?php echo $donnees['id'];?>" class="w3-modal">
                            <div class='mididi'>
                                <div class="w3-modal-content">
                                    <div class="w3-container">
                                        <span onclick="document.getElementById('id<?php echo $donnees['id'];?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                        <header class="border-b py-4">
                                            <h3><i class="fas fa-user mr-4"></i>: <?php echo $donnees["name"] ?></h3>
                                        </header>   
                                        <header class="border-b py-4">
                                            <h3 class="break-words">Sujet: <?php echo $donnees["subject"] ?></h3>
                                        </header> 
                                        <header class="border-b py-4">
                                            <h3 class="break-words"><i class="fas fa-envelope mr-4"></i>: <?php echo $donnees["message"] ?></h3>
                                        </header>
                                        <p><i class="far fa-clock mr-4"></i><?php echo $donnees["date_creation"] ?></p>
                                        <form action="traitementcontact.php" class="text-right" method="post">
                                            <input type="hidden" name="delete" value="<?php echo $donnees["id"] ?>">
                                            <button type="submit">
                                                <i class="far fa-trash-alt bg-red-500 p-4"></i>
                                            </button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <form action="traitementcontact.php" method="post">
                        <input type="hidden" name="delete" value="<?php echo $donnees["id"] ?>">
                        <button type="submit">
                            <i class="far fa-trash-alt bg-red-500 p-4"></i>
                        </button>
                    </form>
                </div>
            </footer>
        </div>
    </div>
    
           <?php } ?>
           </main>
    <script>
    
    </script>
    
</body>
</html>