<?php 

// Manage errors
// --

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Generate CSRF Token
// --

// Generate the MD5 HASH
$csrfToken = md5(uniqid());

// Save tha hash in database
// INSERT INTO <table> (token) VAULES "$csrfToken"


// Variables Definition
// --

// Define Max and Min year value for the birthday[year] <select>
$max_year       = date('Y');  // TODO : Voir les date
$min_year       = $max_year - 100;

// Define the month array
$a_month        = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];

// Define valide genders
$availableGenders = ['M','F','N'];

// Create the $errors array
$errors         = [];

$firstname      = null;
$lastname       = null;
$birthday_day   = 0;
$birthday_month = 0;
$birthday_year  = 0;
$email          = null;
$gender         = null;
$agreeTerms     = false;


// From Treatment
// --

// INFO : Define the request method
// --
// $request_method = $_SERVER['REQUEST_METHOD'];
// echo $request_method . "<br>";


// Retrieve form data
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // INFO: Valeurs du tableau $_POST
    // Array (
    //     [crsf-token] => null,
    //     [firstname] => null
    //     [lastname] => null
    //     [birthday] => Array ( 
    //         [day] => null 
    //         [month] => null 
    //         [year] => null 
    //     ) 
    //     [email] => null
    //     [password] => null
    // )
    // print_r($_POST);


    // Retrieve Form Data
    // --

    // On controle que l'entré "xxxx" du tableau $_POST existe
    // Si oui, on affecte a $yyy la valeur de l'entré xxxx du tableau $_POST 
    // Sinon on affecte a $yyy la valeur null
    // 
    // Si null est affecté à $yyy cela veut dire le champ du formulaire <input name"xxxx"> n'existe pas... 
    // le champ du formulaire <input name"xxxx"> n'existe pas si l'utilisateur modifie la structure du formulaire
    // 
    // $yyy = isset($_POST['xxxx']) ? $_POST['xxxx'] : null;

    // Retrieve the CSRF Token
    $csrfToken = isset($_POST['csrf-token']) ? $_POST['csrf-token'] : null;
    // var_dump($csrfToken); echo "<br>";

    // Retrieve the user Firstname
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
    // var_dump($firstname); echo "<br>";

    // Retrieve the user Lastname
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    // var_dump($lastname); echo "<br>";
    
    // Retrieve the user Birthday
    $birthday_day = isset($_POST['birthday']['day']) ? $_POST['birthday']['day'] : null;
    $birthday_month = isset($_POST['birthday']['month']) ? $_POST['birthday']['month'] : null;
    $birthday_year = isset($_POST['birthday']['year']) ? $_POST['birthday']['year'] : null;
    // var_dump($birthday_day); echo "<br>";
    // var_dump($birthday_month); echo "<br>";
    // var_dump($birthday_year); echo "<br>";

    // Retrieve the user Email
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    // var_dump($email); echo "<br>";

    // Retrieve the user Password
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    // var_dump($password); echo "<br>";

    // Retrieve the user Confirmation Password
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;

    // Retrieve the user Gender
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    // var_dump($gender); echo "<br>";

    // Retrieve the Agree Terms
    $agreeTerms = isset($_POST['agreeTerms']) ? true : false;
    // var_dump($agreeTerms); echo "<br>";


    // Check Form Data
    // --

    // Check CSRF Token
    // SELECT id <table> WHERE token="$csrfToken"
    // SI id = Token est valide
    // Sinon = token invalide
    // array_push($errors, "token invalide") Si la donnée est invalide


    // Check firstname
    if (empty($firstname))
    {
        array_push($errors, [
            'field' => "firstname",
            'message' => "Le prénom est obligatoire."
        ]);
    }
    else if ( !preg_match("/[a-z]{2,}/i", $firstname) )
    // if ( !preg_match("/[a-z]+/i", $firstname) )
    {
        // array_push($errors, "") Si la donnée est invalide
        array_push($errors, [
            'field' => "firstname",
            'message' => "Votre prénom n'est pas valide."
        ]);
    }

    // Check Lastname
    if (empty($lastname))
    {
        array_push($errors, [
            'field' => "lastname",
            'message' => "Le nom est obligatoire."
        ]);
    }
    if ( !preg_match("/[a-z]{2,}/i", $lastname) )
    {
        // array_push($errors, "") Si la donnée est invalide
        array_push($errors, [
            'field' => "lastname",
            'message' => "Votre nom n'est pas valide."
        ]);
    }

    // Check Birthday
    // array_push($errors, "") Si la donnée est invalide
    // if ( 
    //     is_numeric($birthday_day) 
    //     && is_numeric($birthday_month) 
    //     && is_numeric($birthday_year) 
    //     && checkdate($birthday_month, $birthday_day, $birthday_year)
    // )
    // {}
    // else { /* code en cas d'erreur */}

    // if ( 
    //     !(is_numeric($birthday_day) 
    //     && is_numeric($birthday_month) 
    //     && is_numeric($birthday_year) 
    //     && checkdate($birthday_month, $birthday_day, $birthday_year))
    // )
    if ( 
        !is_numeric($birthday_day) 
        || !is_numeric($birthday_month) 
        || !is_numeric($birthday_year) 
        || !checkdate($birthday_month, $birthday_day, $birthday_year)
    )
    {
        array_push($errors, [
            'field' => "birthday",
            'message' => "La date de naissance n'est pas valide."
        ]);
    }
    
    // Check Email
    if ( empty($email) )
    {
        array_push($errors, [
            'field' => "email",
            'message' => "L'adresse email est obligatoire."
        ]);
    }
    else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        // array_push($errors, "") Si la donnée est invalide
        array_push($errors, [
            'field' => "email",
            'message' => "Votre adresse email n'est pas valide."
        ]);
    }
    
    // Check Password
    // array_push($errors, "") Si la donnée est invalide
    if (empty($password)) {
        array_push($errors, [
            'field' => "password",
            'message' => "Le mot de passe est obligatoire."
        ]);
    }
    // - 8 caracteres minimum
    else if (strlen($password) < 8)
    {
        array_push($errors, [
            'field' => "password",
            'message' => "Votre mot de passe doit contenir 8 caractères minimum."
        ]);
    }
    // - 20 caracteres minimum
    else if (strlen($password) > 20)
    {
        array_push($errors, [
            'field' => "password",
            'message' => "Votre mot de passe doit contenir 20 caractères maximum."
        ]);
    }
    // - Au moins un alpahbetique minuscule
    else if (!preg_match('@[a-z]+@', $password))
    {
        array_push($errors, [
            'field' => "password",
            'message' => "Votre mot de passe doit contenir au moins un caractère alphabétique en minuscule."
        ]);
    }
    // - Au moins un alpahbetique majuscule
    else if (!preg_match('@[A-Z]+@', $password))
    {
        array_push($errors, [
            'field' => "password",
            'message' => "Votre mot de passe doit contenir au moins un caractère alphabétique en majuscule."
        ]);
    }
    // - Au moins un numerique
    else if (!preg_match('@[0-9]+@', $password))
    {
        array_push($errors, [
            'field' => "password",
            'message' => "Votre mot de passe doit contenir au moins un caractère numérique."
        ]);
    }
    // - Au moins un special (@#&()[]()-_!.:=+,?%$£€)
    else if (!preg_match('@[^\w]@', $password))
    {
        array_push($errors, [
            'field' => "password",
            'message' => "Votre mot de passe doit contenir au moins un caractère spécial."
        ]);
    }
    
    // Check Comfirm Password
    if ($confirm_password != $password)
    {
        array_push($errors, [
            'field' => "confirm_password",
            'message' => "Les mots de passe ne sont pas identiques."
        ]);
    }

    // Check Gender
    // array_push($errors, "") Si la donnée est invalide
    // if ( !preg_match("/(M|F|N)/", $gender) )
    if ( !in_array($gender, $availableGenders) )
    {
        // array_push($errors, "") Si la donnée est invalide
        array_push($errors, [
            'field' => "gender",
            'message' => "Le genre n'est pas valide."
        ]);
    }
    
    // Check Agree Terms
    // array_push($errors, "") Si la donnée est invalide
    if ( !$agreeTerms )
    {
        // array_push($errors, "") Si la donnée est invalide
        array_push($errors, [
            'field' => "agreeTerms",
            'message' => "Vous devez accepter les CGU."
        ]);
    }



    // Save Data in DB
    // --

    // Check the $errors array
    // if $error is empty, we can save data
    // else we display errors messages.... DO NOTHING

    if ( empty($errors) )
    {
        // Save data
        echo "YOUPI !! On enregistre les données dans la BDD";
    }
}

