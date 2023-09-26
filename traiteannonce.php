<?php session_start();

/////////////////ici tester si acces est 0 ou 1, admin ou licencié, faire aussi pour les autres fichier traite....
   require ("mysqlco.php");
   require ("secu.php");

   if (isset($_POST["publier"])) {
      $descrip = secuSaisi($_POST["descrip"]);
      $urlphoto = secuSaisi($_POST["urlphoto"]);
      if (($_POST["publier"]) == -1) { //si -1 nouvelle annonce
         $st = $db->prepare("INSERT INTO annonces VALUES (NULL, ?, ?, ?)");
         $st->bindValue(1, $_SESSION["id_user"]);
         $st->bindValue(2, $descrip);
         $st->bindValue(3, $urlphoto);
         $st->execute();
         header("location:annonces.php");
      } else {  //si différent de -1 edition de l'annonce N
         $st = $db->prepare("UPDATE annonces SET descrip=?, urlphoto=? WHERE id_ann=?");
         $st->bindValue(1, $descrip);
         $st->bindValue(2, $urlphoto);
         $st->bindValue(3, $_POST["publier"]);
         $st->execute();
         header("location:annonces.php");
      }
   }
   if (isset($_POST["effacer"])) {
      $st = $db->prepare("DELETE FROM annonces WHERE id_ann=?");
      $st->bindValue(1, $_POST["effacer"]);
      $st->execute();
      header("location:annonces.php");
   }
   if (isset($_POST["editer"])) {
      header("location:annonces.php?editer=" . $_POST["editer"] . "#formulaire");
   }
   if (isset($_POST["effacer"])) {
      header("location:annonces.php#formulaire");
   }


?>