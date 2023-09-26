<?php session_start();
   require ("mysqlco.php");
   require ("secu.php");

   //tester si les champs sont vide, alors ne pas changer 

   $id_user = $_SESSION["id_user"];

   $st = $db->prepare("SELECT * FROM utilisateurs WHERE id_user = ?");
   $st->bindValue(1, $id_user);
   $st->execute();
   $cat = $st->fetch(PDO::FETCH_ASSOC);

   if ($cat == false) {
      // echo "utilisateur introuvable<br>";
      $_SESSION["alert"] = 8; //alert 8: id utilisateur introuvable
      header("location:compte.php");
   } elseif (isset ($_POST["saveinfo"])) {
      // echo "changement des informations<br>";
      $adresse = secuSaisi($_POST["adresse"]);
      $courriel = secuSaisi($_POST["courriel"]);
      $telephone = str_replace(' ', '', secuSaisi($_POST["telephone"]));

      $st = $db->prepare("UPDATE utilisateurs SET adresse=?, tel=?, email=? WHERE id_user=?");
      $st->bindValue(1, $adresse);
      $st->bindValue(2, $telephone);
      $st->bindValue(3, $courriel);
      $st->bindValue(4, $id_user);
      if ($st->execute()) {
         $_SESSION["adresse"] = $adresse;
         $_SESSION["telephone"] = $telephone;
         $_SESSION["courriel"] = $courriel;
      }
      header("location:compte.php");

   } elseif  (isset ($_POST["savepass"])) {
      // echo "changement du mot de passe<br>";
      $nouvomdp = secuSaisi($_POST["nouvomdp"]);
      $vieuxmdp = secuSaisi($_POST["vieuxmdp"]);
   
      if (password_verify ($vieuxmdp, $cat["motpass"])) {
         // echo "edition de la base de donnée<br>";
         $st = $db->prepare("UPDATE utilisateurs SET motpass=? WHERE id_user=?");
         $st->bindValue(1, password_hash( $nouvomdp, PASSWORD_DEFAULT) );
         $st->bindValue(2, $id_user);
         $st->execute();
         header("location:compte.php");
      } else {
         // echo "ancien mot de passe incorrect<br>";
         $_SESSION["alert"] = 7; //alert 7: mauvais mot de passe
         header("location:editcompte.php");
      }
   }
?>