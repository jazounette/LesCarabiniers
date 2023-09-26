<?php session_start(); 
   require ("mysqlco.php");
   require ("phpfonctions.php");

   if (!isset($_SESSION["acces"]) || ($_SESSION["acces"] >= 2)) {
      header("location:index.php");
      $_SESSION["alert"] = 6; //alert 6: pas acces aux annonces si pas log
   }
   $descriptE = "";  $urlphotoE = "";   $annonceN = -1;
   if (isset($_GET["editer"]))  $annonceN = $_GET["editer"];
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
         <div class="col-12"> 
            <br>
            <h3 class="text-center">LES PETITES ANNONCES</h3>
            <br>
         </div>
      </div>

      <?php
         $st = $db->prepare("SELECT nom, prenom, tel, email, annonces.* FROM utilisateurs JOIN annonces WHERE utilisateurs.id_user = annonces.id_user");
         $st->execute();
         $cat = $st->fetchAll(PDO::FETCH_ASSOC);
         if ($cat != false) {
            foreach ($cat as $val) {
               $descript = $val["descrip"];
               $urlphoto = $val["urlphoto"];
               $nom = $val["nom"];
               $prenom = $val["prenom"];
               $tel = telFormat($val["tel"]);
               $courriel = $val["email"];
               $id_user = $val["id_user"];
               $id_ann = $val["id_ann"];
               if ($id_ann == $annonceN) { $descriptE = $descript; $urlphotoE = "value=" . $urlphoto; }
               echo '<div class="row">';
               echo '<div class="col-lg-6 col-12">';
               echo "<img class='img-fluid rounded' src=$urlphoto>";
               echo '</div>';
               echo '<div class="col-lg-6 col-12">';
               echo "<h5>Annonce N° " . $id_ann . "</h5>";
               echo $descript . "<br>";
               if ($id_user == $_SESSION["id_user"]) {
                  echo '<form class="form-inline float-right" action="traiteannonce.php" method="post">';
                  echo '<button type="submit" class="btn btn-danger" name="effacer" value="'.$id_ann.'">Effacer</button>';
                  echo '<button type="submit" class="btn btn-primary" name="editer" value="'.$id_ann.'">Editer</button>';
                  echo '</form>';
               }
               echo '</div></div>';
               echo '<div class="row">';
               echo '<div class="col-12">';
               echo '<table class="table table-borderless table-sm annonce"><tr>';
               echo "<td>$nom $prenom</td>";
               echo "<td><img src='Images/ann-telephone.svg'> $tel</td>";
               echo "<td><img src='Images/ann-envelope.svg'> $courriel</td>";
               echo '</tr></table>';
               echo '</div></div>';
               echo '<hr>';
            }
         }
      ?>
      <a name="formulaire">
      <?php
         if ($annonceN ==-1) echo '<h5 class="text-center">Faire paraitre une nouvelle annonce</h5>';
         else echo '<h5 class="text-center">Edition de l\'annonce N° ' . $annonceN . '</h5>';
      ?>
      <form action="traiteannonce.php" method="post">
         <div class="form-group">
            <label for="annoncedescript">Description:</label>
            <textarea class="form-control" id="annoncedescript" name="descrip" rows="7"><?= $descriptE ?></textarea>
         </div>
         <div class="form-group">
            <label for="urlimage">Ajouter une image pour accompagner votre annonce:</label>
            <input type="text" class="form-control" id="urlimage" name="urlphoto" <?= $urlphotoE ?> aria-describedby="urlimageHelp">
            <small id="urlimageHelp" class="form-text">veuillez copier ici l'adresse internet ou ce trouve votre image</small>
         </div>
         <button type="submit" class="btn btn-primary" name="publier" value=<?= $annonceN ?>>Publier</button>
         <button type="submit" class="btn btn-danger" name="effacer">Effacer</button>
      </form>
   <br>

   </div>
   <?php include_once "piedpage.html"; ?>

   <script src="bootstrap-4.5.2/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-4.5.2/popper.min.js"></script>
   <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
</body>
</html>