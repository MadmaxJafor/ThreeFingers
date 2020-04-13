<div id="s2" class="navigation">
    <h2> Contact </h2>
    <section id="formulaire-contact">
        <h3>Pour nous contacter, n'hésitez pas à remplir le formulaire suivant: </h3>
        <form id="create" action="#formulaire-contact" method="POST">
            <label for="nom">Entrez votre nom</label>
            <input type="text" name="nom" required placeholder="Dupont">
            <label for="prenom">Entrez votre prenom</label>
            <input type="text" name="prenom" required placeholder="Jean">
            <label for="email">Entrez votre email pour recevoir une réponse</label>
            <input type="email" name="email" required placeholder="exemple@mail.me">
            <label for="raison">Entrez la raison de votre message</label>
            <input type="text" name="raison" placeholder="Demande de réservation">
            <label for="message">Entrez votre message</label>
            <textarea name="message" cols="60" rows="6" required placeholder="Votre message"></textarea>
            <input type="hidden" name="identifiantFormulaire" value="create">
            <button id="bouton" type="submit">Envoyez votre message</button>
            <div class="confirmation">
                
            <?php 
                //Affectation de la valeur "create" à la requête
                $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
                if ($identifiantFormulaire == "create") {
                //Envoie du formulaire à la bdd
                require "php/filtreformulaire.php";  
                }                      
            ?>
        </div>
        </form>
    </section>
</div>

