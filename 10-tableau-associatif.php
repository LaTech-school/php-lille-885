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
    <title>Tableau associatif</title>
</head>
<body>

    <h1>Tableau associatif</h1>

    <h2>déclarerun tableau associatif</h2>
    <pre></pre>

    <!-- Exemple PHP -->
    <?php 
    $mon_tableau = [
        'firstname' => "John",
        'lastname' => "Doe",
        'age' => 35,
    ];
    ?>

    Affichage du tableau
    <pre><?php print_r( $mon_tableau ) ?></pre>


    <h2>Accès à une donnée d'un tableau</h2>
    <pre>$mon_tableau['lastname'];</pre>

    <!-- Exemple PHP --> 
    <?php 
    // echo $mon_tableau; // retourne une Notice "Array to string conversion"
    echo $mon_tableau['age'];
    ?>


</body>
</html>