    <section id='s3'>
        <div id="calendrier">
            <div id="mainDates">
                <h2>Nos dates de concert à venir :</h2>
                <img src="assets/img/calendrier.png" alt="calendrier" >
<?php
    require_once("php/functions3.php");
    calendrier(date("n"),date("Y"));
?>
            <div id="sideDates">
                <h3>Dates passées</h3>
                <ul>
                    <li>4 Février -Le Moulin, Marseille</li>
                    <li>19 Février - Le Korrigan, Lyunes</li>
                    <li>20 Mars -L'Usine, Istres</li>
                </ul>
                <h3>Aujourd'hui</h3>
                <ul>
                    <li>Désolé, aucun concert prévus ce jour.</li>
                </ul>
                <h3>Dates à venir</h3>
                <ul>
                    <li>27 Mars - Le Coco Velten, Marseille</li>
                    <li>19 Janvier - Brasserie Communale, Marseille</li>
                </ul>
                
            </div>
        </div>
    </section>   
</main>
    <footer>
        <p>Tous droits réservés</p>
    </footer>
    <script src="js/app.js3"></script>
    <script src="js/app.js"></script>
</body>
</html>