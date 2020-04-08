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

        require_once "connectionDb.php";
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

    require "connectionDb.php";      
    echo "Le message a bien été supprimé";
    }
}