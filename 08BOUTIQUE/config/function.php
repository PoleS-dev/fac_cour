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

debug( $base->prepare($requete));
   
    $resultat = $base->prepare($requete);  // on prépare la requête fournie lors de l'appel de la fonction
//     🛠️ PDO prépare la requête SQL :

// Elle est analysée par le moteur SQL.

// Les paramètres nommés (:pseudo, :mdp) sont laissés vides pour l’instant.

// Rien n’est encore envoyé à la base de données.

// C’est comme si tu disais :

// “Voici ma requête, je te la donne en mode brouillon pour qu’elle soit prête quand j'aurai les vraies données.”

// Et ça retourne un objet spécial : PDOStatement (une sorte de requête en attente).
    debug($resultat);
   $resultat->execute($param);  // on exécute en liant les marqueurs aux valeurs qui se trouvent dans l'array $param fourni lors de l'appel de la fonction
    debug($resultat);

// 🚀 Là, tu exécutes la requête en injectant les vraies valeurs aux paramètres nommés.

// PDO va :

// vérifier les types,

// protéger les données contre les attaques,

// et envoyer la requête complète à MySQL.

// Résultat : sécurité + performance
// ✅ Tu évites les injections SQL
// ✅ Tu peux réutiliser la même requête avec d'autres données
// ✅ Tu laisses PDO faire le sale boulot

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
