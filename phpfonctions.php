<?php
   function telFormat ($chaine) {
      $severine = "";
      for ($i=0; $i<10; $i+=2) $severine .= substr($chaine, $i, 2) . '.';
      $severine = rtrim($severine, '.');
      return $severine;
   }
?>