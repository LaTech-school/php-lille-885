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
include "dbconnect.php";

// Affiche la liste des utilisateurs de la table "user"

var_dump($db_user);
