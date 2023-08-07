<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $civilact = $_POST["civilite"];
    $nomprenact= $_POST["nometprenom"];
    $agact= $_POST["age"];
    $telact=$_POST["telephone"];
    $adract= $_POST["adresse"];
    $paynaissact= $_POST["paysdenaissance"];
    $sitmatact= $_POST["situationmatrimoniale"];
    $natiact= $_POST["nationalite"];
    $leecract= $_POST["lireeecrire"];
    $nivact= $_POST["niveau"];
    $profesact= $_POST["profession"];
    $autrmetact= $_POST["autremetier"];
    $statprofact= $_POST["quefaitevous"];
    $Avenfact= $_POST["enfantsacharge"];
    $nombenfact= $_POST["siouicombien"];
    $comvilact= $_POST["communautevillageoise"];
    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO acteur(civilact,nomprenact, agact, telact, adract,paynaissact,sitmatact,natiact,leecract,nivact,profesact,autrmetact,statprofact,Avenfact,nombenfact,comvilact)
            VALUES(:civilite, :nometprenom, :age, :telephone, :adresse, :paysdenaissance, :situationmatrimoniale, :nationalite, :lireeecrire, :niveau, :profession, :autremetier, :quefaitevous, :enfantsacharge, :siouicombien, :communautevillageoise )");
         
        $sth->bindParam(':civilite',$civilact);
        $sth->bindParam(':nometprenom',$nomprenact);
        $sth->bindParam(':age',$agact);
        $sth->bindParam(':telephone', $telact);
        $sth->bindParam(':adresse',$adract);
        $sth->bindParam(':paysdenaissance',$paynaissact);
        $sth->bindParam(':situationmatrimoniale',$sitmatact);
        $sth->bindParam(':nationalite',$natiact);
        $sth->bindParam(':lireeecrire',$leecract);
        $sth->bindParam(':niveau',$nivact);
        $sth->bindParam(':profession',$profesact);
        $sth->bindParam(':autremetier',$autrmetact);
        $sth->bindParam(':quefaitevous',$statprofact);
        $sth->bindParam(':enfantsacharge',$Avenfact);
        $sth->bindParam(':siouicombien',$nombenfact);
        $sth->bindParam(':communautevillageoise',$comvilact);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
