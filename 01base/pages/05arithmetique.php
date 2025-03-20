<?php
include_once "../component/header.php";
?>


<?php


echo "<h2> Opérateurs arithmétiques </h2>";

$a = 10;
$b = 2;

echo $a + $b . '<br>'; //12
echo $a - $b . '<br>'; //8
echo $a * $b . '<br>'; //20
echo $a / $b . '<hr>'; //5

//Opération et affectation :

$a += $b; // equivaut : $a = $a + $b
echo $a .'<br>'; //12

$a -= $b; // equivaut : $a = $a - $b
echo $a . '<br>'; //10

$a *= $b; // equivaut : $a = $a * $b
echo $a . '<br>'; //20

$a /= $b; // equivaut : $a = $a / $b
echo $a . '<br>'; //10


echo '<h2>Opération et affectation combinées</h2>';
//--------------------
$a = 10;
$b = 2;

$a += $b;    // équivaut à $a = $a + $b, $a vaut donc au final 12
$a -= $b;    // équivaut à $a = $a - $b, $a vaut donc au final 10
$a *= $b;    // équivaut à $a = $a * $b, $a vaut donc au final 20
$a /= $b;    // équivaut à $a = $a / $b, $a vaut donc au final 10
$a %= $b;    // équivaut à $a = $a % $b, $a vaut donc au final 0



// / Exemple d'utilisation : pratique pour faire des calculs de quantités dans les paniers d'achat (+= et -=)

echo '<h2>Incrémenter et décrémenter</h2>';
//--------------------
//------------------
// Incrémenter et décrémenter :
$i = 0;
echo "$i";
$i++;    // on ajoute 1 à $i qui vaut au final 1
$i--;    // on retire 1 à $i qui vaut au final 0

$i = 0;
$k = ++$i; // la variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k

echo "$k";


$i = 0;
$k = $i++;   // la variable $i est d'abord retournée, puis elle est incrémentée de 1
echo "$k";






// EXO

/** Exercice 1 : Opérateurs de base
 *  Objectif : calculer des variables avec les opérateurs de base
 * 
 * 1 . Déclarer deuxvariables $a et $b avec des valeurs de votre choix (int)
 * 
 * 2 . Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat
 */


/** Exercice 2 : Opération combinées
 *  Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
 */

/** Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
 *
 * 1 . Déclarer une variable $counter initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . Réinitialiser $counter à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

/** Exercice 4 : Incrémentation et décrémentation (postfixe = $variable++)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en postfixe
 * 
 * 1 . Déclarer une variable $num initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . réinitialiser $num à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

/** Exercice 5 : Calcul des Ages
 *  Objectif : Simuler un anniversaire
 * 
 * 1 . Déclarer une variable $age initialisée à votre age;
 * 
 * 2 . Simuler le passage d'une année en incrémentant votre âge de 1; (postfixe)
 * 
 * 3 . Remontez le temps et réduisez votre âge pour revenir à son état d'origine (postfixe)
 */

/** Exercice 6 : Calcul d'une moyenne
 *  Objectif : Calculer la moyenne de trois variables différentes
 * 
 * 1 . Déclarer 3 variables $note1,$note2,$note3 avec des valeurs entre 1 et 20 ;
 * 
 *  2 . Calculer la moyenne des trois notes en utilisant les opérateurs arithmétiques (afficher le résultat);
 * 
 * 3 . utiliser l'opérateur d'affectation combiné pour ajouter une nouvelle note à la moyenne et afficher le résultat
 */

/** Exercice 7 : Modulo
 *  Objectif : Calculer avec l'opérateur modulo
 * 
 * 1 . Déclarer une variable $total initialisée à 37;
 * 
 * 2 . Utiliser l'opérateur modulo pour vérifier si $total est pair ou impair
 * 
 * 3 . Afficher un message qui dit si $total est pair ou impair
 * 
 */

/** Exercice 8 : Panier d'achats 
 *  Objectif : Gérer les quantités d'un panier d'articles
 * 
 *  1 . Déclarer une variabler $quantity initialisée à 5;
 * 
 *  2 . L'utilisateur ajoute 3 articles à son panier, la quantité augmentera donc de 3;
 * 
 *  3 . L'utilisateur change d'avis sur 2 des articles et décide de les retirer
 * 
 * Afficher le résultat
 */

/** Exercice 9 : Conversion d'unités
 *  Objectif : Convertir des KM en Miles
 * 
 *  1 . Déclarer une variable $kilometres initialisée à 100;
 * 
 *  2 . Convertir les KM en miles (1km = environ 0.621371), le calcul sera donc $kilometres * 0.621371
 * 
 */

/** Exercice 10 : Jeu
 *  Objectif : Calculer les points dans un jeu en incrémentant et décrémentant
 * 
 *  1 . Déclarer une variable $score initialisée à 50;
 * 
 *  2 . Ajouter 10 points à $score;
 * 
 *  3 . Retirer 5 points à score
 */
