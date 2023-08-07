<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $nompharm = $_POST["nom"];
    $telpharm = $_POST["telephone"];
    $adrpharm= $_POST["adresse"];
    $sitgeopharm= $_POST["situationgeographique"];
    $respopharm= $_POST["responsable"];
    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO pharmacie(nompharm,telpharm, adrpharm,sitgeopharm,respopharm)
            VALUES(:nom, :telephone, :adresse, :situationgeographique, :responsable)");
         
        $sth->bindParam(':nom',$nompharm);
        $sth->bindParam(':telephone',$telpharm);
        $sth->bindParam(':adresse',$adrpharm);
        $sth->bindParam(':situationgeographique', $sitgeopharm);
        $sth->bindParam(':responsable',$respopharm);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
