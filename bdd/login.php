<?php 
// Test la methode de requete (GET ou POST)

// En methode POST

    // Recupération des données du formulaire
    // $email = xxxx
    // $plain_password = xxxxx


    // Requete 
    // $sql = "SELECT id, screenname, email, password FROM `user` WHERE email=:email";

    // $user = $xxx->execute()
    // Si $user = FALSE  => $email n'existe pas en BDD
    // Si $user !false (object)
        // Test de la correspondance des mots de passe saisie et enregistré en BDD
        // SI password_verify($user, $plain_password)
            // est true
                // on procede au login
                // $_SESSION['user'] = $user
            // est false
                // pas de correspondance entre les Mots de passe


// En methode GET, on affiche le formulaire de login
// - email 
// - password