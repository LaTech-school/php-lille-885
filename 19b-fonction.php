<?php 

/**
 * Generate a random new password
 *
 * @param integer $length       The length of the password, Default 10
 * @param boolean $lower        Is lower case chars allowed, Default TRUE
 * @param boolean $upper        Is upper case chars allowed, Default TRUE
 * @param boolean $numeric      Is numerical chars allowed, Default TRUE
 * @param boolean $special      Is special chars allowed, Default TRUE
 * @param string $additional    A string of additionnal chars, Default null
 * @return string               The random password
 */
function generate_password(int $length = 10, bool $lower=true, bool $upper=true, bool $numeric=true, bool $special=true, string $additional=''): string
{
    // Characters Base
    $base_alpha   = "abcdefghijklmnopqrstuvwxyz";
    $base_upper   = strtoupper($base_alpha);
    $base_numeric = "0123456789";
    $base_special = "";

    // Base compilation
    $base = $lower ? $base_alpha : null;
    $base.= $upper ? $base_upper : null;
    $base.= $numeric ? $base_numeric : null;
    $base.= $special ? $base_special : null;
    $base.= $additional;

    $base = trim($base);
    $base_length = strlen($base);
    $random = '';

    for ($i = 0; $i < $length; $i++) 
    {
        $random .= $base[rand(0, $base_length - 1)];
    }

    return $random;

    // TODO: Aller manger
}
?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi soluta consequatur perspiciatis aliquam! Optio officia quasi quibusdam iure quas necessitatibus pariatur laboriosam delectus. Debitis eos eveniet veniam itaque vel.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi soluta consequatur perspiciatis aliquam! Optio officia quasi quibusdam iure quas necessitatibus pariatur laboriosam delectus. Debitis eos eveniet veniam itaque vel.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi soluta consequatur perspiciatis aliquam! Optio officia quasi quibusdam iure quas necessitatibus pariatur laboriosam delectus. Debitis eos eveniet veniam itaque vel.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi soluta consequatur perspiciatis aliquam! Optio officia quasi quibusdam iure quas necessitatibus pariatur laboriosam delectus. Debitis eos eveniet veniam itaque vel.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi soluta consequatur perspiciatis aliquam! Optio officia quasi quibusdam iure quas necessitatibus pariatur laboriosam delectus. Debitis eos eveniet veniam itaque vel.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi soluta consequatur perspiciatis aliquam! Optio officia quasi quibusdam iure quas necessitatibus pariatur laboriosam delectus. Debitis eos eveniet veniam itaque vel.</p>

<div>Password 1 : <?= generate_password(3, false) ?></div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quaerat! Nisi voluptate, architecto nostrum deserunt velit id nulla dolorem perspiciatis corrupti incidunt, beatae, non error at culpa odio suscipit facere!</p>
<div>Password 2 : <?= generate_password() ?></div>
<div>Password 3 : <?= generate_password() ?></div>
<div>Password 4 : <?= generate_password() ?></div>
<div>Password 5 : <?= generate_password() ?></div>


<div></div>