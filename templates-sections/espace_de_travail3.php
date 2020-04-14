
<div id='s3' class="navigation">
    <h2>Liste des concerts</h2>
        <div id='listeConcerts'>
        <table class="listeDate">
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

require 'php/classes.php';
$requete = new requetesSQL();
$requeteSQL= $requete->selectTable('concerts');

    ?>
            </tbody>
        </table>
</div>
</div>   
