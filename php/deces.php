<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $nomprendec = $_POST["nometprenom"];
    $sexdec = $_POST["sexe"];
    $fondec= $_POST["fonction"];
    $datnaisdec= $_POST["datedenaissance"];
    $liedec= $_POST["lieudedeces"];
    $nomliedec= $_POST["nomlieudedeces"];
    $motdec= $_POST["motifdeces"];
    $nomprenpardec= $_POST["parentdudefunt"];
    $liehabdec= $_POST["lieuhabitation"];
    $datdec= $_POST["datededeces"];


    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO deces(nomprendec,sexdec,fondec,datnaisdec,liedec,nomliedec,motdec,nomprenpardec,liehabdec,datdec)
            VALUES(:nometprenom, :sexe, :fonction, :datedenaissance, :lieudedeces, :nomlieudedeces, :motifdeces, :parentdudefunt, :lieuhabitation, datededeces)");
         
        $sth->bindParam(':nometprenom',$nomprendec);
        $sth->bindParam(':sexe',$sexdec);
        $sth->bindParam(':fonction',$fondec);
        $sth->bindParam(':datedenaissance', $datnaisdec);
        $sth->bindParam(':lieudedeces',$liedec);
        $sth->bindParam(':nomlieudedeces',$nomliedec);
        $sth->bindParam(':motifdeces',$motdec);
        $sth->bindParam(':parentdudefunt',$nomprenpardec);
        $sth->bindParam(':lieuhabitation',$liehabdec);
        $sth->bindParam(':datededeces',$datdec);

        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
