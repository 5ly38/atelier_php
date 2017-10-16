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
