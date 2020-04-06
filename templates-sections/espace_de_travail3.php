<?php require './php/functions3.php'?>
<section id='s3'>
    <div id="calendrier">
    
    </br>
    <h2>Ajouter une date de concert</h2>
    
    <form  id="createDate"" action="" method="post">
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
</section>   
</div>
<div class="confirmation">
            <?php 
            
                $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
                if ($identifiantFormulaire == "createDate")
                {
                    require "php/functions3.php"; 
                }                        
            ?>
        </div>
<script>
  
</script>

