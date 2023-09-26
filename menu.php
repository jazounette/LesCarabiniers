<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#"><strong><i>Les Carabiniers</i></strong><img class="ecussonnav" src="Images/navbarbrand.gif"></a>
   <button class="fancy-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">     <!-- active -->
            <a class="nav-link" href="index.php">ACCUEIL</a>     <!-- <span class="sr-only">(current)</span>-->
         </li>
         <li class="nav-item">
            <a class="nav-link" href="infrastructures.php">INFRASTRUCTURES</a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DISCIPLINES</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="disciplines/para-tir.php">Para-Tir</a>
               <a class="dropdown-item" href="disciplines/ecoledetir.php">École de Tir</a>
               <a class="dropdown-item" href="disciplines/arbalete.php">Arbalète</a>
               <a class="dropdown-item" href="disciplines/carabine.php">Carabine</a>
               <a class="dropdown-item" href="disciplines/pistolet.php">Pistolet</a>
               <a class="dropdown-item" href="disciplines/armeancienne.php">Arme Ancienne</a>
               <a class="dropdown-item" href="disciplines/tar.php">TAR</a>
               <!-- <div class="dropdown-divider"></div> -->
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="annonces.php">ANNONCES</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="compets.php">COMPÉTITIONS</a>
         </li>
      </ul>
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <?php
               $navlink = '<a class="nav-link" href="';
               if (!isset($_SESSION["acces"])) $navlink .= 'login.php">LOGIN</a>';     //acces inexistant
               elseif ($_SESSION["acces"] == 0) $navlink .= 'admin.php">ADMIN</a>';    //acces = admin
               elseif ($_SESSION["acces"] == 1) $navlink .= 'compte.php">COMPTE</a>';  //acces = licencié
               else $navlink .= 'login.php">LOGIN</a>';                                //acces = non connecté
               echo $navlink;
            ?>
         </li>
      </ul>
   </div>
 </nav>
