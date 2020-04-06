<section id='s3'>
    <div id="calendrier">
    

    <h2>Ajouter une date de concert</h2>
    <form  class="dateConcert" action="" method="post">
        <label for="lieu">Salle</label>
        <input type="text" name="lieu">
        <label for="date">Date de concert</label>
        <input type="date" name="date" id="">
        <label for="ville">Ville</label>
        <input type="text" name="ville">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse">
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