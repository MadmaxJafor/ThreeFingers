<?php

require 'function.php';

// TRAITEMENT DU FORMULAIRE DE CONTACT
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
        //PREPARATION REQUETE SQL
        $requeteSQL   =
<<<CODESQL

INSERT INTO OnePage
( nom, prenom, email, raison, message)
VALUES
( :nom, :prenom, :email, :raison, :message) 

CODESQL;

        //FEEDBACK UTILISATEUR
        echo "Votre message a bien été envoyé, nous vous recontacterons bientôt. Merci. ";
    }
    
    else {
        echo "Veuillez remplir tous les champs obligatoire s'il vous plait !";
    }
}

//TRAITEMENT DU FORMULAIRE DE SUPRESSION DE MESSAGE
if ($identifiantFormulaire == "delete") 
{
    if (count($_REQUEST) > 0) {
        $tabAssoColonneValeur = [
            "id" => $_REQUEST["id"],
        ];
        //PREPARATION REQUETE SQL   
        $requeteSQL   =
<<<CODESQL

DELETE FROM OnePage WHERE id = :id

CODESQL;

    //FEED BACK UTILISATEUR
    echo "Le message a bien été supprimé";
    }
}

//TRAITEMENT DU FORMULAIRE D'AJOU
if ($identifiantFormulaire == "createDate")
{
    
    $tabAssoColonneValeur = [
        "lieu"      => filtrer("lieu"),
        "date"      => filtrer("date"),
        "ville"     => maj(filtrer("ville")),
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

        //FEEDBACK UTILISATEUR
        echo "La date de concert a bien été enregistrée.";
    }
    
    else {
        echo "Veuillez remplir tous les champs obligatoire s'il vous plait !";
    }
}
//ENVOI DES FORMULAIRES
require "connectionDb.php";