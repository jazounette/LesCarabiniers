<?php session_start();

   // $db = new  PDO ("mysql: host=localhost; dbname=carabiniers", "root", "toto");
   // tester quand les champs saisi ne sont pas bon, faire message alert si tout est OK
   // changer le type des numéros de licence dans la BDN de INT en char(); il peut y avoir une lettre en début du numéro
   require ("mysqlco.php");
   require ("secu.php");

   $nom = secuSaisi($_POST["nom"]);
   $prénom = secuSaisi($_POST["prénom"]);
   $licence = secuSaisi($_POST["licence"]);
   $adresse = secuSaisi($_POST["adresse"]);
   $telephone = str_replace(' ', '', secuSaisi($_POST["telephone"]));
   $courriel = secuSaisi($_POST["courriel"]);

   $st = $db->prepare("SELECT email FROM utilisateurs WHERE email = ?");
   $st->bindValue(1, secuSaisi($_POST["courriel"]));
   $st->execute();
   $cat = $st->fetch(PDO::FETCH_ASSOC);
   
   if ($cat == false) {
      $st = $db->prepare("INSERT INTO utilisateurs VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
      $st->bindValue(1, $nom);
      $st->bindValue(2, $prénom);
      $st->bindValue(3, $licence);
      $st->bindValue(4, $adresse);
      $st->bindValue(5, $telephone);
      $st->bindValue(6, "2"); // 0:admin - 1:licencié - 2:visiteur
      $st->bindValue(7, $courriel);
      $st->bindValue(8, password_hash( secuSaisi($_POST["motpass"]), PASSWORD_DEFAULT) );
      $st->execute();
      header("location:index.php");
   } else {
      $_SESSION["alert"] = 1; //alert 1: email déjà utilisé
      $_SESSION["nom"] = $nom;
      $_SESSION["prénom"] = $prénom;
      $_SESSION["licence"] = $licence;
      $_SESSION["adresse"] = $adresse;
      $_SESSION["telephone"] = $telephone;
      $_SESSION["courriel"] = $courriel;
      header ("location:enreg.php");
   }


?>