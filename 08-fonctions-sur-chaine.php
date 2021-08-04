<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions sur chaine</title>
</head>
<body>
    
    <h1>Fonctions sur chaine</h1>

    <?php $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, atque?"; ?>

    <h2>Mettre en MAJUSCULE</h2>

    <?php 
    $text = strtoupper($text);
    echo $text 
    ?>



    <h2>Mettre en miniscule</h2>

    <?php 
    $text = strtolower($text);
    echo $text 
    ?>



    <h2>Mettre en la premiere lettre en Majuscule</h2>

    <?php 
    $text = ucfirst($text);
    echo $text 
    ?>



    <h2>Mettre en la premiere lettre de chaque mot en Majuscule</h2>

    <?php 
    $text = ucwords($text);
    echo $text 
    ?>


    <h2>Convertir la chaine en tableau</h2>

    <?php 
    $text = explode(" ", $text);
    var_dump( $text )
    ?>
    <pre><?php print_r( $text ) ?></pre>
    <pre><?php echo implode("--", $text ) ?></pre>
    



<br>
<br>
<br>
<br>
<br>
<br>
<br>


</body>
</html>