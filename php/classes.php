<?php

class requetesSQL{

static  function selectTable($tableName){

    $requeteSQL=
<<<CODESQL

    SELECT * FROM `$tableName`
    ORDER BY message DESC

CODESQL;

    $tabAssoColonneValeur = [];
    require "./connectionDb.php";      // Je charge le code PHP pour envoyer la requete 

    $tabLigne = $pdoStatement->fetchAll(); // Je recupère mon tableau de resultat
    $sql = 
<<<CODESQL
    SELECT * FROM `$tableName`
CODESQL;

    $req = $pdo->query($sql);
    while($row = $req->fetch()) {
    extract($row);
        if($tableName == 'concerts'){
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
        else if($tableName == 'OnePage')
        echo
<<<CODEHTML
<tr>
    <td>$nom</td>
    <td>$prenom</td>
    <td>$email</td>
    <td>$raison</td>
    <td>$message</td>
    <td><button data-id="$id" class="delete">Supprimer</button></td>  
</tr> 
CODEHTML;
        
    }    

$req->closeCursor();

}

}