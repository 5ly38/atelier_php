<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* calcul factorielle d'un nb*/
function factorielleNombre ($n)
{
    $result=$n;
    for($i=$n;$i>1;$i--)
    {
        $result=$result*($i-1); 
    }
    return $result;
    
}
$nb=10;
$number=factorielleNombre($nb);
echo $nb."! = ".$number."\n";

/* methode recusrive*/

function multipleNMoinsUn($n)
{
    return ($n*($n-1));
}

$factoriel=$nb;
for ($i=0;$i<$nb-1;$i++){
    $factoriel=multipleNMoinsUn($nb-$i);
}
echo $nb."! = ".$factoriel."\n";