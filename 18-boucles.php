<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Les boucles</h1>

<h2>boucle <code>for</code></h2>
<pre>for (initialisation de boucle; condition de bouclage; itération) {
    // Code à executer
}</pre>

<!-- Exemple PHP --> 
<?php 
for ($i = 0 ; $i < 10 ; $i++)
{
    // Code à executer
    echo "Ligne n° : ". $i ."<br>\n";
}
?>

<div>a la sortie de la boucle $i vaut : <code><?= $i ?></code></div>
<?php unset($i); ?>

<hr>


<h2>boucle <code>while</code></h2>
<pre>
initialisation de boucle    
while (condition de bouclage) {
    // Code à executer
}
</pre>

<!-- Exemple PHP --> 
<?php 
$i=0;
while ($i < 10)
{
    // Code à executer
    echo "Ligne n° : ". $i ."<br>\n"; 

    // Iteration
    $i++;
}
?>

<!-- Exemple PHP --> 
<?php 
// $fruits = ["Pommes", "Poires", "Bananes"];
// while (count($fruits))
// {
//     // tour de boucle 1 : [ 0 : "Pommes", 1 : "Poires", 2: "Bananes"];
//     // tour de boucle 2 : [ 0 : "Poires", 1 : "Bananes"];
//     // tour de boucle 3 : [ 0 : "Bananes"];
//     echo $fruits[ 0 ]."<br>\n";
//     unset($fruits[0]);
// }
?>

<hr>

<!-- Exemple PHP --> 
<?php 
$isOk = true;
$a=0;
while ($isOk)
{
    // Code a executer
    echo "Ligne n° : ".$a."<br>\n";
    $a++;

    // Redefinir la condition de bouclage
    if ($a > 10)
    {
        $isOk = false;
    }
}
?>
<hr>


<h2>boucle <code>do..while</code></h2>
<pre>do {
    // code a executer
} while(condition de bouclage) </pre>

<!-- Exemple PHP -->
<code>While</code><br>
<?php 
$i=10;
while ($i < 10)
{
    // Code à executer
    echo "Ligne n° : ". $i ."<br>\n"; 

    // Iteration
    $i++;
}
?>


<hr>
<code>do while</code><br>
<?php 
$i=10;
do {
    // Code à executer
    echo "Ligne n° : ". $i ."<br>\n"; 

    // Iteration
    $i++;
} while ($i < 10)

?>

<hr>


<h2>boucle <code>foreach</code></h2>

<h3>Syntaxe 1</h3>
<pre>foreach( tableau as valeur de la ligne en cours d'itération )</pre>
<pre>foreach( $array as $value )</pre>
<pre>foreach( $fruits as $fruit )</pre>

<h3>Syntaxe 2</h3>
<pre>foreach( tableau as index/clé de la ligne en cours d'itération => valeur de la ligne en cours d'itération )</pre>
<pre>foreach( $array as $key => $value )</pre>
<pre>foreach( $fruits as $key => $fruit )</pre>


<hr>
<!-- Exemple PHP --> 
<?php $fruits = ["Pommes", "Poires", "Bananes"]; ?>
<pre><?php print_r($fruits) ?></pre>

<h3>Syntaxe 1</h3>
<?php 
foreach ($fruits as $fruit)
{
    echo "Ligne Fruit : ". $fruit ."<br>\n"; 
}
?>

<h3>Syntaxe 2</h3>
<?php 
foreach ($fruits as $key => $fruit)
{
    echo "Ligne n° : ".$key." -> Fruit : ". $fruit ."<br>\n"; 
}
?>

<h3>Syntaxe 2</h3>
<?php 
foreach ($fruits as $truc => $bidule)
{
    echo "Ligne n° : ".$truc." -> Fruit : ". $bidule ."<br>\n"; 
}
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
<br>
</body>
</html>