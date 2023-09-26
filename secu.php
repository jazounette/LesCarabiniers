<?php
   function secuSaisi($chaine) {
      $chaine = trim($chaine);
      $chaine = stripslashes($chaine);
      $chaine = htmlspecialchars($chaine);
      return $chaine;
   }
?>