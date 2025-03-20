<?php
require_once 'function.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

// je me connecte a la base de donnee
try {

    $db = "mysql:host=localhost;dbname=site_commerce"; // adresse et nom bas ede donnée
    $user = "root"; // user de connexion
    $password = "votre_mot_de_passe"; // mot de passe pour entretr dans base de donnée
   

    $pdo = new PDO(
        $db,
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les erreurs sous forme d'exceptions
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération des résultats
            PDO::ATTR_EMULATE_PREPARES => false // Sécurise les requêtes préparées
        ]
    );
    echo "ok";
} catch (Exception $e) {

    echo "Erreur base de donné : " . $exception->getMessage(), $Exception->getCode();
}
