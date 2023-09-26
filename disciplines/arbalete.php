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
            <h1 class="text-center">TIR À L'ARBALÈTE <img class="discilogo" src="Images/disci-arbalete.svg"></h1><br>
            <img class="img-fluid float-left rounded mr-3" src="Images/arbalete.jpg" alt="une tireuse avec une arbalète moderne">
            <h3>Arbalète match et field</h3>
            <p class="text-justify">Il existe deux sortes de pratiques : l’Arbalète match et l’Arbalète field. L’Arbalète match est l’héritière de l’arbalète qui était utilisée au Moyen Âge. Avec elle, on tire à 10 mètres en position debout et à 30 mètres dans les positions debout et genou. Le tir se fait en stand de tir, sur une cible, en utilisant un trait.</p>
            <p class="text-justify">L’Arbalète field est très proche de l’esprit du tir à l’arc avec l’utilisation de cordes, de branches d’arc et de flèches. On tire principalement en extérieur, aux distances de 35 mètres, 50 mètres et 65 mètres, sur des cibles semblables à celles utilisées au tir à l’arc. Le tir en salle à 18 mètres permet de conserver une pratique durant la période hivernale.</p>
            <hr>
            <h3>L'arbalète moderne</h3>
            <p class="text-justify">Les arbalètes modernes ont profité des progrès des arcs modernes : matériaux composites, arcs à poulie. À titre d'illustration, voici les caractéristiques techniques d'une arbalète de chasse moderne : </p>
            <ul>
               <li>Puissance : 150 livres (la force exercée pour maintenir l'arbalète armée, qui est aussi celle qui sera appliquée au projectile, correspond à celle d'un poids d'environ 68 kg, soit 667 newtons ; la dénomination « puissance » et sa mesure en « livres » sont traditionnelles en archerie, bien qu'il s'agisse d'une force et non d'une puissance).</li>
               <li>Vitesse initiale : 102 m/s (env. 367 km/h).</li>
            </ul>
            <p class="text-justify">Certaines arbalètes modernes ont des particularités qu'on ne trouvait pas ou peu au Moyen Âge mais qui existaient déjà, pour certaines, durant l'Antiquité. On a trouvé notamment le principe de « l'articulation sur ressorts » : au lieu d'un arc flexible dont l'élasticité permet d'emmagasiner l'énergie qui propulsera la munition, ce sont des ressorts qui joueront ce rôle, l'arc (rigide, donc) n'ayant plus comme utilité que d'offrir un bras de levier pour tendre ces ressorts et un support pour placer la corde. On trouvait déjà ce principe durant l'Antiquité, notamment sur le « scorpion », grosse arbalète montée sur affût utilisée principalement par l'armée romaine. On notera aussi des systèmes de réarmement rapide de la corde comme sur le modèle « commando » de la marque Barnett, où l'arbrier se « casse » en deux niveaux d'une bascule (à la manière des fusils de chasse), ce qui a pour effet de tirer vers l'arrière des crocs qui emportent avec eux la corde. Lorsque le mouvement inverse est opéré (on « referme » l'arbrier), la corde reste en arrière, maintenue par la noix (ou la pièce du mécanisme équivalente), tandis que les crocs repartent en avant de l'arbrier pour laisser la corde suivre sa course naturelle durant le tir. L'adjonction d'un système de poulies, d'un palan ou d'un quelconque système de démultiplication des forces permettra par ailleurs de diminuer l'effort que doit offrir le tireur pour réarmer son arbalète par rapport à un système de réarmement classique. </p>
         </div>
      </div>
   </div>
   <?php include_once "../piedpage.html"; ?>

   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>