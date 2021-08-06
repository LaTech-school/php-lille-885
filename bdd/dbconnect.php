<?php 
/**
 * dbconnect.php 
 * 
 * Build database connexion by PDO
 */

// Inclure les données de connection à la BDD
include "./config.php";

// Definition de la DSN (Data Source Name) PDO
// mysql:host=127.0.0.1;port=3306;dbname=cours_php_bdd;charset=utf8
// --

// Type / Driver de la base de données
$db_dsn = $db_type .":";

// Serveur / Hôte de basse de données
$db_dsn.= "host=". $db_host .";";

// Port de base de données
$db_dsn.= "port=". $db_port .";";

// Nom du schema de la base de données
$db_dsn.= "dbname=". $db_schema .";";

// Jeu de caracteres utilisé par PDO pour injecter les données en base de données
$db_dsn.= "charset=". $db_charset .";";



try {
    // Instance de PDO / Creation de la connexion à la base de données
    $pdo = new PDO($db_dsn, $db_user, $db_password);
}
catch(\Exception $e) {
    die($e->getMessage());
    // die("Ooops, la connexion à la base de données à échouée!");
}