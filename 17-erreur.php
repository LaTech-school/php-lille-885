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
    <title>Niveaux d'erreurs</title>
</head>
<body>

<h1>Niveaux d'erreurs</h1>


<h2>Notice</h2>

<p>Informe d'une erreur non problematique et continu l'execution du code.</p>
<?php 
// $fruit_a = "";
var_dump( $fruit_a );
?>

<p>Masque un message avec <code>@</code></p>
<?php var_dump(@$fruit_b) ?>



<h2>Warning</h2>
<p>Un Warning informe que quelque chose ne peux pas fonctionner correctement, sans que cela ne gêne la vie de l'application.</p>
<?php foreach ($fruits as $fruit) {} ?>


<h2>Fatal</h2>
<p>Impossible de continuer l'application</p>
<?php echo coucou(); ?>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi unde, nam recusandae quam omnis eos nobis cupiditate aspernatur earum harum, animi libero rem possimus voluptates officiis aliquam beatae, et accusantium aperiam? Illum aspernatur eos aliquid, accusantium reiciendis assumenda itaque repellat doloribus molestias illo iure vitae, inventore aut? Sunt minima fuga optio nesciunt odio explicabo recusandae dolore atque sit eligendi. Quam fugit, quo, rerum similique consectetur eos, necessitatibus veritatis dolorem quia doloribus in velit quidem mollitia inventore molestiae. Eveniet nihil ad rerum ut itaque provident inventore maiores maxime eum doloribus praesentium consequuntur soluta possimus ab, asperiores necessitatibus! Sapiente tempore provident expedita aliquid tempora consequuntur vero molestiae! Non deleniti vel, atque neque provident ab illo illum quaerat commodi eaque sit fugiat id debitis, optio ipsa tempora veritatis, minus consequuntur corrupti amet architecto odio nisi tenetur distinctio! Commodi aut nihil laudantium ut quo! Quaerat, optio? Recusandae, earum voluptatibus animi nesciunt cumque autem ut rem nostrum reiciendis a ipsam obcaecati consectetur ullam sed commodi ad voluptatum laborum perspiciatis. Expedita consequatur ad maxime eaque provident. Natus vel, nulla quas eos amet voluptatem distinctio pariatur esse perferendis minus sint quaerat explicabo debitis necessitatibus optio? In nemo dicta ipsam enim dolores aut atque voluptate! Quisquam, reiciendis eaque?</p>
    
</body>
</html>