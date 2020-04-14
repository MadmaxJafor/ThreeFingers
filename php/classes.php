<?php

class requetesSQL{

static  function selectTable($tableName){

 $requeteSQL=
<<<CODESQL

    SELECT * FROM `$tableName`
    ORDER BY message DESC

CODESQL;
return $requeteSQL;
}

}