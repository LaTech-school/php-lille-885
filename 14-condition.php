<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Condition</h1>

    <h2>structure : if</h2>
    <p>SI ma CONDITION est vraie, alors j'execute le CODE A EXECUTER.</p>
    <pre>if (condition) { 
    /* code à executer */ 
}</pre>

    <!-- Exemple PHP -->
    <pre>
    <?php 
    if (42 > 45) {
        echo "Structure IF, la condition est vraie<br>";
    }
    ?>
    </pre>


    <hr>

    <h2>structure : if...else</h2>
    <pre>if (condition) {
    /* code à executer si la condition est réalisée */
} else {
    /* code à executer si la condition N'est PAS réalisée */
}
    </pre>

<!-- Exemple PHP -->
<pre>
<?php 
if (false) {
    echo "la condition est vraie<br>";
} else {
    echo "la condition est fausse<br>";
}
?>
</pre>

    <hr>

    <h2>structure : if...else if</h2>
    <pre>if (1ere condition) {
    /* code a executer si la 1ere codition est vrai */
} else if (2nd condition) {
    /* code a executer si la 2nd codition est vrai */
}
</pre>

    <hr>

    <h2>structure : if...else if...else</h2>
    <pre>if (1ere condition) {
    /* code a executer si la 1ere codition est vrai */
} else if (2nd condition) {
    /* code a executer si la 2nd codition est vrai */
} else {
    /* code a executer si NI la 1ere NI la 2nd conditions ne se réalise */
}
</pre>
    <hr>

    <h2>Opérateur ternaire</h2>
    <pre>condition ? "code si vrai" : "code si faux"</pre>

    <pre>
    <?php 
if (true) {
    echo "la condition est vraie<br>";
} else {
    echo "la condition est fausse<br>";
}
?>
</pre>
<pre>
<?php 
echo true ? "la condition est vraie<br>" : "la condition est fausse<br>";


// if (true) {
//     $a = 42;
// } else {
//     $a = null;
// }

// $a = true ? 42 : null;

?>
</pre>
    <hr>
    <hr>

    <h2>Commutateur</h2>

    <pre>swtich (condition)
        {
            case xxxx:
                /* code si condition vaux "xxxx" */
                break;
            case yyyy:
                /* code si condition vaux "yyyy" */
                break;
            
            default:
                /* code si condition ne vaux Ni "xxxx" NI "yyyy" */
        }
    </pre>





    <?php 
    $color = "red";
    ?>

    <pre>$color = <?= $color ?></pre>
    
    <pre>
    <?php
    if ($color == "red")
    {
        echo "On arrete le véhicule";
    }
    else if ($color == "orange")
    {
        echo "On ralenti pour s'arreter.. si on peu..";
    }
    else if ($color == "green") {
        echo "On passe";
    }
    else {
        echo "c'est la merde....";
    }
    ?>
    </pre>

    <pre>
    <?php
    switch ($color)
    {
        case "red":
            echo "On arrete le véhicule<br>";
            break;

        case "orange":
            echo "On ralenti pour s'arreter.. si on peu..<br>";
            break;

        case "green":
            echo "On passe<br>";
            break;
        
        default:
            echo "c'est la merde....<br>";

    }
    ?>
    </pre>



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