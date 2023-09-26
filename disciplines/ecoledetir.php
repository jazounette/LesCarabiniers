<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once "../chemin.html"; ?>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Les Carabiniers</title>
   
   <link rel="stylesheet" href="bootstrap-4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <?php include_once "../menu.php"; ?>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <br>
            <h1 class="text-center">ÉCOLE DE TIR <img class="discilogo" src="Images/disci-ecolestir.svg"></h1><br>
            <img class="img-fluid float-left rounded mr-3" src="Images/ecoletir.jpg" alt="une jeune tireuse à la carabine">
            <p class="text-justify">L'école de tir est encadré par 3 éducateurs dont 2 diplômés par un brevet d'initiateur de club, de bénévoles compétiteurs confirmés, et d'un animateur de club. Les entrainements se font au stand 10 mètres, chemin de neuville :</p>
            <p class="text-center"><strong>le Mercredi de 14h à 16h et 16h15h à 18h15.</strong></p>
            <p class="text-center"><strong>L'école de tir est ouverte aux enfants à partir de 8 ans.</strong></p>   
            <p class="text-justify">Notre école de tir est inscrite au dispositif d'apprentissage "Cibles Couleurs" mis en place par la Fédération Française de Tir. Ce dispositif organise un apprentissage du tir simple, en sécurité et tout en couleurs. Il permet d'identifier 4 étapes fondamentales du tir : la détection, la formation, le perfectionnement et l'atteinte de l'excellence. Il est donc destiné aux tireurs débutants comme confirmés.</p>
            <hr>
            <div class="d-none d-xl-block"><br><br></div>
            <h3>Objectifs</h3>
            L'apprentissage "cibles couleurs" est composé de 7 niveaux, de la cible blanche à la cible arc-en-ciel. ces 7 cibles proposent :
            <ul>
               <li>De pratiquer en toute sécurité un sport, encadré par des formateurs formés et diplômés.</li>
               <li>De progresser au cours d'étapes représentant des niveaux de pratique différents.</li>
               <li>D'identifier les valeurs et les qualités développées par le tir sportif.</li>
            </ul>
            Chaque cible comprend 3 objectifs orientés vers :
            <ul>
               <li>Les règles et les comportements à acquérir.</li>
               <li>Les savoir-faire.</li>
               <li>La capacité de réussite.</li>
            </ul>
            <p class="text-justify">De façon à s'assurer la bonne intégration des différentes compétences, la FFTIR a mis en place des restrictions en fonction de l'âge et du temps de pratique. La FFTIR garantissons la qualité du dispositif par un système de labellisation des formateurs. Les tireurs valident leurs niveaux avec un formateur labellisé et ayant le diplôme requis pour le passage de grade visé.</p>   
            <hr>
            <h3>Philosophie</h3>
            <p class="text-justify">La FFTIR est soucieuse de transmettre l'éthique du tir sportif à ces tireurs. Aussi chaque cible est associée à une valeur et une qualité que le formateur s'attachera à transmettre dans ses séances et que le tireur s'appropriera.</p>
         </div>
      </div>
   </div>
   <?php include_once "../piedpage.html"; ?>

   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>