<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
    // si le mot de passe est correct, on affiche le contenu protégé
    if(isset($_POST["mdp"])) {
        if ($_POST["mdp"] == "momolechampion")
            {
?>

    <h1>PARTIE ADMINISTRATIF</h1>
    <section id="listeMessages">
        <h2>Listes des messages reçu</h2>
        <table>
            <thead>                    
                <tr>                    
                    <td>id</td>
                    <td>nom</td>
                    <td>email</td>
                    <td>message</td>
                </tr>
            </thead>
            <tbody>                       


    <!-- READ des messages de la bdd -->

    <?php


    $requeteSQL =
    <<<CODESQL

    SELECT * FROM `OnePage`
    ORDER BY message DESC

    CODESQL;


    $tabAssoColonneValeur = [];
    require "connectionDb.php";      // Je charge le code PHP pour envoyer la requete 

    $tabLigne = $pdoStatement->fetchAll(); // Je recupère mon tableau de resultat

    $sql = 'SELECT * FROM OnePage';
    $req = $pdo->query($sql);
    while($row = $req->fetch()) {
     extract($row);
        
        echo
    <<<CODEHTML
        <tr>
            <td>$id</td> 
            <td>$nom</td>
            <td>$prenom</td>
            <td>$email</td>
            <td>$raison</td>
            <td>$message</td>
        </tr> 
    CODEHTML;

    }    


    $req->closeCursor();

    ?>
            </tbody>
        </table>
    </section>

    <!-- DELETE d'un message de la bdd -->

    <section class="cache">
        <h2>supprimer un message</h2>
        <form id="delete" action="" method="POST">
        <input type="text" name="id" required placeholder="entrez l'id du message à supprimer">
        <button type="submit">envoyer votre message</button>
        </form>
    </section>

    <?php 
        $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
        if ($identifiantFormulaire == "delete") {
            require "php/functions.php"; 
            } 
    ?>

    <?php
                }
    }
    // si le mot de passe est incorrect, on affiche un message
    if(isset($_POST["mdp"])) {
        if ($_POST["mdp"] !== "momolechampion")
            { echo "mot de passe erroné";}
    }
    ?>

    </body>
</html>