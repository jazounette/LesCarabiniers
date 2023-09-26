<?php session_start(); 
   if (isset($_SESSION["courriel"])) $courriel=$_SESSION["courriel"]; else $courriel="";
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
            <form action="traiteloginform.php" method="post">
               <div class="form-group">
                  <label for="login">eMail:</label>
                  <input type="email" class="form-control" id="login" name="courriel" value="<?= $courriel ?>" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text">veuillez entrer ici votre email de connexion.</small>
               </div>
               <div class="form-group">
                  <label for="motdepasse">Mot de passe:</label>
                  <input type="password" class="form-control" id="motdepasse" name="motpass" aria-describedby="passHelp">
                  <small id="passHelp" class="form-text">veuillez entrer ici votre mot de passe.</small>
               </div>
               <button type="submit" class="btn btn-primary" name="connex">Connexion</button>
               <hr>
               <p class="text-justify">Si vous n'etes pas enregistré, vous ne pouvez pas vous connecter. Utilisé le bouton ci dessous afin de créer un compte. Votre compte sera activé dans les meilleurs délais par l'un des administrateurs du site.</p>
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