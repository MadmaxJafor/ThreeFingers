<?php

function filtrer($name="id")
{
    $resultat = $_REQUEST[$name] ?? "";
    return $resultat;
}

if ($identifiantFormulaire == "create")
{
    
    $tabAssoColonneValeur = [
        "lieu"      => filtrer("lieu"),
        "date"      => filtrer("date"),
        "ville"     => filtrer("ville"),
        "adresse"   => filtrer("adresse"),
    ];
    
    extract($tabAssoColonneValeur);

    if ($lieu != "" 
        && $date != ""
        && $ville != ""
        && $adresse != "")
    {
        $requeteSQL   =
<<<CODESQL

INSERT INTO concert
( lieu, date, ville, adresse)
VALUES
( :lieu, :date, :ville, :adresse) 

CODESQL;

echo "$lieu, $date, $ville, $adresse" ;
        require_once "fonctionrequeteSQL.php";

        echo "La date de concert a bien été ajoutée ";
    }
    else
    {
        echo "VEUILLEZ REMPLIR TOUS LES CHAMPS OBLIGATOIRES S'IL VOUS PLAIT !!!";
    }

}


?>