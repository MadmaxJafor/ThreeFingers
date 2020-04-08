<?php

function filtrer($name="id")
{
    $resultat = $_REQUEST[$name] ?? "";
    return $resultat;
}
