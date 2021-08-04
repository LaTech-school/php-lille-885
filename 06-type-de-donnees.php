<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type de données</title>
</head>
<body>
    
    <h1>Type de données</h1>


    <h2>Chaine de caractère (string)</h2>
    <p>On défine des chaines de caratères avec des simples quotes <code>'Ma Chaine'</code> ou des doubles quotes <code>"Ma Chaine"</code></p>

    <!-- Exemple PHP -->
    <?php 
    var_dump("Ceci est une chaine");
    ?>
    <br>

    <?php
    $a = "Bob";
    ?>
    <h3>Avec simple quote</h3>
    <?php echo 'Hello $a'; ?>

    <h3>Avec double quote</h3>
    <?php echo "Hello $a"; ?>
    <br>
    <?php echo "Hello \"$a\""; ?>
    <br>
    <?php echo 'aujourd\'hui'; ?>


    <hr>

    <h2>Nombre entier (integer)</h2>

    <!-- Exemple PHP -->
    <?php 
    var_dump(42);
    ?>
    <br>
    <?php 
    var_dump("42");
    ?>
    <br>
    <?php 
    var_dump('42');
    ?>

    <br>
    <br>

    <?php 
    $b = 42;
    $c = "26";
    ?>
    <?php 
    var_dump($b);
    ?>
    <br>
    <?php 
    var_dump($c);
    ?>
    <br>
    <br>
    <?php 
    var_dump($b + $c);
    ?>
    <br>
    <?php 
    var_dump($c + $b);
    ?>


    <hr>

    <h2>Nombre décimal (decimal / double)</h2>
    <!-- Exemple PHP -->
    <?php 
    var_dump(42.5);
    ?>


    <hr>

    <h2>Booléen (bool)</h2>
    <!-- Exemple PHP -->
    <?php 
    var_dump(true);
    var_dump(false);
    ?>


    <hr>

    <h2>Tableau (array)</h2>
    <p>Un tableau est une collection de données</p>

    <!-- Exemple PHP -->
    <?php 
    var_dump( array() );
    var_dump( [] );
    ?>


    <hr>

    <h2>Objet (object)</h2>
    <p>Un objet est une collection de données</p>

    <!-- Exemple PHP -->
    <?php 
    var_dump( (object) array() );
    var_dump( new stdClass );
    ?>


    <hr>

    <h2>NULL</h2>

    <!-- Exemple PHP -->
    NULL : <?php var_dump( NULL );?><br>
    "" : <?php var_dump( "" );?><br>
    false : <?php var_dump( false );?><br>
    0 : <?php var_dump( 0 );?><br>


    <hr>

    <h2>Fonction (function)</h2>
    <!-- Exemple PHP -->
    <?php 
    var_dump( function(){} ); // Type Closure
    ?>


    <hr>
    <h2>Resource</h2>

    <p>Stocker les informations d'une ressource tel la connexion à une BDD</p>



    <hr>
    <hr>

    <?php 

    $d;

    var_dump( $d );
    echo "<br>";

    $d = "Hello World";

    var_dump( $d );
    echo "<br>";

    $d = null;
    var_dump( $d );

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
<br>
<br>

</body>
</html>