<?php

//on connecte PHP à SQL : 
//1ere partie: partie DSN : driver, host, nom bdd, encodage caractères
//2eme partie: nom user mysql
//3eme partie: mdp user mysql

$pdo = new PDO("mysql:host=localhost;dbname=ThreeFingers;charset=utf8;", "root", "");

//on envoie la requete préparée, pdoStatement est un container qui englobe les résultats de la requête SQL 
$pdoStatement = $pdo->prepare($requeteSQL);

//on fournit les données extérieurs à part 
$pdoStatement->execute($tabAssoColonneValeur);


//appeler PDO::prepare() et PDOStatement::execute() aident à prévenir les attaques par injection SQL en éliminant le besoin de protéger les paramètres manuellement.