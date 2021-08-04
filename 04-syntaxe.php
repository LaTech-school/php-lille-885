<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntaxe</title>
</head>
<body>
    
    <h1>Syntaxe</h1>

    <h2>Les balises PHP</h2>
    
    Balise d'ouverture
    <pre>&lt;?php</pre>
    
    Balise de fermeture<br>
    Il est impératif d'utiliser la balise de fermeture UNIQUEMENT SI le code qui suit n'est pas du PHP
    <pre>?&gt;</pre>
    
    <!-- Exemple en PHP -->
    <?php /* ici mon code PHP */ ?>

    Alternative
    <pre>&lt;?= "Chaine" ?&gt;</pre>

    revient à ecrire
    <pre>&lt;?php echo "Chaine" ?&gt;</pre>

    <!-- Exemple en PHP -->
    <?= "Chaine" ?>
    <?php echo "Chaine" ?>

</body>
</html>