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
    <title>Fonctions sur variables</title>
</head>
<body>
    
    <h1>Fonctions sur variables</h1>

    <h2>Vérifier l'existence de la variable</h2>

    <?php
    var_dump( isset($var) );
    ?>


    <h2>Détruire une variable</h2>

    <?php
    $var = "azerty";

    var_dump( $var ); echo "<br>";
    unset($var); // different de $var = null;

    var_dump( $var ); echo "<br>";
    echo "Var est détruit";
    ?>


    <h2>Connaître le type</h2>

    <?php
    $var = "azerty";
    echo gettype($var);
    echo "<br>";
    
    $var = 42;
    echo gettype($var);
    echo "<br>";

    $var = true;
    echo gettype($var);
    echo "<br>";
    
    $var = [];
    echo gettype($var);
    echo "<br>";
    
    ?>


    <h2>Verifier le type de la variable</h2>

    <?php 
    $var = "azerty";
    $var = 42;
    // ... 
    // is_[type]($var)
    $is_int = is_int( $var ) ? "Oui" : "Non";
    echo "Est ce que \$var est un entier ? " . $var;
    ?>


    <h2>Caster une variable</h2>

    <?php 
    $var = (string) 42;
    var_dump( $var);
    ?>


    <h2>Tester si la variable est vide</h2>

    <?php
    $var = "azerty";
    var_dump( empty($var) ); echo "<br>";

    $var = null;
    var_dump( empty($var) ); echo "<br>";

    $var = "";
    var_dump( empty($var) ); echo "<br>";

    $var = false;
    var_dump( empty($var) ); echo "<br>";

    $var = 0;
    var_dump( empty($var) ); echo "<br>";


    unset($var);
    var_dump( empty($var) ); echo "<br>";
    ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>