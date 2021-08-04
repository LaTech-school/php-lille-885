<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Numerique</title>
</head>
<body>
    
    <h1>Tableau Numerique</h1>

    <h2>Déclarer un tableau numérique</h2>
    <pre>$mon_tableau = ["Pommes", "Poires", "Bananes"];</pre>

    <!-- Exemple PHP --> 
    <?php 
    $mon_tableau = [
        /* 0 */ "Pommes", 
        /* 1 */ "Poires", 
        /* 2 */ "Bananes",
    ];
    // $mon_tableau = array();
    ?>

    Affichage du tableau
    <pre><?php print_r( $mon_tableau ) ?></pre>


    <h2>Accès à une donnée d'un tableau</h2>
    <pre>$mon_tableau[1];</pre>

    <!-- Exemple PHP --> 
    <?php 
    // echo $mon_tableau; // retourne une Notice "Array to string conversion"
    echo $mon_tableau[1];
    ?>


    <h2>Forcer les indexes</h2>
    <pre>$mon_tableau = ["Pommes", 42 => "Poires", "Bananes"];</pre>

    <!-- Exemple PHP --> 
    <?php 
    $mon_tableau = ["Pommes", 42 => "Poires", "Bananes"];
    ?>

    Affichage du tableau
    <pre><?php print_r( $mon_tableau ) ?></pre>


    <h2>Fonction pour connaitre la longueur du tableau</h2>
    <pre> count($mon_tableau) </pre>

    <pre><?php echo count( $mon_tableau ) ?></pre>
</body>
</html>