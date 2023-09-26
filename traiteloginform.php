<?php session_start();
   require ("mysqlco.php");
   require ("secu.php");

   $courriel = secuSaisi($_POST["courriel"]);
   $motpass = secuSaisi($_POST["motpass"]);
   
   if (isset ($_POST["connex"])) {
      // echo "demande de connexion<br>";

      $st = $db->prepare("SELECT * FROM utilisateurs WHERE email = ?");
      $st->bindValue(1, $courriel);
      $st->execute();
      $cat = $st->fetch(PDO::FETCH_ASSOC);
   
      // echo "<pre>";   var_dump ($cat);    echo "</pre><br>";
      // foreach ($cat as $key => $val) {  echo $key . " - " . $val . "<br>";   }

      if ($cat == false) { 
         // echo "ce compte n'existe pas<br>";
         $_SESSION["alert"] = 3; //alert 3: erreur de login
         $_SESSION["courriel"] = $courriel;
         header("location:login.php");
      } elseif ($cat["acces"] == 2) {
         $_SESSION["alert"] = 4; //alert 4: compte pas encore actif
         $_SESSION["courriel"] = $courriel;
         header("location:login.php");
      } elseif (password_verify ($_POST["motpass"], $cat["motpass"])) { 
         $_SESSION["alert"] = 12;// echo "tout marche bien navette<br>"; 
         $_SESSION["id_user"] = $cat["id_user"];
         $_SESSION["nom"] = $cat["nom"];
         $_SESSION["prénom"] = $cat["prenom"]; // accent gaffe
         $_SESSION["licence"] = $cat["licence"];
         $_SESSION["adresse"] = $cat["adresse"];
         $_SESSION["telephone"] = $cat["tel"];
         $_SESSION["courriel"] = $cat["email"];
         $_SESSION["acces"] = $cat["acces"];
         // foreach ($_SESSION as $key => $val) {  echo $key . " - " . $val . "<br>";   }
         header("location:index.php");
      } else { 
         // echo "mauvais mot de passe<br>"; 
         $_SESSION["alert"] = 2; //alert 2: mauvais mot de passe
         $_SESSION["courriel"] = $courriel;
         header("location:login.php");
      }
   }
   if (isset ($_POST["enreg"])) {
      // echo "demande d'enregistrement<br>";
      header("location:enreg.php");

   }

?>