
<?php
include_once "../component/header.php";
?>


<h1>cour 1</h1>


<?php
// Pour ouvrir un passage en PHP, on utilise la balise précédente
//--------------------
echo '<h2> Les balises PHP </h2>';
//--------------------
// Pour fermer un passage en PHP, on utilise la balise suivante :
?>


	<p>
		Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
		En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
	</p>

<!-- En dehors des balises d'ouverture et de fermeture du PHP, nous pouvons écrire du HTML quand on est dans un fichier ayant l'extension .php -->

<?php
// Vous n'êtes pas obligé de fermer un passage en PHP en fin de script

//--------------------
echo '<h2> Affichage </h2>';
//--------------------
echo '<pre><p>echo "Bonjour";</p></pre>';
echo 'Bonjour <br>';  // echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.
?>
<div class="texte">
	<p>
		echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.
	</p>
</div>
<?php
echo '<pre><p>print "Nous sommes mardi";</p></pre>';
print 'Nous sommes mardi <br>';   // print est une autre instruction d'affichage. Peu de différence avec echo.
?>



<?php
// Pour faire un commentaire sur une seule ligne

/*
   Pour faire un commentaire sur plusieurs lignes
*/

# Autre syntaxe de commentaire sur une seule ligne
?>

<!-- *************************************************** -->
<!-- faire exo dans base 1,2,3,4,5,7,8,9 -->
 <!-- *************************************************** -->



















 

<?php
$fruits = array("Pomme", "Banane", "Orange");
//Affiche le type et la valeur d’une variable (idéal pour inspecter des tableaux et objets).
var_dump($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

// echo et print
// Idéal pour afficher des chaînes de caractères simples.



$nom = "Jean";
echo "Bonjour, $nom"; // Bonjour, Jean
?>
<?php
$variable = "Hello, console!";
echo "<script>console.log(" . json_encode($variable) . ");</script>";
?>
