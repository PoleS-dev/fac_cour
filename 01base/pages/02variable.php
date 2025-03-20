<!-- 02variable.php est dans cour1/pages/.
Le fichier header.php est dans cour1/component/.
.. signifie "remonter d'un dossier" → ../component/header.php est le bon chemin. -->
<?php
include_once "../component/header.php";
?>

<h1>cour 2</h1>

<?php


//--------------------
// Variable : déclaration / affectation / types 
    //--------------------
    // 'Définition : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. En PHP on déclare une variable avec le signe $.<br>Par convention, un nom de variable commence par une lettre minuscule, puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début), ou un "_" (jamais au début car signification particulière en objet, ni à la fin).<br>';

    // 'gettype() est une fonction prédéfinie qui indique le type d\'une variable. comme typeof en js';

    $a = 127; // affectation de la valeur 127 à la variable $a

    echo gettype($a);  // gettype() est une fonction prédéfinie qui indique le type d'une variable. Ici il s'agit d'un integer (entier)



    $a = 'une chaîne de caractères';

    echo gettype($a);   // affiche string


    $b = '127';

    echo gettype($b); // affiche string car un nombre écrit entre quotes est interprété comme un string

    // '<br>';

    $a = true;  // ou false

    echo gettype($a);   // affiche boolean
 

    $a=123;
    $content="";
    $content .='<div style=" border:1px solid red ">';
    $content .="valeur de \$a  : $a <br>";
    $content .="</div>";
    echo $content;


    ?>










<!-- exo 10 de base -->
<?php


echo "<h2> EXERCICE </h2>";
//Afficher : 'bleu-blanc-rouge' (avec les tirets) en mettant chaque couleur dans une variable

$a = 'bleu';
$b = 'blanc';
$c = 'rouge';

echo "$a - $b - $c <br>";
echo $a . '- ' . $b . '-' . $c . '<br>';

	$couleur = 'bleu';
	$couleur .= '-blanc';
	$couleur .= '-rouge';

	echo $couleur;


