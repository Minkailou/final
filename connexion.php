<?php
   $servername = "localhost";
   $username = "root";
   $password="";


   try{
       $conn = new PDO("mysql:host=$servername;dbname=futurepapa",$username,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       echo "connexion avec succès";

   }

   catch(PDOException $e)
   {
       echo "connexion echouée" .$e->getMessage();
   }

?>