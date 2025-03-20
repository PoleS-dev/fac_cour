
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start(); // Nécessaire pour accéder à la session



    
    if (isset($_POST["logout"])) {
        // Détruire la session
        session_unset(); // Supprime toutes les variables de session
        session_destroy(); // Détruit la session
    
        // Rediriger l'utilisateur vers la page de connexion ou d'accueil
        header("Location: session0.php");
        exit();
    }

?>
