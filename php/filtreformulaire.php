<?php

require 'function.php';

// Traitement du formulaire de contact
if ($identifiantFormulaire == "create")
{
    //création d'un tableau associatif (clés et variables)
    $tabAssoColonneValeur = [
        "nom"            => maj(filtrer("nom")),
        "prenom"         => maj(filtrer("prenom")),
        "email"          => filtrer("email"),
        "raison"         => filtrer("raison"),
        "message"        => filtrer("message"),
    ];

    //Raccourci permentant de créer des variables à partir des clés du tableau associatif
    extract($tabAssoColonneValeur);

    //on vérifie que les varibles existes et ne sont pas vides
    if ($nom        != "" 
        && $prenom  != ""
        && $email   != ""
        && $raison  != ""
        && $message != "")
    { 
        //Preparation de la requête SQL
        $requeteSQL   =
<<<CODESQL

INSERT INTO OnePage
( nom, prenom, email, raison, message)
VALUES
( :nom, :prenom, :email, :raison, :message) 

CODESQL;

        //Feedback utilisateur 
        echo '<p style="color:white;">Votre message a bien été envoyé, nous vous recontacterons bientôt. Merci.</p>';
    }
    
    else {
        echo '<p style="color:white;">Veuillez remplir tous les champs obligatoire s\'il vous plait !</p>';
    }
}

//Traitement du formulaire de suppression de message
if ($identifiantFormulaire == "delete") 
{
    if (count($_REQUEST) > 0) {
        $tabAssoColonneValeur = [
            "id" => $_REQUEST["id"],
        ];
        //Preparation requête SQL
        $requeteSQL   =
<<<CODESQL

DELETE FROM OnePage WHERE id = :id

CODESQL;

    //Feedback administrateur
    echo "Le message a bien été supprimé";
    }
}

//Traitement du formulaire d'ajout d'une date
if ($identifiantFormulaire == "createDate")
{
    
    $tabAssoColonneValeur = [
        "lieu"      => maj(filtrer("lieu")),
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

        //Feedback administrateur
        echo "La date de concert a bien été enregistrée.";
    }
    
    else {
        echo "Veuillez remplir tous les champs obligatoire s'il vous plait !";
    }
}

//UPDATE D'UNE DATE DE CONCERT


//Envoie d'instruction à la bdd 
require "connectionDb.php";