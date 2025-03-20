<?php


include_once "./utils.php";


ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit();
}

print '<pre>';
print_r($_SESSION);
print '<pre>';


$language = $_SESSION['language'] ?? 'English'; // Utilisez l'anglais comme langue par défaut


echo translate("Welcome",$language)." ". $_SESSION['prenom'] . "<br>";
echo translate("text",$language) ." ". $_SESSION['language'];
?>

<p><a href="logout.php">Logout</a></p>

<p><a href="./language.php">change language</a></p>
