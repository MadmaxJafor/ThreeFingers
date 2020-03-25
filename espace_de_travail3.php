<h2>Espace de travail 3</h2>
Là où PG travail.


<div id="calendrier">
    <div id="mainDates">
        <h2>Nos dates de concert à venir :</h2>
        <img src="assets/img/calendrier.png" alt="calendrier" >
        <table>
            <tr>
                <td><?php
                $dM1 = date('d')-1 . date('/m/y');
                echo $dM1 ?></td>
                <td><?php echo date('d/m/y') ?></td>
                <td><?php
                $dP1 = date('d')+1 . date('/m/y');
                echo $dM1 ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            </tr>
            
        </table>
    </div>
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
</main>
    <footer>
        <p>Tous droits réservés</p>
    </footer>
    <script src="assets/js/app.js"></script>
</body>
</html>