<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//definir 2 constantes car on va utiliser partout pour connexions
define("DB_CHAINE_CONNEXION","mysql:host=localhost;dbname=streaming");
define("DB_USER","root");
function dbAjouterFilm($titre,$anneeProd,$synopsis){
    $pdo= dbConnexion();
    $pdo->exec("INSERT INTO film (titre,annee_prod,synopsis) VALUES('$titre',$anneeProd,'$synopsis')");
}
function dbConnexion():PDO{ //:PDO pour typage retournera un objet PDO...
    try{
        $pdo = new PDO(DB_CHAINE_CONNEXION,DB_USER);
        return $pdo;
        
    } catch (Exception $ex) {
        die("ERREUR: ". $ex->getMessage()); // sortie du script et affichage exception erreur
    }
}

//sql command ds mysql
//INSERT INTO film (titre,annee_prod,synopsis) VALUES('kungfu panda',2000,'tataat')