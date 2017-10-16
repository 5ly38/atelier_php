<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=1;
$b=10;

/*
 * exo generer tab multiples 1a10
 */

for ($i=1;$i<=10;$i++)
{
    for ($j=1;$j<=10;$j++)
    {
        $tab[$i-1][$j-1]=$i*$j;
    };
}

var_dump($tab);

foreach($tab as $ligne)
{
    echo count($ligne);
    for($i=0;$i<count($ligne);$i++)
    {
        echo $ligne[$i]." ";
    }
    echo "\n";
}

/*
 * grille n10x10 asteriks et D aleatoire
 */