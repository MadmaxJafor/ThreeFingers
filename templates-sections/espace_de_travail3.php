
<section id='s3'>
<section id="listeConcerts">

        <h2>Liste des concerts</h2>
        <table class="listDate">
            <thead>                    
                <tr id=titres>                    
                    <td>Lieu</td>
                    <td>Date</td>
                    <td>Ville</td>
                    <td class="adresses">Adresse</td>
                </tr>
            </thead>
            <tbody>                       

    <!-- Connection à la BDD pour lecture des messages reçus : READ -->

    <?php

    $requeteSQL =
<<<CODESQL

    SELECT * FROM `concerts`
    ORDER BY message DESC

CODESQL;

    $tabAssoColonneValeur = [];
    require "connectionDb.php";      // Je charge le code PHP pour envoyer la requete 

    $tabLigne = $pdoStatement->fetchAll(); // Je recupère mon tableau de resultat

    $sql = 'SELECT * FROM concerts';
    $req = $pdo->query($sql);
    while($row = $req->fetch()) {
     extract($row);
        
        echo
<<<CODEHTML
        <tr>
            <td>$lieu</td>
            <td>$date</td>
            <td>$ville</td>
            <td class ='adresses'>$adresse</td> 
        </tr> 
CODEHTML;

    }    

    $req->closeCursor();

    ?>
            </tbody>
        </table>
    </section>
    

</section>   
</div>

<script>
  
</script>

