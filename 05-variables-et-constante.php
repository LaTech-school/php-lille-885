<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Et Constantes</title>
</head>
<body>
    
    <h1>Variables</h1>

    <h2>Qu'est ce que c'est ?</h2>
    <p>C'est un espace mémoire défini par <strong>un nom</strong> et <strong>une valeur</strong></p>
    <p>
        Cet espasce prend la taille de ce qu'on lui passe en valeur.<br>
        ex: "hello" vaut 5 octets. <br>
        ex: "42" vaut 2 octets (42 est une chaine de 2 caractères).
    </p>

    <h2>Régle de nomage</h2>

    <p><strong>On déclare un variable</strong> avec le symbole <code>$</code> (dollar) suivi du nom de la variable.</p>
    <p>
        <strong>Le nom de variable DOIT / PEUT:</strong><br>
        <ul>
            <li>Commencer par un caractère APLPHABETIQUE ou UNDERSCOR (_)</li>
            <li>Contenir des caractère numérique (1234567890)</li>
            <li>Contenir un UNDERSCORE</li>
        </ul>
<pre>
$azertyu;
$_azert;
$AZE123;
$_0;
$_1;
</pre>
<?php
$azertyu;
$_azert;
$AZE123;
$ma_constante = "Valeur de la variable qui s'appelle ma_contante";
?>
    </p>
    <p>
        <strong>Le nom de variable NE DOIT PAS / NE PEUT PAS:</strong><br>
        <ul>
            <li>Commencer par un numériqe</li>
            <li>Contenir de caractère spéciaux ou mathématique</li>
        </ul>
<pre>
$123AZER;
$1234;
$§azer;
$aze+iuy;

</pre>
<?php
// $123AZER;
// $1234;
// $§azer;
// $aze+iuy;
?>
    </p>

    <p><strong>Bonnes Pratiques</strong></p>
    <p>
        <ul>
            <li>nom de variable en minuscule</li>
            <li>nom de variable en CamelCase / PascalCase <code>$maSpuperVariable;</code></li>
            <li>nom de variable en SnakeCase <code>$ma_super_variable;</code></li>
            <li>Donner un nom cours, pertinent, coherent <code>$age;</code></li>
        </ul>
    </p>


    <h2>Affectation de valeur</h2>

    <p>
        On affecte une valeur avec le symbole <code>=</code>. <br>
        ex: <code>$firstname = "John";</code>

        <!-- exemple PHP -->
        <?php $firstname = "John"; ?>
    </p>


    <h2>Appel d'une variable</h2>

    <pre>echo $firstname;</pre>

    <?php echo $firstname; ?>

    <hr>

    <h1>Constante</h1>

    <p><strong>Qu'est ce que c'est ?</strong></p>
    <p>C'est une variable... invariable... dite constante</p>

    <h2>déclarer une constante</h2>
    <p>2 possibilités</p>
    <ol>
        <li>
            Avec la fonction <code>define</code>:
            <pre>define("MA_CONSTANTE", "Valeur de ma constante")</pre>

            <!-- Exemple PHP -->
            <?php 
            define("MA_CONSTANTE", "Valeur de ma constante");
            ?>
        </li>
        <li>
            Avec le mot clé <code>const</code>:
            <pre>const MA_SUPER_CONSTANTE = "Valeur de ma super constante !";</pre>

            <!-- Exemple PHP -->
            <?php 
            const MA_SUPER_CONSTANTE = "Valeur de ma super constante !";
            ?>
        </li>
    </ol>

    <h2>Appel d'une constante</h2>
    <pre>echo MA_CONSTANTE;</pre>
    <pre>echo MA_SUPER_CONSTANTE;</pre>


    <!-- Exemple PHP -->
    <?php 
    echo MA_CONSTANTE;
    ?>
    <br>
    <?php 
    echo MA_SUPER_CONSTANTE;
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
</body>
</html>