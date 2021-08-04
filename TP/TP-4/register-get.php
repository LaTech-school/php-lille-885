<?php 

// Manage errors
// --

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Variables Definition
// --

// Define Max and Min year value for the birthday[year] <select>
$max_year = date('Y');
$min_year = $max_year - 100;

// Define the month array
$a_month = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];




?>

<pre>GET : 
    <?php print_r($_GET) ?></pre>

<pre>POST : 
    <?php print_r($_POST) ?></pre>


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

                <form method="GET" novalidate>

                    <input type="hidden" name="crsf-token">

                    <!-- Firstname -->
                    <div class="mb-3">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
                        <!-- firstname=Bruce -->
                    </div>


                    <!-- Lastname -->
                    <div class="mb-3">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom">
                        <!-- lastname=Wayne -->
                    </div>


                    <!-- Birthday -->
                    <div class="mb-3">
                        <label>Date de naissance</label>

                        <div class="row">

                            <!-- Birthady : Day -->
                            <div class="col-sm-4">
                                <select name="birthday[day]" class="form-control">
                                    <option>Jour</option>
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
                                    <option>Mois</option>
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
                                    <option>Année</option>
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
                    </div>


                    <!-- Agree terms -->
                    <div class="mb-3">
                        <label>
                            <input type="checkbox" name="agreeTerms">
                            J'accepte les conditions générale d'utilisation.
                        </label>
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