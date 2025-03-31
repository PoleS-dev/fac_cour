<?php 

echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo '<pre>';
var_dump($_GET["article"]);
echo '</pre>';
echo '<pre>';
var_dump($_GET["prix"]);
echo '</pre>';
echo '<pre>';
var_dump($_GET["couleur"]);
echo '</pre>';

if(isset($_GET["article"]) && isset($_GET["prix"] ) && isset($_GET["couleur"])){

echo "les couleur est : " .$_GET["couleur"];

}else {
    // sinon, on met un message à l'internaute :
    echo '<p class="error">Ce produit n\'existe pas !</p>';
 }

//🔹 Bon réflexe en PHP
// Toujours utiliser htmlspecialchars() quand tu affiches des données venant de :

// $_GET

// $_POST

// $_SESSION

// Une base de données

// htmlspecialchars() est une fonction PHP qui protège l'affichage de texte dans une page HTML.

// Elle convertit les caractères spéciaux HTML en entités HTML, pour éviter que du code malveillant ne s’exécute.

// Quand utiliser htmlspecialchars() alors ?
// Seulement si tu affiches du contenu dynamique (par exemple : saisie d’un utilisateur, données de l’URL...) dans le HTML.


// ✅ urlencode() — Définition
// urlencode() sert à préparer une chaîne de texte à être utilisée dans une URL.
// Elle remplace les caractères spéciaux (espaces, accents, &, =, etc.) par un format compatible avec l’URL.

// 🔹 Pourquoi utiliser urlencode() ?
// Pour passer du texte dans une URL sans l’abîmer.

// Exemple sans encodage :

// php
// Copier
// echo '<a href="page.php?nom=Jean Pierre&ville=St-Étienne">Aller</a>';
// 👉 L’URL est cassée à cause de l’espace et des caractères spéciaux.

// 🔹 Avec urlencode()
// php
// Copier
// $nom = 'Jean Pierre';
// $ville = 'St-Étienne';

// $url = 'page.php?nom=' . urlencode($nom) . '&ville=' . urlencode($ville);
// echo '<a href="' . $url . '">Aller</a>';
// URL générée :

// perl
// Copier
// page.php?nom=Jean+Pierre&ville=St-%C3%89tienne
// ✅ Fonctionne parfaitement, l’URL est propre et sécurisée.

// 🧠 Différences htmlspecialchars() vs urlencode()
// Fonction	Utilité	Contexte
// htmlspecialchars()	Sécuriser l’affichage HTML	Quand tu affiches du texte
// urlencode()	Sécuriser une chaîne dans une URL	Quand tu construis une URL
