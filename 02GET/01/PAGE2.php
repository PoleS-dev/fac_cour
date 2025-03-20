

<h1>PAGE 2</h1>
<a href="page1.php">retour sur la page 1</a>


<?php

// $_Get represente l'url il s'agit d'un superglobal et doit être en majiustcule sinon ne fontionne pas.
// et comme toutes les superglobales, il s'agit d'un array. Superglobale signifie que ce tableau est disponible dans tous les contextes du script, y compris dans l'espace local des fonctions. 
print '<pre>';
print_r($_GET);
print '</pre>';
var_dump($_GET);
if(!empty($_GET)){

    echo "parametre 1 " .$_GET['article'].'<br>';
    echo "parametre 2 " .$_GET['couleur'].'<br>';



}


