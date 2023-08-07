<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $orgproj = $_POST["organisme"];
    $libproj = $_POST["libelle"];
    $datenrproj= $_POST["date"];
   
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO projet(orgproj,libproj,datenrproj)
            VALUES(:organisme, :libelle, :date)");
         
        $sth->bindParam(':organisme',$orgproj);
        $sth->bindParam(':libelle',$libproj);
        $sth->bindParam(':date',$datenrproj);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
