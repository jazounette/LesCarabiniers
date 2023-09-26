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
            <h1 class="text-center">TIR AUX ARMES ANCIENNES <img class="discilogo" src="Images/disci-armes-anciennes.svg"></h1><br>
            <img class="img-fluid float-left rounded mr-3" src="Images/ArmeAncienne.jpg" alt="">
            <p class="text-justify">C’est la discipline des collectionneurs ou des compétiteurs entretenant avec passion des armes anciennes d’origine (avant 1900) ou des répliques fonctionnant avec différents systèmes de mise à feu (mèche, silex, percussion)</p>
            <p class="text-justify">Toutes les époques sont ainsi représentées: Arquebuses à mèche, européennes et japonaises; parfois des armes à rouet; pistolets, fusils et carabines à pierre; armes de toutes sortes à piston, dont les revolvers à percussion. Puis viennent tous les systèmes de chargement par la culasse, cartouches combustibles des Chassepot et Dreyse et, enfin, les cartouches métalliques (Trapdoor, Sharps, Rolling-Block, Gras, etc…) dont la balle sera toujours en plomb nu.</p>
            <p class="text-justify">Les disciplines officielles proposent des épreuves où sont utilisées des armes d’origine ou des répliques représentant les divers systèmes de mise à feu (Mèche, silex, percussion). Ces armes de poing ou d’épaule utilisent uniquement de la poudre noire. Les 10 meilleurs impacts sont retenus sur les 13 coups tirés pour le score. Les tenues vestimentaires sont libres (exception faite pour les clarks). Les noms des épreuves évoquent soit des noms de personnes qui ont inventé ou fabriqué des armes, soit des sites significatifs de l’histoire des armes. (Ex: Nagashino, site d’une bataille où la première fois les mousquets à mèche furent utilisés par les Japonais).</p>
            <hr>
            <h3>Disciplines FFT Armes de poing</h3>
            <p class="text-justify">La distance de tir est de 25 ou 50m sur des cibles C50. Différentes disciplines existent:</p>
            <ul>
               <li>COMINAZZO: Pistolet à silex à un coup (Origine et réplique), canon lisse, position « debout », distance 25m</li>
               <li>KUCHENREUTER: Pistolet à percussion à un coup (Origine et réplique), canon rayé, position « debout », distance 25m</li>
               <li>COLT: Revolver (barillet) à percussion (Origine), canon rayé, position « debout », distance 25m</li>
               <li>MARIETTE: Revolver (barillet) à percussion (Réplique), canon rayé, position « debout », distance 25m</li>
               <li>MARIETTE: Revolver (barillet) à percussion (Origine et réplique), canon rayé, position « debout », distance 50m</li>
            </ul>
            <hr>
            <h3>Disciplines FFT Armes d’épaule</h3>
            <p class="text-justify">Les distances de tir sont de 50 et 100m sur des cibles C50 et C200. Les différentes disciplines pratiquées sont:</p>
            <ul>
               <li>MIQUELET: Fusil réglementaire (Origine ou réplique) à silex, canon lisse, position « debout », distance 50m</li>
               <li>VETTERLI: Fusil libre à mèche, silex ou percussion (Origine ou réplique), position « debout », distance 50m</li>
               <li>HIZADAI: Fusil à mèche crosse de joue (Origine), canon lisse, position « genou xi, distance 50m</li>
               <li>HIZADAI: Fusil libre à mèche (Réplique), canon lisse, position « genou », distance 50m</li>
               <li>TANEGASHIMA: Fusil à mèche, crosse de joue (Origine), canon lisse, position « debout », distance 50m</li>
               <li>MAXIMILIEN: Fusil à silex (Origine ou réplique), canon rayé, position « couchée », distance 100m</li>
               <li>PENNSYLVANIA: Fusil à silex (Origine ou réplique), canon rayé, position « debout », distance 50m</li>
               <li>MINIE: Fusil à percussion « réglementaire » (Origine ou réplique), canon rayé calibre supérieure à 13,5mm, position « couchée », distance 100m</li>
               <li>LAMARMORA: Fusil à percussion « réglementaire » (Origine ou réplique), canon rayé calibre supérieure à 13,5mm, position « debout », distance 50m</li>
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