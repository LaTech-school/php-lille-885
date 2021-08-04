<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operateur</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Opérateur</h1>

    <h2>Affectation</h2>
    <p>Opérateur d'affectation avec le symbole <code>=</code></p>
    <pre>$var = 5;</pre>

    <!-- Exemple PHP --> 
    <?php 
        $var = 5;
    ?>

    <hr>

    <h2>Opérateurs arithmétiques</h2>

    <h3>Addition</h3>
    <p>Symbole <code>+</code></p>
    <pre>
$a = 5;
$b = 2;
echo $a + $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
$b = 2;
echo $a + $b;
    ?></pre>

    <hr>

    <h3>Soustraction</h3>
    <p>Symbole <code>-</code></p>
    <pre>
$a = 5;
$b = 2;
echo $a - $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
$b = 2;
echo $a - $b;
    ?></pre>

    <hr>

    <h3>Multiplication</h3>
    <p>Symbole <code>*</code></p>
    <pre>
$a = 5;
$b = 2;
echo $a * $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
$b = 2;
echo $a * $b;
    ?></pre>

    <hr>

    <h3>Division</h3>
    <p>Symbole <code>/</code></p>
    <pre>
$a = 5;
$b = 2;
echo $a / $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
$b = 2;
echo $a / $b;
    ?></pre>

    <hr>

    <h3>Modulo</h3>
    <p>Symbole <code>%</code></p>
    <pre>
$a = 5;
$b = 2;
echo $a % $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
$b = 2;
echo $a % $b;
    ?></pre>

    <hr>

    <h3>Exponant (exposant / puissance)</h3>
    <p>Symbole <code>**</code></p>
    <pre>
$a = 5;
$b = 2;
echo $a ** $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
$b = 2;
echo $a ** $b;
    ?></pre>

    <hr>

    <h3>Identité</h3>
    <p>Symbole <code>+</code></p>
    <pre>
$a = "5";
var_dump( +$a );
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = "5";
var_dump( $a );
var_dump( +$a );
    ?></pre>

    <hr>

    <h3>Négation</h3>
    <p>Symbole <code>-</code></p>
    <pre>
$a = 5;
var_dump( -$a );
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
$a = 5;
var_dump( $a );
var_dump( -$a );
    ?></pre>


    <hr>
    <hr>


    <h2>Opérateurs de chaine</h2>

    <h3>concatenation</h3>
    <p>Symbole <code>.</code></p>
    <pre>
$a = "Hello ";
$b = "World";
echo $a . $b;
</pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = "Hello ";
    $b = "World";
    echo $a . $b;
    ?></pre>

    <hr>

    <h3>concatenation ET affectation</h3>
    <p>Symbole <code>.=</code></p>
    <pre>
    $a = "Hello ";
    $b = $a . "World";
    echo $b;
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = "Hello ";
    $b = $a . "World";
    echo $b;
    ?></pre>

    <hr>

    <pre>
    $a = "Hello ";
    $a.= "World";
    echo $a;
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = "Hello ";
    $a.= "World";
    echo $a;
    ?></pre>

    <hr>
    <hr>

    <h2>Opérateurs de comparaison</h2>

    <h3>Egalité (de valeur)</h3>
    <p>Symbole <code>==</code></p>
    <pre>
    $a = 42;
    $b = "42";
    var_dump( $a == $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 42;
    $b = "42";
    var_dump( $a == $b );
    ?></pre>

    <hr>

    <h3>Identique (valeur et type)</h3>
    <p>Symbole <code>===</code></p>
    <pre>
    $a = 42;
    $b = "42";
    var_dump( $a === $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 42;
    $b = "42";
    var_dump( $a === $b );
    ?></pre>

    <hr>

    <h3>Différent (valeur)</h3>
    <p>Symbole <code>!=</code></p>
    <pre>
    $a = 42;
    $b = "42";
    var_dump( $a != $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 42;
    $b = "42";
    var_dump( $a != $b );
    ?></pre>

    <hr>

    <h3>Strictement Différent (valeur ET le type)</h3>
    <p>Symbole <code>!=</code></p>
    <pre>
    $a = 42;
    $b = "42";
    var_dump( $a !== $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 42;
    $b = "42";
    var_dump( $a !== $b );
    ?></pre>

    <hr>
    <hr>

    <h3>Plus petit que</h3>
    <p>Symbole <code><</code></p>
    <pre>
    $a = 41;
    $b = 42;
    var_dump( $a < $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 41;
    $b = 42;
    var_dump( $a < $b );
    ?></pre>

    <hr>

    <h3>Plus grand que</h3>
    <p>Symbole <code>></code></p>
    <pre>
    $a = 43;
    $b = 42;
    var_dump( $a > $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 43;
    $b = 42;
    var_dump( $a > $b );
    ?></pre>

    <hr>

    <h3>Inférieur ou égale</h3>
    <p>Symbole <code><=</code></p>
    <pre>
    $a = 42;
    $b = 42;
    var_dump( $a <= $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 42;
    $b = 42;
    var_dump( $a <= $b );
    ?></pre>

    <hr>

    <h3>Supérieur ou égale</h3>
    <p>Symbole <code>>=</code></p>
    <p>Attention !! pas <code>=></code></p>
    <pre>
    $a = 42;
    $b = 42;
    var_dump( $a >= $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 42;
    $b = 42;
    var_dump( $a >= $b );
    ?></pre>

    <hr>

    <h3>Opérateur Combiné</h3>
    <p>Symbole <code><=></code></p>
    <pre>
    $a = 42;
    $b = 42;
    var_dump( $a <=> $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = 40;
    $b = 30;
    var_dump( $a <=> $b );
    ?></pre>

    <hr>
    <hr>


    <h2>Opérateurs logique</h2>
    <p>voir <a href="https://fr.wikipedia.org/wiki/Table_de_v%C3%A9rit%C3%A9" target="_blank">https://fr.wikipedia.org/wiki/Table_de_v%C3%A9rit%C3%A9</a></p>

    <h3>ET logique</h3>
    <p>Symbole <code>AND</code> ou <code>&&</code></p>
    <pre>
    $a = true;
    $b = false;
    var_dump( $a && $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = true;
    $b = false;
    var_dump( $a && $b );
    ?></pre>

    <hr>

    <h3>OU logique</h3>
    <p>Symbole <code>OR</code> ou <code>||</code></p>
    <pre>
    $a = false;
    $b = false;
    var_dump( $a || $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = false;
    $b = false;
    var_dump( $a || $b );
    ?></pre>

    <hr>

    <h3>OU eXclusif</h3>
    <p>Symbole <code>XOR</code></p>
    <pre>
    $a = false;
    $b = false;
    var_dump( $a XOR $b );
    </pre>

    <!-- Exemple PHP --> 
    <pre><?php 
    $a = false;
    $b = false;
    var_dump( $a XOR $b );
    ?></pre>

    <hr>
    <hr>
    <hr>



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