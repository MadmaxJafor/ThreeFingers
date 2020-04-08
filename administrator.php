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
        <table class="read">
            <thead>                    
                <tr>                    
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Email</td>
                    <td>Raison du message</td>
                    <td>Message</td>
                    <td>Suppression</td>
                </tr>
            </thead>
            <tbody>                       

    <!-- Connection à la BDD pour lecture des messages reçus : READ -->

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

    ?>
            </tbody>
        </table>
    </section>

<!-- formulaire pour supprimer un message de la bdd -->

    <section class="cache">
        <form id="delete" action="" method="POST">
        <input type="text" name="id" required placeholder="entrez l'id du message à supprimer">
        <input type="hidden" name="identifiantFormulaire" value="delete">
        <button type="submit">envoyer votre message</button>
        </form>
    </section>

    <h2>Ajouter une date de concert</h2>
    
    <form  id="createDate"" action="" method="POST">
        <label for="lieu">Salle</label>
        <input type="text" name="lieu" required>
        <label for="date">Date de concert</label>
        <input type="date" name="date" id="" required>
        <label for="ville">Ville</label>
        <input type="text" name="ville" required>
        <label for="adresse">Adresse</label>
        <textarea  cols="60" raws="6" name="adresse" required></textarea>
        <input type="hidden" name="identifiantFormulaire" value="createDate">
        <button type="submit">Enregistrer la date</button>
    </form>

    <?php 
        //affectation de la valeur "delete" à $identifiantFormulaire
        $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
    
        require 'php/filtreformulaire.php'; 
    ?>


<!-- script JS permettant de supprimer un message en cliquant sur un bouton -->

<script>
    //quand je clique sur le bouton supprimer
    var listeBoutonDelete = document.querySelectorAll("button.delete");
    listeBoutonDelete.forEach(function(bouton){
    bouton.addEventListener("click", function(event){
        //je recupère l'id de la ligne à supprimer, pour cela je recupère l'attribut data-id du bouton
        var idBouton = event.target.getAttribute("data-id");
        //je copie la valeur dans le champ du formulaire
        var champId = document.querySelector("form#delete input[name=id]");
        //et je change la valeur du champ du formulaire
        champId.value = idBouton;

        // popup de confirmation avant suppression du message
        var confirmation = window.confirm("Es-tu sûr de vouloir supprimer ce message ? Cette action est irréversible !");
        if (confirmation)
        {
            var formDelete = document.querySelector("form#delete");
            formDelete.submit();
        }
    });

});

</script>

    </body>
</html>
