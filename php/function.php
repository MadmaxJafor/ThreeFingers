<?php

function filtrer($name="id")
{
    $resultat = $_REQUEST[$name] ?? "";
    return $resultat;
}

function validateInput($str)
{
    return stripslashes(htmlspecialchars(trim($str)));
}

// METTRE UNE MAJUSCULE SUR LA 1ERE LETTRE
function maj($str){
    return ucfirst($str);
}
