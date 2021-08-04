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
$max_year = date('Y');
$min_year = $max_year - 100;

// Define the month array
$a_month = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];

// Define valide genders
$availableGenders = ['M','F','N'];



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
    print_r($_POST);


    // Retrieve Form Data
    // --

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

    // Retrieve the user Gender
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    // var_dump($gender); echo "<br>";

    // Retrieve the Agree Terms
    $agreeTerms = isset($_POST['agreeTerms']) ? true : false;
    // var_dump($agreeTerms); echo "<br>";


    // Check Form Data
    // --


    // Create the $errors array
    $errors = [];


    // Check CSRF Token
    // SELECT id <table> WHERE token="$csrfToken"
    // SI id = Token est valide
    // Sinon = token invalide
    // array_push($errors, "token invalide") Si la donnée est invalide


    // Check firstname
    // if ( !preg_match("/[a-z]+/i", $firstname) )
    if ( !preg_match("/[a-z]{2,}/i", $firstname) )
    {
        // array_push($errors, "") Si la donnée est invalide
        array_push($errors, [
            'field' => "firstname",
            'message' => "Votre prénom n'est pas valide."
        ]);
    }

    // Check Lastname
    // array_push($errors, "") Si la donnée est invalide
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
    
    // Check Email
    // array_push($errors, "") Si la donnée est invalide
    
    // Check Password
    // array_push($errors, "") Si la donnée est invalide
    
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
    // else we display errors messages

    if ( empty($errors) )
    {
        // Save data
        echo "YOUPI !! On enregistre les données dans la BDD";
    }
    else 
    {
        // display errors messages
        echo "Booooo t'as fait des erreurs !<br><br>";


        echo "<pre>";
        print_r($errors);
        echo "</pre>";

        //  Affiche le message d'erreur de firstname
        foreach ($errors as $error)
        {
            if ($error['field'] == "firstname")
            {
                $error_firstname = $error['message'];
            }
            if ($error['field'] == "lastname")
            {
                $error_lastname = $error['message'];
            }
            if ($error['field'] == "gender")
            {
                $error_gender = $error['message'];
            }
            if ($error['field'] == "agreeTerms")
            {
                $error_agreeTerms = $error['message'];
            }
        }

    }

    
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

                    <input type="text" name="csrf-token" value="<?= $csrfToken ?>">

                    <!-- Firstname -->
                    <div class="mb-3">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
                        <p><?= isset($error_firstname) ? $error_firstname : null ?></p>
                        <!-- firstname=Bruce -->
                    </div>


                    <!-- Lastname -->
                    <div class="mb-3">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom">
                        <p><?= isset($error_lastname) ? $error_lastname : null ?></p>
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
                                    <option value="<?= $i ?>">
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
                                    <option value="<?= $i ?>">
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
                                    <option value="<?= $i ?>">
                                        <?= $i ?>
                                    </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        
                    </div>


                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>


                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                    </div>


                    <!-- Gender -->
                    <div class="mb-3">
                        <label>Genre</label>
                        <div class="gender-fields">
                            <label><input type="radio" name="gender" value="M"> Homme</label>
                            <label><input type="radio" name="gender" value="F"> Femme</label>
                            <label><input type="radio" name="gender" value="N"> Ne pas renseigner</label>
                        </div>
                        <p><?= isset($error_gender) ? $error_gender : null ?></p>
                    </div>


                    <!-- Agree terms -->
                    <div class="mb-3">
                        <label>
                            <input type="checkbox" name="agreeTerms">
                            J'accepte les conditions générale d'utilisation.
                        </label>
                        <p><?= isset($error_agreeTrems) ? $error_agreeTrems : null ?></p>
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