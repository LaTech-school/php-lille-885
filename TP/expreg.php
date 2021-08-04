<?php 

/**
 * Parcourir le tableau et afficher les fruit qui commence pas la lettre "p"
 * Afficher le nombre total de fruits et le nombre de fruits commencant par la lettre "p"
 * 
 * - Boucle
 * - Condition
 * - Fonctions native (comptage d'entrée de tableau, expression reguliere)
 * 
 * /^p/i        /^(p|P)/
 * 
 * /    Debut de l'expression reguliere
 * ^    Commence par... 
 * p    commence par P
 * /    Fin de l'expression réguliere
 * i    Insensible à la casse
 */

$fruits = [
    "Bananes",
    "Poires",
    "Kiwis",
    "Fraises",
    "Orange",
    "Noix",
    "Pommes",
    "Framboises",
];

$i = 0;
$a = 0;

// Parcourir le tableau = Faire une boucle sur le tableau
foreach ($fruits as $fruit) 
{
    // Affiche (= echo) les fruits commencant pas "P" (= condition Si commence par "P")
    // commene par "P" = Expression Reguliere
    if (preg_match("/^p/i", $fruit))
    {
        echo $fruit."<br>\n";
        $a++;
    }

    $i++;
}
?>

<hr>

<div>Fruits Total : <?= $i ?></div>
<div>Fruits Total : <?= count($fruits) ?></div>
<div>Fruits Total : <?= array_count_values($fruits) ?></div>
<div>Fruits commencant par P : <?= $a ?></div>
