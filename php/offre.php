<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $orgproj = $_POST["organisme"];
    $libproj = $_POST["libelle"];
    $datenrproj = $_POST["datedepublication"];
    


    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO projet(orgproj,libproj, foncdec,datenrproj)
            VALUES(:organisme, :libelle, :datedepublication, )");
         
        $sth->bindParam(':nometprenom',$nomprendec);
        $sth->bindParam(':sexe',$sexdec);
        $sth->bindParam(':fonction',$foncdec);
        $sth->bindParam(':datedenaissance', $datnaisdec);
        $sth->bindParam(':lieudedeces',$liedec);
        $sth->bindParam(':nomlieudedeces',$nomliedec);
        $sth->bindParam(':motifdeces',$motdec);
        $sth->bindParam(':parentdudefunt',$nomprenpardec);
        $sth->bindParam(':lieuhabitation',$liehabdec);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
