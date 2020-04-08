<!-- ENVOIE DU FORMULAIRE SUR LA BDD : CREATE -->
<section id="s2">
<h2> Contact </h2>
    <section id="formulaire-contact">
        <h2>Pour nous contacter, n'hésitez pas à remplir le formulaire suivant: </h2>
        <form id="create" action="#formulaire-contact" method="POST">
            <input type="text" name="nom" required placeholder="entrez votre nom">
            <input type="text" name="prenom" required placeholder="entrez votre prenom">
            <input type="email" name="email" required placeholder="entrez votre email pour recevoir une réponse">
            <input type="text" name="raison" placeholder="entrez la raison de votre message">
            <textarea name="message" cols="60" rows="6" required placeholder="entrez votre message"></textarea>
            <input type="hidden" name="identifiantFormulaire" value="create">
            <button id="bouton" type="submit">Envoyez votre message</button>
            <div class="confirmation">
            <?php 
                $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
                if ($identifiantFormulaire == "create")
                {
                    require "php/filtreformulaire.php"; 
                }                        
            ?>
        </div>
        </form>
    </section>
</section>

