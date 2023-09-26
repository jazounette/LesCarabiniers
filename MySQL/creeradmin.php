<?php
   // $db = new PDO("mysql: host=localhost; dbname=carabiniers", "root", "toto");
   require ("../mysqlco.php");

   //permet d'injecter le compte admin dans la base de donnée.
   // $motpass = password_hash("admin", PASSWORD_DEFAULT);
   // $res = $db->query("INSERT INTO utilisateurs (acces, email, motpass) VALUES ('0', 'admin@free.fr', '$motpass')");

   $res = $db->query("select * from utilisateurs where email='admin@free.fr'");
   $data = $res->fetchAll(PDO::FETCH_ASSOC);

   echo "<pre>";
   var_dump($data);
   echo "</pre>";
   foreach ($data as $i) echo "login: " . $i["email"] . " - password: " . $i["motpass"] . "<br>";
   // echo $data[1]['email'];

?>