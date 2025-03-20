

<?php

include_once "../component/header.php";
?>

<h3>la concaténation</h3>
<?php
$hello="bonjour";
$everyone="tout le monde ";
echo "<p>".$hello. ' '.$everyone."</p>";
echo '$hello '.'<br>';
echo $hello.' '.$everyone;



?>
<h3>la concaténation lors des affectations</h3>
<!-- Concaténation lors de l'affectation, ici, on affecte la valeur '-Marie' sur la variable $pseudo MAIS cela S'AJOUTE SANS remplacer la valeur la valeur précédente grâce à l'opérateur '.=' -->
<?php 
$prenom="julien";
$prenom='jule';
echo $prenom."<br>";

$prenom="anne";
$prenom.=" julien";
echo $prenom;

$content="";
$a=123;
$content .='<div style=" border:1px solid red ">';
$content .="valeur de \$a  : $a <br>";
$content .="</div>";
echo $content;


?>

<?=
$triche;

$variable=123; // declaration + affectation
//Les doubles quotes (guillemets) permettent d'interpréter les varaibles ALORS que les quotes simples (apostrophes) n'interpètent pas les variables et renverra une chaine.

echo "$variable on voit la valeur de la variable";
echo '$variable';


// EXO 


/** Exercice 1 : Concaténation simple
 *  
 *  1 . Créer deux variables nom et prenom et affecter les valeurs de son choix
 * 
 *  2 . Concatener ces deux variables pour afficher une chaîne de caractère du nom et prénom complets avec echo
 */

/** Exercice 2 : Concatenation avec des phrases
 * 
 *  1 . Créer une variable phrase1 qui contiendra la chaine de caractères : Le ciel est
 * 
 *  2 . Créer une variable phrase2 qui contiendra la chaine de caractères : bleu aujourd'hui 
 * 
 *  3 . Concatener les deux variables en utilisant variable . variable et afficher le resultat avec echo
 */

/** Exercice 3 : Utilisation de virgules dans echo
 * 
 *  1 . Créer trois variables mot1 qui contiendra : J'aime, mot2 : le et mot3 : PHP
 * 
 *  2 . Utiliser echo pour afficher les trois mots séparés par des virgules plutot que par le point de concatenation ( . )
 * 
 */

/** Exercice 4 : Concatenation avec l'opérateur combiné ".="
 * 
 *  1 . Créer une variable texte avec la valeur : je vais
 * 
 *  2 . Utiliser l'opérateur combiné pour ajouter : à la plage
 * 
 *  3 . Afficher le resultat
 * 
 */

/** Exercice 5 : Echapper les guillemets
 * 
 *  1 . Créer une variable citation qui contiendra la chaine de caractères suivante : 'Il a dit : "Le PHP est fantastique"'
 * 
 *  2 . S'assurer que les guillemets dans la chaine sont correctement échappés pour éviter les erreurs de syntaxe
 * 
 *  3 . Afficher la citation
 * 
 */

/** Exercice 6 : Quotes simples et doubles
 * 
 *  1 . Créer une variable mot qui contiendra la chaine de caractères : PHP
 * 
 *  2 . Utiliser echo pour afficher cette variable à l'interieur d'une chaine entourée de quotes doubles (exemple : echo "le mot est : $mot")
 * 
 *  3 . Faire la même chose mais avec des quotes simple et observer la différence
 * 
 */


/** Exercice 7 : Utilisation de variables dans les chaines
 * 
 *  1 . Créer une variable nom avec une valeur.
 * 
 *  2 . Utiliser echo pour afficher une phrase qui dit : "Bonjour, (nom), bienvenue sur notre site!", en utilisant la variable nom à la place de (nom)
 */

/** Exercice 8 : Concaténation et guillemets
 * 
 *  1 . Créer une variable citation contenant la phrase suivante : 'la vie est belle'
 * 
 *  2 . Concatener cette phrase avec une deuxième chaine qui dit : ', surtout quand on code en PHP!'
 * 
 *  3 . Afficher la phrase complete en entourant le tout de guillemets doubles
 */

/** Exercice 9 : Concaténation et opérations mathématique
 * 
 *  1 . Créer deux variables a et b qui contiendront les nombres 5 et 10
 * 
 *  2 . Utiliser la concaténation pour afficher une phrase comme : "La somme de 5 et 10 est 15" (en remplaçant 5 et 10 par les variables et 15 par le calcul de ces deux variables)
 * 
 */