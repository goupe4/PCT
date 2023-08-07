<!DOCTYPE html>
<html>
<head>
<title>Nouveau</title>
</head>
<body>
<div class='header row'><img src='banniere.jpg' id='image'></div>
    <H1>VEUILLEZ REMPLIR LE FORMULAIRE</H1>
    
    <FORM name="monform" id="frmcontact" action="acteur.php" method="post">
       <div>
                <label for="civil">Civilite</label>
                <select name="civilite" id="civil">
                    <option value="rien"></option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                    <option value="Mademoiselle">Mademoiselle</option>
                  </select>
                </div></br>
       
           <div>
                <label for="fname">Nom et Prenom </label>
                    <INput type="text" name="nometprenom" id="fname"  width="80"></INput>
                </div></br>
        <div>
                <label for="age">Age</label>
                <select name="age" id="age" width="80">
                    <option value="aucun"></option>
                    <option value="24ans">Moins de 24 ans</option>
                    <option value="34ans">Entre 24 et 34 ans</option>
                    <option value="44ans">Entre 35 et 44 ans</option>
                    <option value="54ans">Entre 45 et 54 ans</option>
                    <option value="64ans">Entre 55 et 64 ans</option>
                    <option value="65ans">plus de 65 ans</option> 
                  </select>
                </div></br>
            <div>
                    <label for="tel">Telephone</label>
                        <INput type="number" name="telephone" id="tel" width="60"></INput>
                    </div></br>

                    <div>
                        <label for="adract">Adresse electronique</label>
                            <INput type="mail" name="adresse" id="adract"  width="60"></INput>
                    </div></br>
               <div>
                <table>
 
                    
                     
                    <tr>
                        <td>pays de naissance: </td><!-- a voir ? type CMS? -->
                        <td>
                     
                     
                     <select name='paysdenaissance' >
                     
                    <?php 
                     
                     try  //Connection a la bdd
                      {
                       $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
                      }
                      catch (Exception $e)
                      {
                       die('Erreur : ' . $e->getMessage());
                      }
                      $reponse = $bdd->query('SELECT * FROM acteur');
                     
                      while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd 
                    {
                       echo "<option value=>".$donnees['paynaissact']."</option>\n";
                    }
                    ?>
                    </select>
                    </td>
                    </tr>
                    
                     
              
                    </table>     
                       
                        </div></br>
                      
                <div>
                    <label for="sitmat">Situation matrimoniale</label>
                    <select name="situationmatrimoniale" id="sitmat" width="80">
                        <option value="rien"></option>
                        <option value="Marié(e)">Marié(e)</option>
                        <option value="Celibataire">Celibataire</option>
                        <option value="veuf(ve)">veuf(ve)</option>
                        <option value="divorcé(e)">divorcé(e)</option>
                      </select>
                </div></br>
    
                   <div>
                    <table>
 
                        
                         
                        <tr>
                            <td>nationalite: </td><!-- a voir ? type CMS? -->
                            <td>
                         
                         
                         <select name='nationalite' >
                         
                        <?php 
                         
                         try  //Connection a la bdd
                          {
                           $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
                          }
                          catch (Exception $e)
                          {
                           die('Erreur : ' . $e->getMessage());
                          }
                          $reponse = $bdd->query('SELECT * FROM acteur');
                         
                          while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd 
                        {
                           echo "<option value=>".$donnees['natiact']."</option>\n";
                        }
                        ?>
                        </select>
                        </td>
                        </tr>
                        
                         
                       
                        </table>     
                    </div></br>
            
                    <div>
                    <label for="lireecrire">Savez-vous lire et ecrire?</label>
                    <select name="lireeecrire" id="lireeecrire" width="60">
                        <option value="aucun"></option>
                        <option value="non">non</option>
                        <option value="oui">oui</option> 
                    </select>
                    </div></br>
           
           <div>
                    <label for="niveau">Niveau d'étude</label>
                    <select name="niveau" id="niveau" width="60">
                        <option value="rien"></option>
                        <option value="aucun">aucun</option>
                        <option value="rien"></option>
                        <option value="primaire">primaire</option>
                        <option value="3ieme">moins que la 3ieme</option>
                        <option value="2nde">niveau 2nde</option>
                        <option value="1ere">niveau 1ere</option>
                        <option value="tle">niveau tle</option>
                        <option value="bac">niveau bac</option>
                        <option value="bac+1">niveau bac+1</option>
                        <option value="bac+2">niveau bac+2</option>
                        <option value="bac+3">niveau bac+3</option>
                        <option value="bac+4">niveau bac+4</option>
                        <option value="bac+5">niveau bac+5</option>
                        <option value="bac+6">niveau bac+6</option>
                        <option value="bac+7">niveau bac+7</option>
                        <option value="bac+8">niveau bac+8</option>
                    </select>
                    </div></br>
                    <div>
                        
                    <label for="profession">profession:</label>
                             
                             <select name="profession" id="profession"   width="80">
                             
                            <?php 
                             
                             try  //Connection a la bdd
                              {
                               $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
                              }
                              catch (Exception $e)
                              {
                               die('Erreur : ' . $e->getMessage());
                              }
                              $reponse = $bdd->query('SELECT * FROM acteur');
                             
                              while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd 
                            {
                               echo "<option value=>".$donnees['profesact']."</option>\n";
                            }
                            ?>
                            </select>
                    </div></br>    
              
                    <div>
                        <table>
 
                            
                             
                            <tr>
                                <td>autre metier: </td><!-- a voir ? type CMS? -->
                                <td>
                             
                             
                             <select name='autremetier' width="80">
                             
                            <?php 
                             
                             try  //Connection a la bdd
                              {
                               $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
                              }
                              catch (Exception $e)
                              {
                               die('Erreur : ' . $e->getMessage());
                              }
                              $reponse = $bdd->query('SELECT * FROM acteur');
                             
                              while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd 
                            {
                               echo "<option value=>".$donnees['autrmetact']."</option>\n";
                            }
                            ?>
                            </select>
                            </td>
                            </tr>
                            
                             
                           
                            </table>     
                    </div></br>
                
                    <div>
                        <label for="quefaitevous">Que faites-vous dans la vie?</label>
                            <INput type="text" name="quefaitevous" id="quefaitevous"  width="80"></INput>
                    </div></br>
                <div>
                        <label for="enfantsacharge">Avez-vous des enfants à charge?</label>
                        <select name="enfantsacharge" id="enfantsacharge" width="40">
                            <option value="rien"></option>
                            <option value="non">non</option>
                            <option value="oui">oui</option> 
                        </select>
                        </div></br>
                        <div>
                        <label for="siouicombien">si oui combien d'enfants à charge?</label>
                        <select name="siouicombien" id="siouicombien" width="40">
                            <option value="rien"></option>
                            <option value="1-3">1-3</option>
                            <option value="4-7">4-7</option>
                            <option value="8etplus">8 et plus</option>
                        </select>
                        </div></br>
                            
                    <div>
                        <label for="communautevillageoise">Appartenez-vous à une communauté villageoise?</label>
                        <select name="communautevillageoise" id="communautevillageoise"  width="40">
                            <option value="aucun"></option>
                            <option value="non">non</option>
                            <option value="oui">oui</option>  
                        </select>
                        </div></br>

        <input type="submit" value="ENVOYER" width="60"></INput></br>
    </div></br>
    </FORM>
</body>
</html>
