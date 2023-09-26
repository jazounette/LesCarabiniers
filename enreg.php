<?php session_start();
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
            <h4 class="text-center">FORMULAIRE D'ENREGISTREMENT</h4>
            <br>
            <form action="traitenregform.php" method="post">
               <div class="form-group">
                  <label for="nom">Nom de famille:</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="<?= $nom ?>" aria-describedby="nomHelp" required>
                  <small id="nomHelp" class="form-text">Champ obligatoire.</small>
               </div>
               <div class="form-group">
                  <label for="prénom">Prénom:</label>
                  <input type="text" class="form-control" id="prénom" name="prénom" value="<?= $prénom ?>" aria-describedby="prénomHelp" required>
                  <small id="prénomHelp" class="form-text">Champ obligatoire.</small>
               </div>
               <div class="form-group">
                  <label for="licence">Numéro de licence:</label>
                  <input type="text" class="form-control" id="licence" name="licence" value="<?= $licence ?>" aria-describedby="licenceHelp" required>
                  <small id="licenceHelp" class="form-text">Votre numéro de licence FFTir. Champ obligatoire.</small>
               </div>
               <div class="form-group">
                  <label for="adresse">Adresse:</label>
                  <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $adresse ?>" aria-describedby="adresseHelp">
                  <small id="adresseHelp" class="form-text">Champ facultatif.</small>
               </div>
               <div class="form-group">
                  <label for="telphone">Numéro de téléphone:</label>
                  <input type="tel" pattern="[0-9]{2}[ ]{0,1}[0-9]{2}[ ]{0,1}[0-9]{2}[ ]{0,1}[0-9]{2}[ ]{0,1}[0-9]{2}" class="form-control" id="telephone" name="telephone" value="<?= $telephone ?>" aria-describedby="telephoneHelp">
                  <small id="telephoneHelp" class="form-text">Champ facultatif. Peut être de la forme 1234567890 ou 12 34 56 78 90.</small>
               </div>
               <hr>
               <div class="form-group">
                  <label for="login">eMail:</label>
                  <input type="email" class="form-control" id="login" name="courriel" value="<?= $courriel ?>" aria-describedby="emailHelp" required>
                  <small id="emailHelp" class="form-text">Votre email sera votre login de connexion. Champ obligatoire.</small>
               </div>
               <div class="form-group">
                  <label for="motdepasse">Mot de passe:</label>
                  <input type="password" class="form-control" id="motdepasse" name="motpass" aria-describedby="passHelp" required>
                  <small id="passHelp" class="form-text">Privilégié des mots de passe long avec symboles et chiffres. Champ obligatoire.</small>
               </div>
               <hr>
               <button type="submit" class="btn btn-primary" name="enreg">Enregistrement</button>
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