/**
 * Display an error message for a specific field
 *
 * @param array $errors The errors array
 * @param string $field specify the field name
 * @return void
 */
function showError(array $errors, string $field)
{
    foreach ($errors as $error)
    {
        if ($error['field'] == $field)
        {
            return $error['message'];
        }
    }

    return null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        label {
            font-weight: bold;
        }
        .page-header {
            text-align: center;
        }
        .gender-fields {
            display: flex;
            justify-content: space-between;
        }
        .gender-fields label {
            display: inline-block;
        }
        .hide {
            display: none;
        }
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">

                <div class="page-header">
                    <h1 class="page-title">Inscription</h1>
                    <p>Créer votre nouveau compte</p>
                </div>

                <form method="POST" novalidate>

                    <input type="hidden" name="csrf-token" value="<?= $csrfToken ?>">

                    <!-- Firstname -->
                    <div class="mb-3">
                        <label class="hide" for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom" value="<?= $firstname ?>">
                        <p class="error"><?= showError($errors, 'firstname') ?></p>
                        <!-- firstname=Bruce -->
                    </div>


                    <!-- Lastname -->
                    <div class="mb-3">
                        <label class="hide" for="lastname">Nom</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom" value="<?= $lastname ?>">
                        <p class="error"><?= showError($errors, 'lastname') ?></p>
                        <!-- lastname=Wayne -->
                    </div>


                    <!-- Birthday -->
                    <div class="mb-3">
                        <label>Date de naissance</label>

                        <div class="row">

                            <!-- Birthady : Day -->
                            <div class="col-sm-4">
                                <select name="birthday[day]" class="form-control">
                                    <option value="">Jour</option>
                                    <!-- Days list by PHP -->
                                    <?php for ($i=1; $i<=31; $i++): ?>
                                    <option value="<?= $i ?>" <?= $birthday_day == $i ? "selected" : null ?>>
                                        <?= $i ?>
                                    </option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <!-- Birthady : Month -->
                            <div class="col-sm-4">
                                <select name="birthday[month]" class="form-control">
                                    <option value="">Mois</option>
                                    <!-- Month list by PHP -->
                                    <?php for ($i=1; $i<=12; $i++): ?>
                                    <option value="<?= $i ?>" <?= $birthday_month == $i ? "selected" : null ?>>
                                        <?= $a_month[$i-1] ?>
                                    </option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <!-- Birthady : Year -->
                            <div class="col-sm-4">
                                <select name="birthday[year]" class="form-control">
                                    <option value="">Année</option>
                                    <!-- Month list by PHP -->
                                    <?php for ($i=$max_year; $i>=$min_year; $i--): ?>
                                    <option value="<?= $i ?>" <?= $birthday_year == $i ? "selected" : null ?>>
                                        <?= $i ?>
                                    </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        
                        <p class="error"><?= showError($errors, 'birthday') ?></p>

                    </div>


                    <!-- Email -->
                    <div class="mb-3">
                        <label class="hide" for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= $email ?>">
                        <p class="error"><?= showError($errors, 'email') ?></p>

                    </div>


                    <!-- Password -->
                    <div class="mb-3">
                        <label class="hide" for="password">Nouveau mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Nouveau mot de passe">
                        <p class="error"><?= showError($errors, 'password') ?></p>

                    </div>

                    <!-- Verification du mot Password -->
                    <div class="mb-3">
                        <label class="hide" for="confirm_password">Ressaisir votre mot de passe</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Ressaisir votre mot de passe">
                        <p class="error"><?= showError($errors, 'confirm_password') ?></p>
                    </div>


                    <!-- Gender -->
                    <div class="mb-3">
                        <label class="hide">Genre</label>
                        <div class="gender-fields">
                            <label><input type="radio" name="gender" value="M" <?= $gender == "M" ? "checked" : null ?>> Homme</label>
                            <label><input type="radio" name="gender" value="F" <?= $gender == "F" ? "checked" : null ?>> Femme</label>
                            <label><input type="radio" name="gender" value="N" <?= $gender == "N" ? "checked" : null ?>> Ne pas renseigner</label>
                        </div>
                        <p class="error"><?= showError($errors, 'gender') ?></p>
                    </div>


                    <!-- Agree terms -->
                    <div class="mb-3">
                        <label>
                            <input type="checkbox" name="agreeTerms" <?= $agreeTerms ? "checked" : null ?>>
                            J'accepte les conditions générale d'utilisation.
                        </label>
                        <p class="error"><?= showError($errors, 'agreeTerms') ?></p>
                    </div>

                    <button type="submit" class="btn btn-success">Je m'inscrit</button>

                </form>

            </div>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>