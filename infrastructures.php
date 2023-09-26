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
   <?php include_once "menu.php"; ?>
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-12 ">
            <br>
            <h3>Stand Neuville (10m)</h3>
            <p>40 postes 10 mètres éléctronique SIUS.<br>37 postes 10 mètres électrique.<br>4 postes pistolet vitesse 5 cibles.<br>37 postes pistolet standard électronique.<br>6 postes arbalète match.<br>2 postes arbalète field 10 mètres.</p>
            <img class="imgW" src="Images/stand10mA.jpg" alt="la ciblerie automatique SIUS du stand 10 mètres">
            <p><br>Adresse:<br>8 Chemin de neuville<br>02100 Saint-Quentin</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.373314736128!2d3.3053480511713844!3d49.83544267929407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8229a78d23d05%3A0xabb76d0f446ac4a3!2s8%20Chemin%20de%20Neuville%2C%2002100%20Saint-Quentin!5e0!3m2!1sfr!2sfr!4v1611942951547!5m2!1sfr!2sfr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="d-block d-sm-block d-md-none"><br><hr></div>
         </div>
  
         <div class="col-md-6 col-12">
            <br>
            <h3><span class="ligne">Stand Jean Debreux</span> <span class="ligne">(25m, 50m, 100m)</span></h3>
            <p>11 postes 25 mètres.<br>11 postes 50 mètres.<br>6 postes 100 mètres.<span class="d-none d-sm-none d-md-block"><br><br><br></span></p>
            <div id="carouselStandB" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="Images/StandB01low.jpg" class="rounded d-block w-100" alt="Plaque entrée stand Jean Debreux 1932 - 2014.">
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB02low.jpg" class="rounded d-block w-100" alt="Vue extérieur du stand Jean Debreux sous la neige.">
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB03low.jpg" class="rounded d-block w-100" alt="Les 11 postes de tir 25 mètres">
                     <div class="carousel-caption">
                        <p class="CarouF">Postes de tir 25 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB05low.jpg" class="rounded d-block w-100" alt="Les 11 cibles du poste de tir 25 mètres">
                     <div class="carousel-caption">
                        <p class="CarouF">Cibles 25 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB06low.jpg" class="rounded d-block w-100" alt="Les postes de tir couché 50 mètres">
                     <div class="carousel-caption">
                        <p class="CarouF">Postes de tir 50 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB07low.jpg" class="rounded d-block w-100" alt="Une vue sur le champ de tir à 50 mètres">
                     <div class="carousel-caption">
                        <p class="CarouF">Cibles 50 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB08low.jpg" class="rounded d-block w-100" alt="Le couloirs d'accès aux cibles 100 mètres">
                     <div class="carousel-caption">
                        <p class="CarouF">Accès cibles 100 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB09low.jpg" class="rounded d-block w-100" alt="Les six postes de tir à 100 mètres.">
                     <div class="carousel-caption">
                        <p class="CarouF">Poste de tir 100 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB10low.jpg" class="rounded d-block w-100" alt="Un poste de tir à 100 mètres modulable, position debout.">
                     <div class="carousel-caption">
                        <p class="CarouF">Poste de tir 100 mètres position debout</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB11low.jpg" class="rounded d-block w-100" alt="Vue du champ de tir 100 mètres">
                     <div class="carousel-caption">
                        <p class="CarouF">Cibles 100 mètres</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="Images/StandB12low.jpg" class="rounded d-block w-100" alt="Un tag Les Carabiniers Saint-Quentinois, bleu sur fond jaune">
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselStandB" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Photo précédente</span>
               </a>
               <a class="carousel-control-next" href="#carouselStandB" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Photo suivant</span>
               </a>
            </div> <!--------- fin carousel --------->
            <p><br>Adresse:<br>Route de Cambrai, Lieu dit La sentinelle<br>02100 Saint-Quentin</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1215.3910437047339!2d3.269435492406214!3d49.8724046577887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1611945635464!5m2!1sfr!2sfr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>   
      </div>   
   </div>   
   <?php include_once "piedpage.html"; ?>
      
   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>