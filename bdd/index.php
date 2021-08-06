<?php 

// On force l'affichage des messages d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// RAPPEL SQL
// le concept C.R.U.D 
// --
// Create               INSERT INTO <table> (column1, column2) VALUES ("Value 1", "Value 2")
// Read / Retrieve      SELECT * FROM <table>  /  SElECT id, fullname FROM <table> WHERE column1="value"
// Update               UPDATE <table> SET column1="New value of 1", column2="New value of 2" WHERE id=42
// Delete               DELETE FROM <table> WHERE id=42


// Connexion à la base de données
require_once "dbconnect.php";


// Affiche la liste des utilisateurs de la table "user"
$sql = "SELECT id, email, fullname FROM user";

// $pdo->query execute la requete
// le résultat est stocké dans la variable $results
// $results reçoit soit objet si la requete est OK
// soit FALSE si la requete est en erreur
$results = $pdo->query($sql);

if ($results)
{
    // Affichage des données
    // while ($row = $results->fetch(PDO::FETCH_NUM)) // Retourne la ligne sous forme de tableau numérique
    // while ($row = $results->fetch(PDO::FETCH_ASSOC)) // Retourne la ligne sous forme de tableau associatif
    while ($user = $results->fetch(PDO::FETCH_OBJ)) // Retourne la ligne sous forme d'objet
    {
        // echo "<pre>";
        // print_r( $user );
        // echo "</pre>";
        echo $user->fullname;
        echo "<hr>";
    }
}
else 
{
    // Aucune données
}

var_dump( $pdo );echo "<br>";
var_dump( $sql );echo "<br>";
var_dump( $results );echo "<br>";
