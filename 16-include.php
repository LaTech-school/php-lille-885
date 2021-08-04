<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Include et include_once</h1>

    <p><code>include</code> inclus un fichier à chaque appel.</p>
    <p><code>include_once</code> inclus un fichier une seulr fois si celui-ci n'est pas encore inclus.</p>

    <pre>include "inc/a.php";</pre>
    <pre>include_once "inc/a.php";</pre>
    <pre>include_once "inc/b.txt";</pre>

    <pre><?php 
    include "inc/a.php";
    include "inc/b.txt";
    include "inc/config.inc";

    echo $user;
    ?></pre>

    <h1>Require et require_once</h1>

    <p><code>require</code> inclus un fichier à chaque appel.</p>
    <p><code>require_once</code> inclus un fichier une seulr fois si celui-ci n'est pas encore inclus.</p>

    <pre>require "inc/a.php";</pre>
    <pre>require_once "inc/a.php";</pre>
    <pre>require_once "inc/b.txt";</pre>

    <pre><?php 
    require "inc/a.php";
    require "inc/b.txt";
    require "inc/config.inc";

    echo $user;
    ?></pre>


    
</body>
</html>