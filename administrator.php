<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style_pageprotegee.css">
    <title>Administration des messages reçu</title>
</head>
<body> 
    <h1>PARTIE ADMINISTRATIF</h1>
    <section id="listeMessages">
        <h2>Listes des messages reçu</h2>
        <table class="read">
            <thead>                    
                <tr>                    
                    <td>id</td>
                    <td>nom</td>
                    <td>prenom</td>
                    <td>email</td>
                    <td>raison</td>
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
        <input type="hidden" name="identifiantFormulaire" value="delete">
        <button type="submit">envoyer votre message</button>
        </form>
    </section>

    <?php 
        $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
        if ($identifiantFormulaire == "delete") {
            require "php/functions.php"; 
            } 
    ?>

    </body>
</html>