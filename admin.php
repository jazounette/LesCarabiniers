<?php session_start(); 
   require ("mysqlco.php");
   require ("secu.php");
   $licence = (isset($_POST["licence"])) ? secuSaisi($_POST["licence"]) : "";

   if (!isset($_SESSION["acces"]) || ($_SESSION["acces"] != 0)) header("location:index.php");
   if (isset($_POST["deco"])) {
      $_SESSION["acces"] = 2;
      header("location:index.php");
   }
   if (isset($_POST["valide"])) {
      $st = $db->prepare("UPDATE utilisateurs SET acces=1 WHERE id_user=?");
      $st->bindValue(1, $_POST["valide"]);
      $st->execute();
   }
   if (isset($_POST["tirC"])) {
      $st = $db->prepare("SELECT id_user FROM utilisateurs WHERE licence=?");
      $st->bindValue(1, $licence);
      $st->execute();
      $cat = $st->fetch(PDO::FETCH_ASSOC);
      if ($cat == false) {
         $_SESSION["alert"] = 5;
      } elseif (isset($_POST["date"]) && ($_POST["date"] != "")) {
         $date = secuSaisi($_POST["date"]);
         $st = $db->prepare("INSERT INTO tircontroles VALUES (NULL, ?, ?)");
         $st->bindValue(1, $cat["id_user"]);
         $st->bindValue(2, $date);
         $st->execute();
      }
      $goudale = isset($cat["id_user"]) ? $cat["id_user"] : "";
   }
   if (isset($_POST["deltir"])) {
      // echo $_POST["deltir"] . "<br>";
      // echo $_POST["licence"] . "<br>";
      // echo $_POST["chimay"] . "<br>";
      $st = $db->prepare("DELETE FROM tircontroles WHERE id_tir=?;");
      $st->bindValue(1, secuSaisi($_POST["deltir"]));
      $st->execute();

      $goudale = isset($_POST["chimay"]) ? secuSaisi($_POST["chimay"]) : "";
   }
   if(isset($_FILES["fichier"])) {
      // foreach ($_FILES["fichier"] as $key=>$val) echo "$key: $val<br>";
      $dossier = "competitions";
      $nomfichier = $_FILES["fichier"]["name"];
      if (!file_exists($dossier)) mkdir ($dossier);

      if ($_FILES["fichier"]["error"] != 0) $_SESSION["alert"] = 10;//test si erreur de transmition du fichier
      elseif ($_FILES["fichier"]["type"] != "application/json") $_SESSION["alert"] = 11;//test si extension bien de type json
      elseif (copy($_FILES["fichier"]["tmp_name"], "$dossier/$nomfichier")) $_SESSION["alert"] = 9;//tout marche bien navette
      else $_SESSION["alert"] = 10;
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
            <h3 class="text-center">ADMINISTRATION DU SITE</h3>
            <br>
            <?php  foreach ($_SESSION as $key => $val) {  echo $key . " - " . $val . "<br>";   }  ?>
            <br>
            <form action="editcompte.php" method="post">
               <button type="submit" class="btn btn-primary" name="edit" value="admin">Édition</button>
            </form>
            <hr>
            Uploader un fichier JSON contenant les résultats d'une compétition:
            <form action="" method="post" enctype="multipart/form-data">
               <div class="input-group">
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" id="inputGroupFile" name="fichier" accept=".json">
                     <label class="custom-file-label" for="inputGroupFile">Choix fichier</label>
                  </div>
                  <div class="input-group-append">
                     <button type="submit" class="btn btn-primary" name="envoi">Envoyer</button>
                  </div>
               </div>    
            </form>
            <hr>
            <form action="" method="post">
               <!-- <button type="submit" disabled style="display: none" aria-hidden="true"></button> -->
               <!-- bloque l'utilisation de la touche entré dans le formulaire -->
               Ajout d'un tir de contrôle:
               <div class="form-group row">
                  <div class="col-5">
                     <input type="text" class="form-control" name="licence" value="<?= $licence ?>" placeholder="Numéro de licence du tireur" aria-describedby="licenceHelp">
                     <small id="licenceHelp" class="form-text">Numéro de licence</small>
                  </div>
                  <div class="col-5">
                     <input type="date" class="form-control" name="date" aria-describedby="dateHelp">
                     <small id="dateHelp" class="form-text">Date du tir de contrôle</small>
                  </div>
                  <div class="col-2 text-right">
                     <button type="submit" class="btn btn-primary btn-sm" name="tirC">OK</button>
                  </div>
               </div>
               <?php 
                  if (isset($goudale)) {
// select nom, prenom, tircontroles.* from utilisateurs join tircontroles where utilisateurs.id_user = tircontroles.id_user;   
// select nom, tircontroles.* from utilisateurs inner join tircontroles on utilisateurs.id_user=tircontroles.id_user where utilisateurs.id_user=4;
                     $st = $db->prepare("SELECT nom, prenom, tircontroles.* FROM utilisateurs INNER JOIN tircontroles ON utilisateurs.id_user=tircontroles.id_user WHERE utilisateurs.id_user=?");
                     $st->bindValue(1, $goudale);
                     $st->execute();
                     $cat = $st->fetchAll(PDO::FETCH_ASSOC);
                     if ($cat != false) {
                        echo $cat[0]["nom"] . ", " . $cat[0]["prenom"];
                        echo "<div class=\"row\">";
                        foreach ($cat as $val) {
                           echo "<div class=\"col-xl-4 col-lg-6 col-12\">";
                           setlocale(LC_TIME, "fr_FR");
                           $date = strtotime($val["date"]);
                           echo utf8_encode(strftime('%A %e %B %Y<br>', $date));  //il faut utiliser utf8-encode sinon bug de la fonction strftime avec les accents
                           $user = $val["id_user"];
                           echo "<input type=\"hidden\" name=\"chimay\" value=\"$user\">";// champ caché pour passer l'id de l'utilisateur
                           $id = $val["id_tir"]; 
                           echo "<button type=\"submit\" class=\"btn btn-danger btn-sm\" name=\"deltir\" value=\"$id\">EFFACER</button>";
                           echo "</div>";
                        }
                        echo "</div>";
                     }
                  }
               ?>
               <hr>
               Compte en attente de validation:
               <?php
                  $st = $db->prepare("SELECT id_user, nom, prenom, licence, email FROM utilisateurs WHERE acces = ?");
                  $st->bindValue(1, 2);
                  $st->execute();
                  $cat = $st->fetchAll(PDO::FETCH_ASSOC);
                  if ($cat != false) {
                     echo "<table class=\"table table-striped table-dark table-hover\">";
                     foreach ($cat as $val) {
                        echo "<tr>";
                        echo "<td>" . $val["nom"] . "</td>";
                        echo "<td>" . $val["prenom"] . "</td>";
                        echo "<td>" . $val["licence"] . "</td>";
                        echo "<td class=\"d-none d-sm-none d-md-none d-lg-block\">" . $val["email"] . "</td>";
                        $id = $val["id_user"];
                        echo "<td class=\"text-right pr-0\"><button type=\"submit\" class=\"btn btn-primary btn-sm\" name=\"valide\" value=\"$id\">OK</button></td>";
                        echo "</tr>";
                     }
                     echo "</table>";
                  } else { echo " AUCUN";  }
               ?>
               <hr>

               <button type="submit" class="btn btn-primary" name="deco">Déconnexion</button>
            </form>
            <br>
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
   <script>//code pour avoir le nom du fichier afficher dans le champ choose a file
      $('#inputGroupFile').on('change',function(){
            var fileName = $(this).val().replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(fileName);
      })
   </script>        
</body>
</html>