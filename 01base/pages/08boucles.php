
<?php


//LES BOUCLES

// Structures itératives : les boucles 
//Les boucles sont destinées à répéter des lignes de codes de façon automatique.


//**************************************************************************** */
//* Boucle while :

echo "<h2> while</h2>";
$i = 0;    // valeur de départ de la boucle
while ($i < 3) {   // tant que $i est inférieur à 3, nous entrons dans la boucle
    echo "$i---";  // affiche 0---1---2---
    $i++;          // on n'oublie pas d'incrémenter à chaque tour de boucle pour ne pas avoir une boucle infinie
} // Note : pas de ";" à la fin des structures itératives



//************************************************************************** */
//La boucle do..while 

echo "<h2> do while</h2>";

$j = 1;
do {
    $result=  $j++;
    echo "$result";
    echo 'Je fais un tour de boucle <br>';
} while ($j < 10);  

$j = 1;
do {
    $result=  $j++;
    echo "$result";
    echo 'Je fais un tour de boucle <br>';
} while ($j > 10);  // la condition renvoie false ici, pourtant la boucle a bien tourné une fois. Attention au ";" après le while de cette boucle


//**************************************************** */
// BOUCLE FOREACH 
echo "<h2> foreach</h2>";

$tab = ['azertyuiop', 'AZERTYUIOP', true, 2.09];
print_r($tab);

//La boucle foreach() fonctionne UNIQUEMENT sur les tableaux (ou objects). Elle retournera une erreur si l'on tente de l'exécuter sur une variable autre qu'un array (ou object)

//foreach() : permet de passer en revu les données du tableau

// le mot clé 'AS' est OBLIGATOIRE, il fait parti de la boucle foreach!

//Si il a deux variables (ici, $key et $value) en argument APRES le mot clé "AS", la première ($key) parcours la colonne des indices et la seconde ($value) parcours la colonne des valeurs du tableau.

$tableau = ['carotte', 'courgette', 'artichaud', 'poivron', 'citrouille', 'tomate'];

$tableau[] = 'epinard'; //Ici, on AJOUTE une valeur à notre tableau ($tableau)

foreach( $tableau as $key => $value ){

echo "L'indice : $key correspond à la valeur : $value <br>";
}




echo "<h2> exemple 1</h2>";
foreach ($tab as $valeur) { // le mot clé "as" fait partie de la structure syntaxique de la foreach : il est obligatoire. $valeur vient parcourir la colonne des valeurs de l'array. Notez qu'on peut l'appeler comme on veut : c'est sa place après "as" qui détermine qu'elle parcourt les valeurs.
    echo $valeur . '<br>';    // on affiche successivement les éléments du tableau à chaque tour de boucle. La foreach s'arrête automatiquement à la fin du tableau.
}

echo "<h2> exemple 2</h2>";
foreach ($tab as $indice => $valeur) {  // quand il y a 2 variables après "as", la première parcourt la colonne des indices (quelque soit son nom), et la seconde parcourt la colonne des valeurs (quelque soit son nom)
    echo $indice . ' correspond à ' . $valeur . '<br>';
}


echo "<h2> exemple 2</h2>";
//SI il  n'y a qu'UNE SEULE variable en argument APRES le mot clé "AS", alors cette vairable parcours la colonne des valeurs
foreach( $tableau as $valeur ){

echo "$valeur <br>";
}

// BOUCLER UN TABLEAU ASSOCIATIF 

$users=[
    "nom"=>"a",
    "email"=>"v",
    "age"=>25
];
 foreach($users as $cle => $valeur){
    echo "Clé : $cle et sa valeur est : $valeur <br>";
 }

 foreach($users as $valeur){
    echo " veleur du tableau : $valeur <br>";
 }


//-----------------------------------------------
//Autre syntaxe => On remplace l'accolade ouvrante par les ':' et l'accolade fermante par 'endforeach' 
foreach( $tableau as $legume ) :

echo $legume . ' / ';

endforeach;


//***************************************************************************************************************** */
echo "<h2>boucle for</h2>" ;
// BOUCLE FOR:
    
for ($i = 0; $i < 10; $i++) { // on trouve dans les parenthèses du for : valeur de départ; condition d'entrée dans la boucle; variation de $i (incrémentation décrémentation ou autre chose)
    echo $i . '<br>';  // affiche 0 à 9 en 10 tours
}

//***************************************************************************************************************** */
















//EXO 



//EXERCICE : Parcourir/afficher toutes les infos de mes tableaux imbriqués ($multi) : grâce aux boucles foreach :
    $multi = array( 
        0 => array( 'prenom'=>'marco', 'nom'=>'polo' ), 
        1 => array( 'prenom'=>'jean', 'nom'=>'jacques' ), 
        2 => array( 'prenom'=>'bob', 'nom'=>'dylan' ) 
    );


    foreach( $multi as $indice => $sous_tableau ){

        foreach( $sous_tableau as $cle => $valeur ){
    
            echo "$valeur <br>";
        }
    }
    
    echo "<hr>";
    //----------------------------------------------
    foreach( $multi as $sous_tableau ){
    
        foreach ($sous_tableau as $valeur ) {
    
            echo "$valeur <br>";
        }
    }


// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */


/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. S'assurer que le premier multiple est affiché même si la condition n'est pas remplie
 * 
 * 
 */


/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */

/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 
 */

/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */

/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */

/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * 
 *  Mettre un background vert sur les cellules contenant un nombre pair
 * 
 */

/** Exercice 9 : Generation d'un calendrier
 * 
 *  Objectif : Utiliser une boucle for pour générer un calendrier mensuel (de 1 à 31), puis y afficher les jours dans un tableau HTML, les week ends devront être en rouge
 * 
 */


/** Exercice 10 : Tableau de tableaux
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */
