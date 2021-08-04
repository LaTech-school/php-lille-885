<?php
// On force l'affichage des messages d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/**
 * Créer un fonction pour afficher les phrases
 * 
 * - Bonjour Bob
 * - Bonjour John
 * 
 * Utiliser des noms de fonction et variable logique et pertinant
 */

function sayHello(string $people)
{
    echo "Bonjour ".$people."<br>";
}

sayHello("Bob");
sayHello("John");
sayHello("Francis");
sayHello("Machin");
sayHello("Bidule");
sayHello("Truc");


/**
 * Créer une fonction qui affiche la liste des albums du tableau $albums
 * 
 * Liste des albums
 * 
 * - HomeWork
 * - 18
 * - Highway to Hell
 * - Moon Safari
 */

// Creation du tableau $albums
$albums_a = [
    "HomeWork",
    "18",
    "Highway to Hell",
    "Moon Safari",
];

// Fonction d'affichage de la liste des albums
function showAlbums( array $albums_b )
{
    //  Boucle sur la liste des albums
    foreach ($albums_b as $album)
    {
        echo $album."<br>\n";
    }
}

showAlbums($albums_a);