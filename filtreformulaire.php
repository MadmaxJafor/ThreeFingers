<?php

function filtrer($name="id")
{
    $resultat = $_REQUEST[$name] ?? "";
    return $resultat;
}


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

echo "$nom, $prenom, $email, $raison, $message" ;
        require_once "fonctionrequeteSQL.php";

        echo "Votre message a bien été envoyé, nous vous recontacterons bientôt. Merci. ";
    }
    else
    {
        echo "Veuillez remplir tous les champs obligatoire s'il vous plait !";
    }

}
