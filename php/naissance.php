<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $nomprennaiss = $_POST["nometprenom"];
    $sexnaiss = $_POST["sexe"];
    $lienaiss= $_POST["lieudenaissance"];
    $pernaiss= $_POST["pere"];
    $mernaiss= $_POST["mere"];
    $liehabnaiss= $_POST["lieudhabitation"];
    $datnaiss= $_POST["datedenaissance"];



    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO naissance(nomprennaiss,sexnaiss,lienaiss,datnaiss,pernaiss,mernaiss,liehabnaiss)
            VALUES(:nometprenom, :sexe, :lieudenaissance, :datedenaissance, :pere, :mere,  :lieudhabitation)");
         
        $sth->bindParam(':nometprenom',$nomprennaiss);
        $sth->bindParam(':sexe',$sexnaiss);
        $sth->bindParam(':lieudenaissance',$lienaiss);
        $sth->bindParam(':datedenaissance', $datnaiss);
        $sth->bindParam(':pere',$pernaiss);
        $sth->bindParam(':mere',$mernaiss);
        $sth->bindParam(':lieudhabitation',$liehabnaiss);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
