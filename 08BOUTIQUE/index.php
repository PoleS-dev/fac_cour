<?php
// Debug des erreurs PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once(__DIR__ . '/config/bdd.php');
require_once(__DIR__ . '/config/function.php'); // Fonctions utiles

// 🔹 Inclure le header avant le routeur
require_once(__DIR__ . '/include/header.php');

// 🔹 Inclure le routeur (qui charge la page demandée)
require_once(__DIR__ . '/router.php');

// 🔹 Inclure le footer après le routeur
require_once(__DIR__ . '/include/footer.php');
?>