<h2> Structures conditionnelles (if/else) </h2>

// isset() et empty() : 2 fonctions interne de PHP_ROUND_HALF_DOWN

isset() : teste si cela existe (si c'est defini)
empty() : test si c'est vide (0 ou  non defini)

<?php


//if else

$a=10;
$b=5;
$c=2;
if($a > $b){
    echo "A =$a est bien sup à b=$b";
}else{
echo "A inferierur a $b";
}

if( $a > $b && $b > $c ){ //SI $a (10) est supérieur à $b (5) - ET QUE - $b (5) est supérieur $c (2)

	echo "Ook pour les DEUX conditions ! <br>";
}

if( $a === 8 || $b > $c  ){ //SI $a (10) est égal à 8 - OU QUE - $b (5) est supérieur $c (2)

	echo "Ook pour AU MOINS UNE des deux conditions ! <br>";
}


//-----
// L'opérateur AND écrit && :
if ($a > $b && $b > $c) {  // si $a est supérieur à $b ET que dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
    echo 'OK pour les 2 conditions <br>';
}

//-----
// L'opérateur OR écrit || :
if ($a === 9 || $b > $c) {  // si $a est égal à 9 (opérateur ==) OU que $b est supérieur à $c, alors on entre dans les accolades :
    echo 'OK pour au moins une des 2 conditions <br>';
}

//-----
// if ... elseif ... else :
$a = 10;
$b = 5;
$c = 2;

if ($a === 8) {
    echo '$a est égal à 8 <br>';
} elseif ($a != 10) {
    echo '$a est différent de 10 <br>';
} else {
    echo 'Les 2 conditions précédentes sont fausses <br>';
}

// Notes : on ne fait jamais suivre un else par une condition (sinon utiliser un elseif). On ne met pas de ";" à la fin d'une condition car il s'agit d'une structure. 



//-----
// L'opérateur XOR :
$question1 = 'mineur';
$question2 = 'je vote';  // exemple d'un questionnaire statistique

if ($question1 === 'mineur' XOR $question2 === 'je vote') {  // XOR ou OU exclusif : seulement une des 2 conditions doit être vraie (soit l'une ou soit l'autre). Si les 2 conditions sont vraies, alors l'expression complète est fausse : c'est le cas ici, on entre donc dans le else
    echo 'Vos réponses sont cohérentes <br>';
} else {
    echo 'Vos réponses ne sont pas cohérentes <br>';
}


//------
// Forme contractée de la condition, dite ternaire :
echo ($a === 10) ? '$a est égal à 10 <br>' : '$a est différent de 10 <br>';  // dans la ternaire, le "?" remplace if, et le ":" remplace else. Ici, si $a égale 10, je fais echo du 1er string, sinon du second

// ou encore :
$resultat = ($a === 10) ? '$a est égal à 10 <br>' : '$a est différent de 10 <br>';
echo $resultat;


//------
// Comparaison en == et en ===
$varA = 1;  // integer 
$varB = '1';  // string

if ($varA == $varB) echo '$varA est égal à $varB en valeur uniquement <br>';

if ($varA === $varB) {
    echo '$varA est égal à $varB en valeur ET en type <br>';
} else {
    echo '$varA est différent de $varB en valeur ou en type <br>';
}

/*
  = signe d'affectation
  == signe de comparaison en valeur
  === signe de comparaison en valeur et en type
*/


//------
// isset() et empty() :
// Définitions :
// isset() teste si c'est défini (si existe) et a une valeur non NULL
// empty() teste si c'est vide, c'est-à-dire 0, string vide '', NULL, false ou non défini

$var1 = 0;
$var2 = '';
echo empty($vajdj) ?  "  variable jamais defini dans le fichier ne donne pas d'erreur avec empty() car considéré comme vide  <br> " :  " pas vide ";
if (empty($var1)) echo '0, vide, NULL, false ou non défini <br>';  // ici la condition est vraie car $var1 est vide au sens de empty (voir la définition ci-dessus)
if (isset($var2)) echo 'existe et non NULL <br>';  // la condition est vraie car $var2 existe bien (et est non NULL)

// Si on ne déclare pas les variables $var1 et $var2 $, la condition avec empty reste vraie (car non définie), mais la condition avec isset devient fausse (car la variable ne serait pas définie)

// Exemples d'utilisation : empty pour vérifier qu'un champ de formulaire est vide. isset qu'une variable existe bien avant de l'utiliser.



//-------
// L'opérateur NOT écrit "!" :
$var3 = 'une chaîne de caractères';

if (!empty($var3)) echo '$var3 n\'est pas vide <br>';  // ! pour NOT. Il s'agit d'une négation qui transforme false en true et inversement (!false vaut true et !true vaut false). Littéralement on teste ici si $var3 N'est PAS vide.


//-------
// phpinfo();   // pour vérifier la version de PHP sur notre serveur local

// PHP7 : entrer une valeur dans une variable si elle existe :
$var1 = $variableInconnue ?? $varAutre ?? 'valeur par défaut';  //  l'opérateur "??" indique qu'il faut prendre la première variable ou valeur qui existe : $variableInconnue n'existant pas, on passe à $varAutre qui n'existe pas non plus, donc on prend la 'valeur par défaut' pour l'affecter à $var1
echo $var1; // affiche 'valeur par défaut'

// Utilisation : pour pré-remplir les values des formulaires quand l'internaute aura saisi et envoyé des valeurs.
// Voici comment l'opération se déroule :

// Si $variableInconnue existe et n'est pas null, sa valeur est assignée à $var1.

// Si $variableInconnue est null (ou n'existe pas), PHP vérifie ensuite $varAutre.

// Si $varAutre n'est pas null, sa valeur est assignée à $var1.

// Si $varAutre est également null, alors 'valeur par défaut' est assignée à $var1.





// EXO



/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */


/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 * 
 */


/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 */

/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */


/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */

/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */


/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 * 
 */


/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */

/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */


/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */
