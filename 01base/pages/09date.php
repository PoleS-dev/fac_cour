<?php

// gestion des dates
$date = new DateTime("2025-07-17");

$formatter = new IntlDateFormatter(
    'fr_FR', // Langue française
    IntlDateFormatter::FULL, // Format complet (jour + date)
    IntlDateFormatter::NONE  // Pas besoin de l'heure
);

echo $formatter->format($date);
echo '<p>' . date('Y-m-d') . '</p>';
// on peut changer l'ordre des paramètres ainsi que le séparateur

echo '<p>' . date('M/Y/d') . '</p>';

    // Le timestamp :
    // Le timestamp est le nombre de secondes écoulées entre une certaine date et le 1er janvier 1970 à 00:00:00. Cette date correspond à la création du système UNIX.
    // Ce système de timestamp est utilisé par de nombreux langages de programmation dont le PHP et le JavaScript. 

    echo '<p>'.time().'</p>';


    $dateJour = strtotime('27-09-2018'); // transforme la date exprimée en string en timestamp
    echo '<p>' . $dateJour . '</p>';  // affiche le timestamp du jour

    var_dump(strtotime('13-13-2018')); // ici retourne false car la date fournie n'est pas valide. Cette fonction permet donc de valider une date.
    $dateFormat = date('Y-m-d', $dateJour);

    echo $dateFormat; // Affiche "2018-09-27"
    echo '<p>' . $dateFormat . '</p>';
    $date = new DateTime('11-04-2017'); // $date est un objet date qui représente le 11-04-2017
    echo '<p>' . $date->format('Y-m-d') . '</p>'; // on peut formater cet objet date en appelant sa méthode format() et en lui indiquant les paramètres du format, ici 'Y-m-d'. Affiche '2017-04-11'.



    // Définir le fuseau horaire (optionnel mais recommandé)
date_default_timezone_set("Europe/Paris");

echo "<h2>📅 Manipulation des Dates en PHP</h2>";

// 1️⃣ Obtenir la date actuelle
echo "<strong>Date actuelle :</strong> " . date("Y-m-d") . "<br>";
echo "<strong>Date formatée :</strong> " . date("d/m/Y") . "<br>";

// 2️⃣ Obtenir l'heure actuelle
echo "<strong>Heure actuelle :</strong> " . date("H:i:s") . "<br>";

// 3️⃣ Obtenir le timestamp Unix
$timestamp = time();
echo "<strong>Timestamp actuel :</strong> $timestamp<br>";

// Convertir un timestamp en date lisible
echo "<strong>Timestamp en date :</strong> " . date("Y-m-d H:i:s", $timestamp) . "<br>";

// 4️⃣ Ajouter et soustraire des jours
echo "<strong>Demain :</strong> " . date("Y-m-d", strtotime("+1 day")) . "<br>";
echo "<strong>Il y a une semaine :</strong> " . date("Y-m-d", strtotime("-1 week")) . "<br>";
echo "<strong>Dans 3 mois :</strong> " . date("Y-m-d", strtotime("+3 months")) . "<br>";

// 5️⃣ Utiliser DateTime
$date = new DateTime();
echo "<strong>Date actuelle avec DateTime :</strong> " . $date->format("Y-m-d H:i:s") . "<br>";

// Ajouter 1 jour
$date->add(new DateInterval("P1D"));
echo "<strong>Ajout de 1 jour :</strong> " . $date->format("Y-m-d") . "<br>";

// Différence entre deux dates
$date1 = new DateTime("2024-03-01");
$date2 = new DateTime("2024-03-17");
$diff = $date1->diff($date2);
echo "<strong>Différence entre 01/03/2024 et 17/03/2024 :</strong> " . $diff->days . " jours<br>";

// 6️⃣ Vérifier si une date est valide
$mois = 2;
$jour = 30;
$annee = 2024;
if (checkdate($mois, $jour, $annee)) {
    echo "<strong>La date $jour/$mois/$annee est valide ✅</strong><br>";
} else {
    echo "<strong>La date $jour/$mois/$annee est invalide ❌</strong><br>";
}

// 7️⃣ Conversion entre date et timestamp
$dateString = "2024-12-25";
$timestamp = strtotime($dateString);
echo "<strong>Timestamp de $dateString :</strong> $timestamp<br>";
echo "<strong>Date à partir du timestamp :</strong> " . date("Y-m-d", $timestamp) . "<br>";

    ?>