<?php
   if (isset ($_SESSION["alert"]) && ($_SESSION["alert"] != 0)) {
      $welmess = ($_SESSION["acces"] == 1) ? $_SESSION["prénom"] : (($_SESSION["acces"] == 0) ? "Maitre" : "");
      
      switch ($_SESSION["alert"]) {
         case 1  : $choupinette = "Cette adresse email est déjà utilisé"; break;
         case 2  : $choupinette = "Mot de passe incorrect"; break;
         case 3  : $choupinette = "Identifiant incorrect"; break;
         case 4  : $choupinette = "Votre compte n'a pas encore était activé"; break;
         case 5  : $choupinette = "Numéro de licence introuvable"; break;
         case 6  : $choupinette = "Les petites annonces sont réservé aux membres du club"; break;
         case 7  : $choupinette = "Ancien mot de passe incorrect"; break;
         case 8  : $choupinette = "Identifiant de l'utilisateur introuvable"; break;
         case 9  : $choupinette = "Transfert du fichier terminé"; break;
         case 10 : $choupinette = "Erreur de transfert de fichier"; break;
         case 11 : $choupinette = "Format de fichier incorrect, format json requis."; break;
         case 12 : $choupinette = "Connexion OK, bienvenue $welmess."; break;
         default : $choupinette = "rien";
      }
      if ($choupinette != "rien") echo "<script>alert(\"$choupinette\")</script>";
      $_SESSION["alert"] = 0;
   }
?>