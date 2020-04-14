<?php
function requete($tableName){

    $requeteSQL=
<<<CODESQL

    SELECT * FROM `$tableName`
    ORDER BY message DESC

CODESQL;
return $requeteSQL;
}