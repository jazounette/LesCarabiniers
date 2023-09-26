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
            <h1 class="text-center">TIR À LA CARABINE <img class="discilogo" src="Images/disci-carabine.svg"></h1><br>
            <img class="img-fluid float-left rounded mr-3" src="Images/carabine.jpg" alt="un tireur à un poste de tir couché avec tout son équipement">
            <p class="text-justify">Vous êtes attiré par les armes longues et leur précision. La compétition, ainsi que le haut niveau vous font rêver! Les épreuves olympiques et mondiales de tir à la carabine sont à votre portée. Le tir à la carabine se pratique à 10mètres (air comprimé et plomb de 4,5millimètres), à 50 mètres (22 Long Rifle) et à 300mètres.</p>
            <p class="text-justify">Les compétitions à 10mètres se tirent uniquement en position «Debout» tandis qu’à 50 et 300mètres, les épreuves imposent, selon les cas, la position « Couché » ou bien l’ensemble des trois positions réglementaires: «Genou», «Couché», «Debout».</p>
            <p class="text-justify">La discipline «Carabine» comporte cinq épreuves olympiques: 10mètres Senior, 10mètres Dame, 10 mètres par équipe mixte, 50 mètres Trois positions Senior et Dame.</p>
            <hr>
            <h3>10 mètres</h3>
            <p class="text-justify">Le tir à 10 mètres est pratiqué en position debout et parfois à genoux. Fréquemment imposé par les clubs de tir comme une initiation avant une orientation vers les autres disciplines, le tir à 10 mètres permet l'apprentissage des organes d'une arme (organes de visée, queue de détente, culasse), de la balistique (trajectoire d'un projectile) et des notions de sécurité (zone de tir, principes de contrôle des armes). Ceci est également valable pour le pistolet à 10 mètres. </p>
         </div>
      </div>
      <div class="row">
         <div class="col-md">
            <h3>50 mètres, 3 x 40</h3>
            <ul>
               <li>Arme : carabine libre de petit calibre à percussion annulaire (.22 Long Rifle)</li>
               <li>Programme : Match comportant 3 positions de tir se déroulant en 3h15 (ou 2h45 sur cibles électronique). 40 coups en position «genou», «couché», «debout».</li>
               <li>10 central : 10,4 mm</li>
            </ul>         
         </div>
         <div class="col-md">
            <h3>50 mètres, 3 x 20</h3>
            <ul>
               <li>Arme : carabine libre de petit calibre (.22 Long Rifle)</li>
               <li>Programme: 20 coups en position «genou», «couché», «debout».</li>
               <li>Le tout en 2 h 15.</li>
               <li>10 central : 10,4 mm</li>
            </ul>         
         </div>
         <div class="col-md">
            <h3>50 mètres, 60 balles couché</h3>
            <ul>
               <li>Arme : carabine libre de petit calibre (.22 long rifle)</li>
               <li>Programme : 15 min de préparation et essais puis 60 coups en position « couché » en 1 h 15 min (ou 50 min sur cible électronique)</li>
               <li>10 central : 10,4 mm</li>
            </ul>
         </div>
      </div>
      <div class="row">
         <div class="col-md">
            <h3>300 mètres, 60 coups couché</h3>
            <ul>
               <li>Arme : carabine libre à percussion centrale jusqu'à 8 mm</li>
               <li>Programme : 60 coups en 1h30</li>
               <li>10 central : 100 mm</li>
            </ul>
         </div>
         <div class="col-md">
         <h3>300 mètres, 3 x 40</h3>
            <ul>
               <li>Arme : carabine libre à percussion centrale jusqu'à 8 mm</li>
               <li>40 coups en position « couché » en 1h15</li>
               <li>40 coups en position « debout » en 1h45</li>
               <li>40 coups en position « genou » en 1h30</li>
               <li>10 central : 100 mm</li>
            </ul>
         </div>
         <div class="col-md">
         <h3>300 mètres, 3 x 20</h3>
            <ul>
               <li>Arme : carabine standard à percussion centrale jusqu'à 8 mm</li>
               <li>20 coups en position «genou», «couché», «debout» en 2h30.</li>
               <li>10 central : 100 mm</li>
            </ul>
         </div>
      </div>
   </div>

   <?php include_once "../piedpage.html"; ?>

   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>