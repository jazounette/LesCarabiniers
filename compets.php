<?php session_start(); 
   require ("mysqlco.php");
?>
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
         <div class="offset-md-1 col-md-10 col-12">
            <br>
            <h3 class="text-center">RÉSULTATS DE COMPÉTITIONS</h3>
            <br>
            <?php
               $dossier = "competitions";
               $fichiers = scandir ( "competitions", SCANDIR_SORT_ASCENDING);
               foreach($fichiers as $key=>$val) if (substr($val, -5) != ".json") unset ($fichiers[$key]);//vire du tableau tout ce qui n'est pas en .json

               //$premCola = "";   $premShow = "show";   $premAria = "true";//la première card de l'accordéon est déroulé au chargement de la page
               $premCola = "collapsed";      $premShow = "";      $premAria = "false";//la première card de l'accordéon est replié

               foreach($fichiers as $key=>$val) {
                  $handle = fopen($dossier . "/" . $val, "r");
                  $contents = fread($handle, filesize("$dossier/$val"));
                  fclose($handle);

                  $tabresult = json_decode($contents, true);
                  $titre = $tabresult["evenement"];
                  $titre .= ($tabresult["lieu"] != "") ? ", " . $tabresult["lieu"] : "";
                  $titre .= ($tabresult["date"] != "") ? ", " . $tabresult["date"] : "";

                  echo '<div class="accordion" id="resultats">';
                  echo '<div class="card">';
                  echo "<div class=\"card-header\" id=\"heading$key\">";
                  // echo '<h2 class="mb-0">';
                  echo "<button class=\"btn btn-link btn-block text-left $premCola\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse$key\" aria-expanded=\"$premAria\" aria-controls=\"collapse$key\">";
                  echo $titre;
                  echo '</button></div>';// </h2> entre /button et /div
                  echo "<div id=\"collapse$key\" class=\"collapse $premShow\" aria-labelledby=\"heading$key\" data-parent=\"#resultats\">";
                  echo '<div class="card-body">';

                  foreach($tabresult["discipline"] as $val) {
                     echo "<h5 class=\"text-center font-weight-bold\">" . $val["nom"] . "</h5>";
                     $l = count($val["resultat"][0]);
                     echo "<div class=\"table-responsive\">";
                     echo "<table class=\"table table-hover table-sm tabresult\" style=\" color:black;\">";
                     foreach($val["resultat"] as $cle=>$zou) {
                        $dan = ($cle == 0) ? "th" : "td";
                        echo "<tr>";
                        for ($i=0; $i<$l; $i++) echo "<$dan>" . $zou[$i] . "</$dan>";
                        echo "</tr>";
                     }
                     echo "</table>";
                     echo "</div><br>";
                  }
                  echo "</div></div></div></div>";
                  //$premCola = "collapsed";      $premShow = "";      $premAria = "false";//inverse les variables pour que les cards suivante soit fermé par défaut
               }
            ?>
         </div>
      </div>
   </div>
   <?php include_once "piedpage.html"; ?>

   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>