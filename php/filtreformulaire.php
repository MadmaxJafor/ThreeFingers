<?php

require 'function.php';

// CREATE 
if ($identifiantFormulaire == "create")
{
    
    $tabAssoColonneValeur = [
        "nom"            => filtrer("nom"),
        "prenom"         => filtrer("prenom"),
        "email"          => filtrer("email"),
        "raison"         => filtrer("raison"),
        "message"        => filtrer("message"),
    ];
    
    extract($tabAssoColonneValeur);

    if ($nom != "" 
        && $prenom != ""
        && $email != ""
        && $raison != ""
        && $message != "")
    {
        $requeteSQL   =
<<<CODESQL

INSERT INTO OnePage
( nom, prenom, email, raison, message)
VALUES
( :nom, :prenom, :email, :raison, :message) 

CODESQL;

        
        echo "Votre message a bien été envoyé, nous vous recontacterons bientôt. Merci. ";
    }
    
    else {
        echo "Veuillez remplir tous les champs obligatoire s'il vous plait !";
    }
}

//DELETE
if ($identifiantFormulaire == "delete") {
    if (count($_REQUEST) > 0) {
        $tabAssoColonneValeur = [
            "id" => $_REQUEST["id"],
        ];
    
        $requeteSQL   =
<<<CODESQL

DELETE FROM OnePage WHERE id = :id

CODESQL;

          
    echo "Le message a bien été supprimé";
    }
}

//Code d'ajout d'une ligne dans la table concerts
if ($identifiantFormulaire == "createDate")
{
    
    $tabAssoColonneValeur = [
        "lieu"      => filtrer("lieu"),
        "date"      => filtrer("date"),
        "ville"     => filtrer("ville"),
        "adresse"   => filtrer("adresse"),
    ];
    
    extract($tabAssoColonneValeur);

    if ($lieu       != "" 
        && $date    != ""
        && $ville   != ""
        && $adresse != "")
    {
        $requeteSQL   =
<<<CODESQL

INSERT INTO concerts
( lieu, date, ville, adresse)
VALUES
( :lieu, :date, :ville, :adresse) 

CODESQL;

        
        echo "La date de concert a bien été enregistrée.";
    }
    
    else {
        echo "Veuillez remplir tous les champs obligatoire s'il vous plait !";
    }
}
require "connectionDb.php";