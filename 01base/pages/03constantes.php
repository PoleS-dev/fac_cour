
<?php
include_once "../component/header.php";
?>

<?php

echo "<h2> Les constantes et constantes magiques </h2>";
//Une constante : est un espace nommé qui permet de conserver une valeur SAUF QUE comme son nom l'indique, la valeur sera CONSTANTE !

define( 'CAPITALE', 'Paris' );
//Par convention : une constante se déclare toujours en MAJUSUCLE !

//define( arg1, arg2 );
	//arg1 : nom de la constante
	//arg2 : valeur de la constante

echo CAPITALE . '<br>'; //Paris
//---------------------------------------
//Constante magiques :

echo __LINE__ . '<br>'; //Affiche le numéro de la ligne (ici, 122)
echo __FILE__ . '<br>'; //chemin complet vers le fichier courant
echo __DIR__ . '<br>'; //chemin complet vers le dossier courant (01-cours)

