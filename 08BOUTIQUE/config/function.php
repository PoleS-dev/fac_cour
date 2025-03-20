<?php

define('BASE', '/courPHPfacundo/08BOUTIQUE');



function debug($param) {
    echo '<pre>';
        var_dump($param);
    echo '</pre>';
}

//-------------------- FONCTION DE REQUETE -------------------
function executeRequete($base,$requete, $param = []) {

    if (!empty($param)) {   // si j'ai bien reçu un array rempli, je peux faire la foreach dessus pour transformer les caractères spéciaux en entités HTML : 
        foreach($param as $indice => $valeur) {
            $param[$indice] = htmlspecialchars($valeur, ENT_QUOTES);  // pour éviter les injections CSS etJS            
        }
    }


    $resultat = $base->prepare($requete);  // on prépare la requête fournie lors de l'appel de la fonction
    $resultat->execute($param);  // on exécute en liant les marqueurs aux valeurs qui se trouvent dans l'array $param fourni lors de l'appel de la fonction

    return $resultat;  // on retourne l'objet PDOStatement à l'endroit où la fonction executeRequete est appelée

}


function redirectToRoute($route)
{

    header("Location :" .$route);
    exit;
}







// Constante qui contient le chemin du site :
define('ROOT','/courPHPfacundo/08BOUTIQUE'); // indiquer le dossier dans lequel se situe le site sans "localhost". Permet de créer des chemins absolus utilisés notamment dans le header du site inclus dans différents sous-dossiers : par conséquent les chemins relatifs vers les sources changent selon le sous-dossier, ce qui n'est pas les cas en chemin absolu.

// Variables d'affichage :
$contenu = '';
