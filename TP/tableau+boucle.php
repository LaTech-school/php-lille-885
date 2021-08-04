<?php
// On force l'affichage des messages d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php 

/**
 * Creer un tableau contenant les personnage suivant:
 *  - Bruce Wayne (Batman)
 *  - Clark Kent (Superman)
 *  - Tony Stark (Ironman)
 * 
 * Le tableau possède 3 colonnes (Firstname, Lastname, Heroname)
 * 
 * Boucler sur le tableau pour obtenir l'affichage des phrases:
 *  - Bruce Wayne est Batman
 *  - Clark Kent est Superman
 *  - Tony Stark est Ironman
 */

// Creation du tableau
$heroes = [

    // Ajouter Batman
    [
        'firstname' => "Bruce",
        'lastname'  => "Wayne",
        'heroname'  => "Batman",
    ],

    // Ajouter Superman
    [
        'firstname' => "Clark",
        'lastname'  => "Kent",
        'heroname'  => "Superman",
    ],

    // Ajouter Bob L'eponge
    [
        'firstname' => "Bob",
        'lastname'  => "Sponge",
    ],

    // Ajouter Ironman
    [
        'firstname' => "Tony",
        'lastname'  => "Stark",
        'heroname'  => "Ironman",
    ],

    // Ajouter Bob L'eponge
    [
        'firstname' => "Francis",
        'lastname'  => "Cabrel",
    ],

    // Ajouter Bob L'eponge
    [
        'firstname' => "Lagaf",
        'heroname'  => "Megagaf",
    ],
    
    // "yep"
];
?>


<!--
<pre><?php print_r($heroes)  ?></pre>
--> 


<?php
// Boucle sur le tableau $heroes
foreach ($heroes as $hero)
{
    // afficher la phrase "$firstname $lastname est $heroname"
    ?>

    <pre><?php print_r( $hero ) ?></pre>

    <?php

    // Chaine de sortie
    $output = "";

    // Injection du Firstname
    if (isset($hero['firstname']))
    {
        $output.= $hero['firstname'];
    }

    // Injection du Lastname
    if (isset($hero['lastname']))
    {
        if (!empty($output)) $output.= " ";
        $output.= $hero['lastname'];
    } 

    // Injection du Heroname
    if (isset($hero['heroname']))
    {
        if (!empty($output)) $output.= " ";
        $output.= "est ".$hero['heroname'];
    }

    echo "Phrase : " . $output.".<br>\n";

    // echo $hero['firstname']." ".$hero['lastname']." est ".$hero['heroname']."<br>\n";
}

?>
    
</body>
</html>