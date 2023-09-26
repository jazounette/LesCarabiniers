<?php session_start();
   if (!isset($_SESSION["acces"]) || ($_SESSION["acces"] >= 2)) {
      header("location:www.google.com");
   }
   $nom = (isset($_SESSION["nom"])) ? $_SESSION["nom"] : "";
   $prénom = (isset($_SESSION["prénom"])) ? $_SESSION["prénom"] : "";
   $licence = (isset($_SESSION["licence"])) ? $_SESSION["licence"] : "";
   $adresse = (isset($_SESSION["adresse"])) ? $_SESSION["adresse"] : "";
   $telephone = (isset($_SESSION["telephone"])) ? $_SESSION["telephone"] : "";
   $courriel = (isset($_SESSION["courriel"])) ? $_SESSION["courriel"] : "";
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
         <div class="offset-md-3 col-md-6 col-12">
            <br>
            <h4 class="text-center">MODIFIER VOS COORDONNÉES</h4>
            <br>
            <?php
               if ($_POST["edit"] == "admin") {
                  echo "Compte administrateur<br>"; 
                  $admin = "d-none";
               } else { 
                  echo "$nom, $prénom<br>";
                  echo "Licence N° $licence<br>";
                  $admin = "";
               }
            ?>
            <form action="traiteditcompte.php" method="post">
               <div class="form-group <?= $admin ?>">
                  <label for="adresse">Adresse:</label>
                  <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $adresse ?>">
               </div>
               <div class="form-group <?= $admin ?>">
                  <label for="telphone">Numéro de téléphone:</label>
                  <input type="tel" pattern="[0-9]{2}[ ]{0,1}[0-9]{2}[ ]{0,1}[0-9]{2}[ ]{0,1}[0-9]{2}[ ]{0,1}[0-9]{2}" class="form-control" id="telephone" name="telephone" value="<?= $telephone ?>" aria-describedby="telephoneHelp">
                  <small id="telephoneHelp" class="form-text">Peut être de la forme 1234567890 ou 12 34 56 78 90.</small>
               </div>
               <div class="form-group">
                  <label for="login">eMail:</label>
                  <input type="email" class="form-control" id="login" name="courriel" value="<?= $courriel ?>" aria-describedby="emailHelp" required>
                  <small id="emailHelp" class="form-text">Votre email sera votre login de connexion.</small>
               </div>
               <button type="submit" class="btn btn-primary" name="saveinfo" value="<?= $_POST["edit"] ?>">Sauvegarder</button>
               <hr>
               Changer votre mot de passe:
            </form>
            <form action="traiteditcompte.php" method="post">
               <div class="form-group">
                  <label for="vieuxmdp">Ancien mot de passe:</label>
                  <input type="password" class="form-control" id="vieuxmdp" name="vieuxmdp" required>
               </div>
               <div class="form-group">
                  <label for="nouvomdp">Nouveau mot de passe:</label>
                  <input type="password" class="form-control" id="nouvomdp" name="nouvomdp" aria-describedby="passHelp" required>
                  <small id="passHelp" class="form-text">Privilégié des mots de passe long avec symboles et chiffres.</small>
               </div>
               <button type="submit" class="btn btn-primary" name="savepass" value="<?= $_POST["edit"] ?>">Sauvegarder</button>
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
</body>
</html>