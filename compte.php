<?php session_start(); 
   require ("mysqlco.php");
   require ("phpfonctions.php");

   if (!isset($_SESSION["acces"]) || ($_SESSION["acces"] != 1)) header("location:index.php");
   if (isset($_POST["deco"])) {
      $_SESSION["acces"] = 2;
      header("location:index.php");
   }
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
            <h3 class="text-center">GESTION DU COMPTE</h3>
            <br>
            <?php
               // foreach ($_SESSION as $key => $val)  echo $key . " - " . $val . "<br>"; 
               echo $_SESSION["nom"] . ", " . $_SESSION["prénom"] . "<br>";
               echo "Licence N° " . $_SESSION["licence"] . "<br>";
               echo "adresse: " . $_SESSION["adresse"] . "<br>";
               echo "téléphone: " . telFormat($_SESSION["telephone"]) . "<br>";
               echo "courriel: " . $_SESSION["courriel"] . "<br><br>";
            ?>
            <form action="editcompte.php" method="post">
               <button type="submit" class="btn btn-primary" name="edit" value="compte">Édition</button>
            </form>
            <hr>
            Tirs de contrôles:
            <?php
               $st = $db->prepare("SELECT * FROM tircontroles WHERE id_user=? ORDER BY date");
               $st->bindValue(1, $_SESSION["id_user"]);
               $st->execute();
               $cat = $st->fetchAll(PDO::FETCH_ASSOC);
               if ($cat != false) {
                  echo "<div class=\"row\">";
                  $i = 1;
                  foreach ($cat as $val) { 
                     echo "<div class=\"col-xl-4 col-lg-6 col-12\">";
                     setlocale(LC_TIME, "fr_FR");// nom des mois/jours en anglais ou français dépend de la config du serveur // localhost en anglais  // free.fr en français
                     $date = strtotime($val["date"]);
                     echo utf8_encode(strftime($i++ . '. %A %e %B %Y', $date));  //il faut utiliser utf8-encode sinon bug de la fonction strftime avec les accents
                     echo "</div>";
                  }
                  if ($i < 4) {
                     $nextdate = $date +  60*60*24*60; // ajoute 2 mois à $date
                     $diffdate = $nextdate - time();
                     $couldate = ($diffdate < 0) ? "bg-success" : "bg-danger";
                     echo "<div class=\"col-12\">";
                     echo "Prochain tir de controle après le: ";
                     echo "<span class=\"rounded $couldate\">" . utf8_encode(strftime('&nbsp;%A %e %B %Y&nbsp;', $nextdate)) . "</span>";
                     echo "</div>";
                  }
                  echo "</div>";
               } else { echo " Aucun."; }
            ?>
            <hr>
            <form action="" method="post">
               <button type="submit" class="btn btn-primary" name="deco">Déconnexion</button>
            </form>
            </br>
         </div>
      </div>
   </div>
   <?php include_once "piedpage.html"; ?>

   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>