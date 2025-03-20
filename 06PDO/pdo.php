<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// PDO

// PDO pour PHP Data Objects, définit une interface pour accéder à une base de données depuis le PHP.

function debug($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}


// ****************connexion************************* 


$db="mysql:host=localhost;dbname=societe";// adresse et nom bas ede donnée
$user="root"; // user de connexion
$password="votre_mot_de_passe"; // mot de passe pour entretr dans base de donnée

// new PDO  est une instance de la classe PDO
try{
    $pdo= new PDO( $db,$user,$password,
     [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les erreurs sous forme d'exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération des résultats
        PDO::ATTR_EMULATE_PREPARES => false // Sécurise les requêtes préparées
    ]);

}catch(PDOException $exception){

    echo "Erreur base de donné : " . $exception->getMessage(), $Exception->getCode( ) ; // Capture et affiche l'erreur proprement

}

// *********************method exec()******************

debug(get_class_methods($pdo));
debug(get_object_vars($pdo));
//L'opérateur -> en PHP est utilisé pour accéder aux propriétés et méthodes d'un objet.

// exec() est utilisée pour la formulation de requêtes ne retournant pas de résultat : INSERT, DELETE, UPDATE.
   
$resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('daniel', 'Baugrand', 'm', 'informatique', '2016-03-08', 500)");

/* Valeur de retour :
    - Succès : renvoie le nombre de lignes affectées par la requête
    - Echec  : retourne false
*/

echo "Nombre de lignes affectées par le INSERT : $resultat <br>";
echo 'Dernier id généré par la BDD : ' . $pdo->lastInsertId();


 //$resultat = $pdo->exec("DELETE FROM employes WHERE prenom = 'daniel' ");
echo "<br> Nombre de lignes affectées par le DELETE : $resultat <br>";


// ********************method query() et difference avec fetch*************************

$result=$pdo->query("SELECT * FROM employes WHERE prenom ='daniel'");

debug($pdo);
debug($result);

$employe = $result->fetch(PDO::FETCH_ASSOC); 
// la méthode fetch() avec le paramètre PDO::FETCH_ASSOC permet de transformer l'objet $result en un ARRAY associatif dont les indices correspondent aux noms des champs (*) de la requête SQL
var_dump($employe);
debug($employe);

$resulta = $pdo->query("SELECT * FROM employes");
$donnees = $resulta->fetchAll(PDO::FETCH_ASSOC);  // retourne toutes les lignes de résultats dans un tableau multidimensionnel : on a 1 sous-array associatif à chaque indice numérique de $donnees. On peut mettre aussi FETCH_NUM pour des sous-arrays indicés numériquement, ou fetchAll() pour des sous-arrays numériques ET associatifs

debug($donnees);

    // debug($employe);  // $employe correspond à chaque sous-array associatif contenu dans $donnees
    foreach ($donnees as $employe) {
    echo '<div>';
    echo '<p>' . $employe['id'] . '</p>';
    echo '<p>' . $employe['nom'] . '</p>';
    echo '<p>' . $employe['prenom'] . '</p>';
    echo '</div><hr>';
}




