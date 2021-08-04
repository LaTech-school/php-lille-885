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
    <title>Fonctions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Fonctions</h1>
    <p>Une fonction est une collection d'instructions.</p>
    <p>c'est une <strong>Procédure nommée</strong></p>
    <p>Il y a trois types de fonctions</p>
    <ol>
        <li>Les fonctions <strong>Natives</strong> écritent dans le code source de PHP.</li>
        <li>Les fonctions <strong>Utilisateur</strong> définient par les développeurs, ajoutent des fonction au code source de PHP.</li>
        <li>Les fonctions <strong>Anonymes</strong></li>
    </ol>


    <h2>Déclarer une fonction</h2>
    <p>avec le mot clé <code>function</code>, suivi du nom de la fonction, puis de parentheses et enfin du code a executer entre accolades.</p>
    <pre>function myFunctionName() {
    // Code à exécuter.
}</pre>

    <!-- Exemple PHP -->
    <?php
    function myFunctionName() {
        echo "Je suis une chaine dans une fonction<br>\n";
    }
    ?>

    <h2>Appel de la fonction</h2>
    <p>on utilise le nom de la fonction suivi de parentheses</p>
    <pre>myFunctionName();</pre>

    <!-- Exemple PHP -->
    <?php 
    myFunctionName();
    ?>

    <script>
    // Exemple de fonction anonyme
    let btn = document.querySeletor('.btn');
    btn.addEventListener('click', function(){
        alert('yep');
    });
    </script>


    <h2>Fonction avec paramètres et paramètres facultatif</h2>
    <pre>function addition() {
    // Code a exécuter
    echo $a + $b;
}</pre>

    <!-- Exemple PHP --> 
    <?php

    // $a = 5; // /$a
    // $b = 2; // /$b

    function addition($a, $b) 
    {
        // $a = 10; // addition/$a
        // $b = 6;  // addition/$b
        echo "$a + $b = ". ($a + $b) ."<br>";
    }

    addition(10, 5);
    addition(10, 50);
    addition(33, 2);

    ?>

    <hr>

    <?php 
    function multiply($a, $b=1, $c=2)
    {
        echo "$a * $b = ". ($a * $b) ."<br>";
    }

    multiply(10, 5);
    multiply(10, 1, 4);
    multiply(33, 2);
    ?>
    
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