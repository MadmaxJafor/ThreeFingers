<section id='s3'>
    <div id="calendrier">
    
    </br>
    <h2>Ajouter une date de concert</h2>
    
    <form  class="dateConcert" action="" method="post">
        <label for="lieu">Salle</label>
        <input type="text" name="lieu" required>
        <label for="date">Date de concert</label>
        <input type="date" name="date" id="" required>
        <label for="ville">Ville</label>
        <input type="text" name="ville" required>
        <label for="adresse">Adresse</label>
        <textarea  cols="60" raws="6" name="adresse" required></textarea>
        <button type="submit">Enregistrer la date</button>
    </form>
</section>   
</div>

<script>
    var baliseConcert   = document.querySelector(".dateConcert");
    baliseAjax.addEventListener('submit', function(event){

event.preventDefault(); 

var formData = new FormData(baliseConcert);

                fetch('api-ajax.php', {
    method: 'POST',
    body: formData,
})
.then(function(reponseServeur){
    return reponseServeur.json();
})
.then(function(objetJSON) {
    console.log(objetJSON);
});
});
</script>

</main>
    <footer>
        <p>Tous droits réservés</p>
    </footer>
    
    <script src="js/app.js"></script>
</body>
</html>