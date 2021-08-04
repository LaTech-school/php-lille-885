<?php  
session_start();

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
    <title>Super Global</title>
</head>
<body>
    
    <h1>Super Global</h1>

<h2>Super Global GET</h2>
<pre>$_GET</pre>
<pre><?php print_r($_GET) ?></pre>

<h2>Super Global POST</h2>
<pre>$_POST</pre>
<pre><?php print_r($_POST) ?></pre>

<h2>Super Global SERVER</h2>
<pre>$_SERVER</pre>
<pre><?php print_r($_SERVER) ?></pre>

<h2>Super Global ENV</h2>
<pre>$_ENV</pre>
<pre><?php print_r($_ENV) ?></pre>

<h2>Super Global COOKIE</h2>
<pre>$_COOKIE</pre>
<pre><?php print_r($_COOKIE) ?></pre>

<h2>Super Global SESSION</h2>
<pre>$_SESSION</pre>
<pre><?php 

print_r($_SESSION) 
?></pre>

    
</body>
</html>