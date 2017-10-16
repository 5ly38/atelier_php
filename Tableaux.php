<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$tab = array();
$tab2 = [];
$tab3 = [1,2,3,"tata",[1,2,3]];
$tab[0] = [1,2,3];
$tab[1] = ["a","b","c","d"];
echo count($tab) . "\n";
echo count($tab[1]) . " ";

$tab4 = ["comédie","horreur"];
$string = implode(", ", $tab4);
echo $string . "\n\n";
$string = "dracula***la soupe au choux***nosferatu";
$tab5 = explode("***",$string);
echo count($tab5);
var_dump($tab5);

/*
for $i = 1 to count($tab5)
        echo $tab5[$i] . "\n";
endfor;
*/

// intersect
$tabHorreur = ["dracula", "nosfertau", "scream", "le bal des vampires"];
$tabComedie = ["scream", "le bal des vampires", "la soupe aux choux", "profs", "sous doués"];
$tabDiff = array_intersect($tabHorreur,$tabComedie);
var_dump($tabDiff);
/*
for (count($tab5));
        echo $tab5[$i] . "\n";
endfor;
*/


$tabAsso = [ 
            "dracula"=>"copola",
            "Apocalypse"=>"copola"];

//ou

$tab["darcula"] = "copola";

var_dump ( array_keys($tab) );


$pays = ["jamaique"=>"kingston", "madagascar"=>"Antananarivo", "luxembourg"=>"luxembourg"];
var_dump ($pays);

echo "\n"."liste des pays triés"."\n";
$paysTries=array_keys($pays);
sort($paysTries);
var_dump($paysTries);

echo "\n"."Liste des capitales"."\n";
$capitalesAll=array_values($pays);
var_dump($capitalesAll);


echo "\n"."pays avec nom de capitale different"."\n";
$paysDiffCapitales = array_diff(array_keys($pays),$capitalesAll);
var_dump($paysDiffCapitales);
