<?php
// On force l'affichage des messages d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function sayHello($user)
{
    echo "Bonjour $user, comment vas-tu ?<br>\n";
}

function sayGoodbye($user)
{
    ?>
    Au revoir <?= $user ?><br>
    <?php
}

function auCarrePlusDeux($a)
{
    // $a * $a + 2;
    // echo $a * $a + 2; // Sortie PHP = resultat retourné au navigateur et inexploitable par la suite du programme
    return $a * $a + 2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction (part 2)</title>
</head>
<body>

    <h1>Fonction (part 2)</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi est facere adipisci obcaecati vero sequi suscipit voluptates error iusto, inventore, temporibus expedita ipsa! Reprehenderit consectetur ea commodi eius nihil!</p>
    <?php sayGoodbye("Bobby") ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi est facere adipisci obcaecati vero sequi suscipit voluptates error iusto, inventore, temporibus expedita ipsa! Reprehenderit consectetur ea commodi eius nihil!</p>
    <?php sayHello("John") ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi est facere adipisci obcaecati vero sequi suscipit voluptates error iusto, inventore, temporibus expedita ipsa! Reprehenderit consectetur ea commodi eius nihil!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi est facere adipisci obcaecati vero sequi suscipit voluptates error iusto, inventore, temporibus expedita ipsa! Reprehenderit consectetur ea commodi eius nihil!</p>
    <?php auCarrePlusDeux(10) ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi est facere adipisci obcaecati vero sequi suscipit voluptates error iusto, inventore, temporibus expedita ipsa! Reprehenderit consectetur ea commodi eius nihil!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi est facere adipisci obcaecati vero sequi suscipit voluptates error iusto, inventore, temporibus expedita ipsa! Reprehenderit consectetur ea commodi eius nihil!</p>

    <?php 
    $result = auCarrePlusDeux(10);
    // $result = 10 * 10 + 2;
    // $result = 100 * 100 + 2;
    // $result = 3 * 3 + 2;
    // $result = 6 * 6 + 2;
    // $result = 102;
    echo 6 + $result;
     ?>
    <br>
    <br>
     echo 6 + echo "102"
    <br>
     echo 6 + 102

    <pre><?php var_dump(auCarrePlusDeux(10)) ?></pre>

</body>
</html>