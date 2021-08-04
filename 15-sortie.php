<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortie PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Sortie PHP</h1>

    <h2>echo</h2>

    <p>Faire une sortie vers le navigateur</p>
    <pre>&lt;?php echo "Hello World"; ?&gt;</pre>
    <pre><?php echo "Hello World"; ?></pre>

    alternative
    <pre>&lt;?= "Hello World"; ?&gt;</pre>
    <pre><?= "Hello World"; ?></pre>

    <hr>

    <h2>print</h2>

    <p>Faire une sortie vers le navigateur</p>
    <pre>&lt;?php print "Hello World"; ?&gt;</pre>
    <pre><?php print "Hello World"; ?></pre>

    <hr>

    <h2>echo vs print</h2>

    <pre>
<?php
// var_dump( echo "Hello" );
var_dump( print "Hello" );
?>
    </pre>


    <h2>var_dump</h2>
    <p>Debug une donnée</p>
    <p>Retourne la valeur et le type d'une donnée</p>
    <pre>var_dump( true )</pre>
    <pre><?php var_dump( true ) ?></pre>
    <pre>var_dump( "Hello Bobby" )</pre>
    <pre><?php var_dump( "Hello Bobby" ) ?></pre>
    <pre>var_dump( ["Pommes", "Poires"] )</pre>
    <pre><?php var_dump( ["Pommes", "Poires"] ) ?></pre>
    <?php var_dump( ["Pommes", "Poires"] ) ?>


    <h2>print_r</h2>
    <pre><?php print_r( ["Pommes", "Poires"] ) ?></pre>
    <?php print_r( ["Pommes", "Poires"] ) ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>