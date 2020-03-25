<?php

function constructCalendrier($nbJour)
{
    
    $i=0;
    
    $raw = $nbJour%10
    
    for($iRaw= 0; $iRaw < $raw; $iRaw++)
    {
        echo 
        <tr>
            if($i<$nbJour)
        
        </tr>;
    }

}

 $calendrier = constructCalendrier(30);
 echo $calendrier;

?>