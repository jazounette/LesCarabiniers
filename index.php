<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once "chemin.html"; ?>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Les Carabiniers</title>
   
   <link rel="stylesheet" href="bootstrap-4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">

</head>
<body class="d-flex flex-column min-vh-100"><!-- bootstrap footer flush bottom  -->
   <?php include_once "entete.html";  include_once "menu.php"; ?>

   <div class="container">
      <div class="row">
         <div class="col-md-8 col-12 text-justify">
            <br>
            <h3 class="text-center">BIENVENUE CHEZ LES CARABINIERS</h3>
            <br>
            <p class="indent">C’est en 1875 que la Ville de Saint-Quentin a fait construire un Stand Municipal de Tir à l’emplacement actuel du Stand Jean Debreux. Le 17 août 1876, la Municipalité de Saint-Quentin décide de fonder une société de tir et de préparation militaire qui prend le titre de “Société Saint-Quentin de Tir”, à qui elle confie son Stand Municipal. Le 15 novembre 1877, cette société devient “société civile de tir” sous le titre de “Le Tir de Saint-Quentin” puis est transformé en Stand National de Tir en 1924. Le Stand National de Tir de Saint-Quentin occupe une superficie de 9 000m². Il a été inauguré en 1928 par le Président de la République de l’époque, Monsieur Gaston Doumergue.</p>
            <p class="indent">En 1931, la société prend le nom des Carabiniers Saint-Quentinois pour assurer la gestion du stand, elle est reconnue d’utilité publique depuis 1974. Ses buts statutaires sont le développement du tir sportif.</p>
            <p class="indent">Ses installations permettent le déroulement de Championnats de la ligue de tir de l'aisne forte de 11 000 membres. Le Club Des Carabiniers est également l’un des plus importants clubs de tir de la région avec 557 licenciés (à fin juin 2014).</p>
            <br><hr>
            <h3 class="text-center">UN PEU D'HISTOIRE</h3>
            <br>
            <div class="row">
               <div class="col-lg-6 col-12 order-lg-1"><img class="imgW" src="Images/tnv-1.jpg" alt="l'entrée du stand de la Sentinelle dans les années 1928."></div>
               <div class="col-lg-6 col-12 order-lg-2">
                  <br class="d-lg-none">
                  <h3 class="datehist">1875</h3>
                  <p>C’est en 1875 que la Ville de Saint-Quentin a fait construire un Stand Municipal de Tir à l’emplacement actuel du Stand Stand Jean Debreux. La cuisante défaite de 1870 et l’épisode sanglant de la Commune y sont sûrement pour quelque chose…</p>
               </div>
               <div class="col-lg-6 col-12 order-lg-4"><img class="imgW" src="Images/tnv-3.jpg" alt="la délégation officielle du président Gaston Doumergue visite les installations du stand de la Sentinelle."></div>
               <div class="col-lg-6 col-12 order-lg-3">
                  <br>
                  <h3 class="datehist">1876</h3>
                  <p>Le 17 août 1876, la Municipalité de Saint-Quentin décide de fonder une société de tir et de préparation militaire qui prend le titre de “Société Saint-Quentin de Tir”, à qui elle confie son Stand Municipal. Le 15 novembre 1877, cette société devient “société civile de tir” sous le titre de “Le Tir de Saint-Quentin”.</p>
               </div>
               <div class="col-lg-6 col-12 order-lg-5"><img class="imgW" src="Images/tnv-5.jpg" alt="une autre photo du président Gaston Doumergue prise au stand de la Sentinelle lors de l'inauguration officielle."></div>
               <div class="col-lg-6 col-12 order-lg-6">
                  <br>
                  <h3 class="datehist">1924</h3>
                  <p>En 1924, le Tir de Saint-Quentin et la Municipalité de Saint-Quentin acceptent que le Stand Municipal de Tir soit transformé en Stand National de Tir. Le Stand National de Tir de Saint-Quentin occupe une superficie de 9&nbsp;000m².</p>
               </div>
               <div class="col-lg-6 col-12 order-lg-8"><img class="imgW" src="Images/tnv-6.jpg" alt="des personnalités de la délégation du président Gaston Doumergue devant l'entrée du stand de la Sentinelle."></div>
               <div class="col-lg-6 col-12 order-lg-7">
                  <br>
                  <h3 class="datehist">1928</h3>
                  <p>Il a été inauguré en 1928 par le Président de la République de l’époque, Monsieur Gaston Doumergue ainsi que la garde républicaine française.</p>
               </div>
               <div class="col-lg-6 col-12 order-lg-9"><img class="imgW" src="Images/tnv-9.jpg" alt="l'entrée du stand de la Sentinelle aujourd'hui."></div>
               <div class="col-lg-6 col-12 order-lg-10">
                  <br>
                  <h3 class="datehist">1931</h3>
                  <p>En 1931, la société prend le nom des Carabiniers Saint-Quentinois pour assurer la gestion du stand, elle est reconnue d’utilité publique depuis 1974. Ses buts statutaires sont le développement du tir sportif. Une tâche dont les Carabiniers s’acquitte fort bien depuis plus d’un siècle dans quasiment toutes les disciplines.</p>
               </div>
            </div>
            <span class="d-sm-block d-md-none"><hr></span>
            <br>
         </div>
         <div class="col-md-4 col-12 infoC">
            <?php include_once "informations/informations.html"; ?>
         </div>
      </div>
   </div>
   <?php 
      include_once "piedpage.html";
      include_once "alertes.php";
   ?>


   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>