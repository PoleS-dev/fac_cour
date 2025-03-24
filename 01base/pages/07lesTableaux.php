<?php
include_once "../utils.php";
// LES TABLEAUX (les array)***************************************


// il existe 3 type de tableau en php 

// les tableaux indexé : $tab=array("element1,elements2), ou $atb1=[index1,index2,2]
// les tableaux associatif $tab3=[
//  "user"=>"mimi"
//]
// les tableaux multidimentionnels 

// $tab4=[
//     "user"=>[
//         "name"=>"mimi"
//             ],
    
// ];

// declaration d'un array (methode 1)
$liste=array("element","element");
// methode 2

$liste2=["elments","elememtns"];



// voir le type de liste
 

echo "gettype de liste qui est un tableau    :  ";
echo gettype(($liste));// affiche le type array

echo "<br>";
// echo $liste;  // erreur de type "Array to string conversion" car on ne peut pas afficher directement un array avec un echo

echo "<br>";
echo "<br>";
echo "var dump de liste qui est un tableau    :  ";
var_dump($liste);



//****************************************************************** */

// print_r est plus synthétique que var_dump : il n'affiche pas le type des éléments contenus dans l'array;

// fonction d'affichage d'un print_r avec balise pre



echo "<pre>";
	var_dump( $liste );
	
echo "</pre>";

echo "<hr>";

echo "<pre>";
	print_r( $liste );

echo "</pre>";

//********************************************************************** */





// Autre méthode de déclaration d'un array :

$tab = ['France', 'Italie', 'Espagne', 'Portugal'];
$tab[] = 'Suisse'; // les [] vides permettent d\'ajouter une valeur à la fin de notre array</p>';
array_push($tab, "argentine","mexique");

echo "<br>";
echo " tets $tab";
debug($tab);

$tab1 = ['France', 'Italie', 'Espagne', 'Portugal'];
$tab1 = "suisse"; // si pas de crochet alors le tableau est remplacé par une chiane de carectère suisse

debug($tab1);


   // Afficher "Italie" à partir de notre tableau $tab :
echo $tab[1] . '<br>';


 //********************************************************************* */

 //LES TABLEAU ASSOCIATIFS

//  Un tableau associatif est un tableau dans lequel on choisit la dénomination des indices.


$couleur = array(
    'j' => 'jaune',
    'b' => 'bleu',
    'v' => 'vert'
);
// Pour accéder à un élément du tableau associatif :
    $couleur['b'] ;
// ajouter élements d'un tableau
$couleur['r'] = 'rouge'; // Ajoute la clé 'r' avec la valeur 'rouge'
$couleur += [
    'n' => 'noir',
    'o' => 'orange'
];

// Array
// (
//     [j] => jaune
//     [b] => bleu
//     [0] => vert
// )
// 🟥 PHP a ajouté "vert" avec une clé numérique automatique (0)





// array_key_exist() pour chercher une clé

$users = [
    "id" => 123,
    "name" => "Alice",
    "email" => null
];



  // prends comme arguments le clé recherché puis le tableau ou doit être cette clé
// array_key_exists() est une fonction prédéfinie en PHP qui vérifie si une clé existe dans un tableau, peu importe sa valeur.
// Ne pas confondre avec isset()
// isset($tableau['cle']) ➜ Vérifie si la clé existe ET n’est pas null

// array_key_exists('cle', $tableau) ➜ Vérifie juste si la clé existe, même si sa valeur est null
if (array_key_exists("email", $users)) {            // return true
    echo "La clé 'email' existe dans le tableau !";
} else {                                            // return false
    echo "La clé 'email' n'existe pas.";
}

//Retourne true si la clé existe, même si sa valeur est null.



 // Vérifier si une clé est définie et non null


 $utilisateur = [
    "id" => 123,
    "name" => "Alice",
    "email" => null
];

if (isset($utilisateur["email"])) {
    echo "La clé 'email' existe et a une valeur non nulle.";
} else {
    echo "La clé 'email' n'existe pas ou est null.";
}

//isset() retourne false si la clé n'existe pas ou si sa valeur est null.

//*************************************************************************** */




// modifier une clé 

// $fruits["fruit_b"] = $fruits["f2"];
// unset($fruits["f2"]);





// TABLEAU MILTIDIMENTIONNEL


// Nous parlons de tableau multidimensionnel quand un tableau est contenu dans un autre tableau. Chaque tableau représente une dimension


// création d'un array multidimensionnel :
$tab_multi = array(
    0 => array(
        'prenom' => 'Julien',
        'nom'    => 'Dupon',
            'telephone' => '0601020304'
        ),
        1 => array(
            'prenom' => 'Nicolas',
            'nom'    => 'Duran',
            'telephone' => '0601020304'
        ),
        2 => array(
            'prenom' => 'Pierre',
            'nom'    => 'Dulac'
            )
        ); // il est possible de choisir le nom des indices dans cet array multidimensionnel
        
      //  $fruits["f3"] = ["nom" => "kiwi", "couleur" => "vert"];    
        debug($tab_multi);
        
        // MESURER LA TAILLE D'UN TABLEAU
        
        
           echo 'Taille du tableau $couleur (tableau assioaciatif)  avec count(): ' . count($couleur) . '<br>';
        
        //**************************************************************************** */
        
        // Accéder à la valeur "Julien" dans cet array :
        
        echo $tab_multi[0]['prenom'];  // affiche Julien. Nous entrons d'abord à l'indice [0] de $tab_multi, pour ensuite aller à l'indice ['prenom'] dans le sous-tableau
        
        echo "<br/>";
        // Parcourir le tableau multidimensionnel avec une boucle for :
            
            for ($i = 0; $i < count($tab_multi); $i++) {
                echo $tab_multi[$i]['prenom'] . '<br>';
            }
            echo '<hr>';
            
            echo "<br/>";
            echo " je suis un test";
            
            
            
            
            
            
//EXO 

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les noms des films.
 *  Affichez chaque film sur une ligne séparée.
 */
/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau.
 *   Affichez le tableau modifié.
 */

/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */


/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */
/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */


/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */

/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */

/** Exercice 8 : Boucle foreach pour parcourir un tableau associatif
 *   Objectif : Utilisez une boucle foreach pour parcourir un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif avec des noms d'animaux et leurs bruits (par exemple, "chien" => "aboiement").
 *   Utilisez une boucle foreach pour afficher chaque animal et son bruit.
 */


/** Exercice 9 : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau.
 *   Affichez un message en fonction du résultat de la recherche.
 */


/** Exercice 10 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide : Regarder array_map() ou avec une boucle for
 */































    ?>






 



