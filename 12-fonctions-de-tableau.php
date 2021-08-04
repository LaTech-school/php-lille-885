<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions de tableau</title>
</head>
<body>
    
    <h1>Fonctions de tableau</h1>

    <h2>Ajouter des entrées au tableau</h2>

    <ol>
        <li>On déclare un tableau (vide ou non)</li>
        <li>on utilise <code>array_push()</code> pour ajouter une entrée</li>
    </ol>
    <pre>
$fruits = [];
array_push($fruits, "kiwis");
</pre>

<hr>

    <pre>
$fruits = ["Pommes"];
$fruits[] = "Poires";
$fruits[42] = "Bananes";
array_push($fruits, "Kiwis");
$fruits[4] = "Fraises";
// $fruits[] = "Tomates";
    </pre>

    <!-- Exemple PHP -->
    <?php 
    $fruits = ["Pommes"];
    $fruits[] = "Poires";
    $fruits[42] = "Bananes";
    
    $fruits[4] = "Fraises";
    // $fruits[] = "Tomates";
    ?>

    affichage du tableau 
    <pre><?php print_r($fruits) ?></pre>


    <h2>La dernière entrée (ligne) du tableau</h2>
    <pre>end($fruits)</pre>

    affichage  
    <pre><?php echo end($fruits) ?></pre>



    <h2>La premiere entrée (ligne) du tableau</h2>
    <pre>$fruits[0]</pre>

    affichage  
    <pre><?php echo $fruits[0] ?></pre>


    <h2>Connaitre le nombre d'entrée du tableau</h2>
    <pre>count($fruits)</pre>

    affichage  
    <pre><?php echo count($fruits) ?></pre>


    <h2>Supprime la premiere entrée du tableau</h2>
    <pre>array_shift($fruits);</pre>

    <!-- Exemple PHP -->
    <?php 
    array_shift($fruits);
    ?>

    affichage du tableau 
    <pre><?php print_r($fruits) ?></pre>



    <h2>Supprime un index du tableau</h2>

    <pre>
$fruits = ["Pommes"];
$fruits[] = "Poires";
$fruits[42] = "Bananes";
array_push($fruits, "Kiwis");
$fruits[4] = "Fraises";
$fruits[] = "Tomates";
    </pre>

    <pre>unset($fruits[42]);</pre>

    <!-- Exemple PHP -->
    <?php 
    $fruits = ["Pommes"];
    $fruits[] = "Poires";
    $fruits[42] = "Bananes";
    
    $fruits[4] = "Fraises";
    $fruits[] = "Tomates";
    ?>

    affichage du tableau 
    <pre><?php print_r($fruits) ?></pre>

    <?php unset($fruits[42]) ?>

    affichage du tableau sans l'index 42
    <pre><?php print_r($fruits) ?></pre>

</body>
</html>