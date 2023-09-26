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
            <h1 class="text-center">TIR AU PISTOLET <img class="discilogo" src="Images/disci-pistolet.svg"></h1><br>
            <img class="img-fluid float-left rounded mr-3" src="Images/pistolet.jpg" alt="">
            <p class="text-justify">Vous êtes attiré par les armes courtes, par leur maniabilité ainsi que par leur capacité de tir à répétition. Le dépassement de soi du haut niveau et des compétitions vous laissent rêveur. Les épreuves de tir au pistolet, mondiales et même olympiques, sont à votre portée! Les disciplines « Pistolet » proposent des distances de tir à 10 mètres (air comprimé et plomb de 4,5 millimètres), 25 mètres et 50 mètres (22 Long Rifle et gros calibre).</p>
            <p class="text-justify">Toutes les épreuves se tirent en position debout, à bras franc. La pratique proposée aux tireurs comporte le tir de précision, le tir de vitesse et les épreuves mixtes qui regroupent la précision et la vitesse. Cette discipline offre ainsi une grande diversité.</p>
            <p class="text-justify">Le «Pistolet» comporte cinq épreuves olympiques: 10 mètres Dame, 10 mètres Senior et 10 mètres par équipe mixte, 25 mètres Dame et Vitesse olympique à 25 mètres Senior. Des épreuves paralympiques sont également disputées dans cette discipline : le 10 mètres Senior, le 10 mètres Dame, le Standard (mixte) et le pistolet 25 mètres et à 50 mètres (mixte).</p>
            <hr>
         </div>
      </div>
      <div class="row">
         <div class="col-md">
            <h3>10 mètres</h3>
            <ul>
               <li>Arme: pistolet à air comprimé</li>
               <li>Programme: 60 plombs en 1 h 30 min</li>
               <li>Programme pour les dames 3: 40 plombs en 50 min</li>
               <li>Calibre : 4,5 mm</li>
            </ul>
         </div>
         <div class="col-md">
            <h3>10 mètres, Standard</h3>
            <ul>
               <li>Arme: pistolet à air comprimé ou CO2 avec chargeur de 5 coups</li>
               <li>Cible: Les mêmes que pour le pistolet 10M, on tire 5 plomb par cible dans un temps limité de 10 secondes</li>
               <li>Programme: 40 plombs en 8 série de 10 secondes</li>
            </ul>
         </div>
         <div class="col-md">
            <h3>10 mètres, Vitesse</h3>
            <ul>
               <li>Arme: pistolet à air comprimé ou CO2 avec chargeur de 5 coups</li>
               <li>Cible: On tire 1 coup sur chacune des 5 cibles basculantes de diamètre 30 mm</li>
               <li>Programme: 40 plombs en 8 séries de 10 secondes</li>
            </ul>
         </div>
      </div>
      <div class="row">
         <div class="col-md">
         <h3>25 mètres, Vitesse</h3>
            <ul>
               <li>Arme: pistolet semi-automatique de calibre .22 Long Rifle</li>
               <li>Cible: 5 cibles pivotantes</li>
               <li>Programme:<br>2 séries de 5 coups en 8 secondes<br>2 séries de 5 coups en 6 secondes<br>2 séries de 5 coups en 4 secondes.<br>Un programme complet répète 2 fois cette séquence pour un total de 60 coups (600 points possibles pour un match complet). </li>
            </ul>
         </div>
         <div class="col-md">
            <h3>25 mètres, Sport</h3>
            <ul>
               <li>Arme : revolver ou pistolet .22 long rifle, .32 ou .38</li>
               <li>Programme: 6 séries « précision » de 5 balles en 5 minutes, 6 séries « vitesse » de 5 balles (Cible 3s ON puis 7s OFF entre chaque coup)</li>
            </ul>
         </div>
         <div class="col-md">
            <h3>25 mètres, Standard</h3>
            <ul>
               <li>Arme: pistolet semi-automatique de calibre .22 Long Rifle</li>
               <li>Programme:<br>4 séries, 5 coups en 150 secondes<br>4 séries, 5 coups en 20 secondes<br>4 séries, 5 coups en 10 secondes.</li>
            </ul>
         </div>
      </div>
      <div class="row">
         <div class="col-md">
            <h3>50 mètres, Libre</h3>
            <ul>
               <li>Arme: pistolet libre, calibre .22 Long Rifle</li>
               <li>Programme : 60 balles en 2 heures, sur cible C50.</li>
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