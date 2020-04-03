<?php

$pdo = new PDO("mysql:host=localhost;dbname=ThreeFingers;charset=utf8;", "root", "");

$pdoStatement = $pdo->prepare($requeteSQL);

$pdoStatement->execute($tabAssoColonneValeur);


