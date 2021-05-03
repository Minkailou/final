<?php
 require('connexion.php');
 if(isset($_POST['submit'])){
     if(isset($_POST['etages'], $_POST['prix'],$_POST['position'],$_POST['date'])){
         if($_POST['etages'] !="" && $_POST['prix'] !="" && $_POST['position'] != "" && $_POST['date'] != ""){
             // Enregistrement en base de données
         
             $etages = $_POST["etages"];
             $prix = $_POST["prix"];
             $position = $_POST["position"];
             $date = $_POST["date"];

             $insertion= "INSERT INTO gardien(etages,prix,position,date) values(NULL, $etages, $prix, $position, $date)";
             
             $execute =$pdo->query($insertion);

             if($execute == true){
                 $msgSuccess = "Informations enregistrées avec succès";

             }
             else{
                 $msgError = "L'enregistre n'a pas pu être effectué";
             }
             
         
         
            }


     }
 }
?>