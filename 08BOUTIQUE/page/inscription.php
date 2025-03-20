
<?php

//  echo "🔍 requestUri : " . $_SERVER['REQUEST_URI'] . "<br>";
//  echo "✅ uri après correction : " . $uri;
//  exit();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/bdd.php';
$affiche_formulaire = true;    // pour afficher le formulaire tant que le membre n'est pas inscrit



//----------------- TRAITEMENT ---------------------

// Traitement de $_POST :
// debug($_POST);

if ($_POST) {  // si le formulaire est envoyé
$pseudo=$_POST['pseudo'];
$mdp= $_POST['mdp'];

    // Validation du formulaire :
    if (!isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4 || strlen($_POST['pseudo']) > 20) $contenu .= '<div class="alert alert-danger">Le pseudo doit contenir entre 4 et 20 caractères.</div>';    

    if (!isset($_POST['mdp']) || strlen($_POST['mdp']) < 4 || strlen($_POST['mdp']) > 20) $contenu .= '<div class="alert alert-danger">Le mot de passe doit contenir entre 4 et 20 caractères.</div>';  


  

    // Si plus d'erreur sur le formulaire, on vérifie la disponibilité du pseudo avec d'inscrire le membre en BDD :
    if (empty($contenu)) {  // si $contenu est vide c'est qu'il n'y a plus de message d'erreur

        // Vérifier en BDD que le pseudo n'existe pas :
        $membre = executeRequete("SELECT * FROM membre WHERE pseudo = :pseudo", array(':pseudo' => $_POST['pseudo'])); // $membre contient un objet PDOStatement qui provient de la requête SQL  
        
        if ($membre->rowCount() > 0) {
            // si la requête retourne des lignes c'est que le pseudo existe en BDD :
            $contenu .= '<div class="alert alert-danger">Le pseudo existe déjà : veuillez en choisir un autre.</div>';    
        } else {
            try {
                // Tentative d'exécution de la requête
            // Le pseudo est disponible : on inscrit donc le membre en BDD
            executeRequete("INSERT INTO  membre (pseudo, mdp) VALUES (:pseudo, :mdp)", array(
                    ':pseudo'      => $_POST['pseudo'],
                    ':mdp'         => $_POST['mdp'],
                   
            ));
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

 // on stock les données du $_POST dans les cookies avec la fonction setcookie
 setcookie('pseudo', $pseudo, time() + (86400 * 30), "/08BOUTIQUE","");
 setcookie('mdp', $mdp, time() + (86400 * 30), "/08BOUTIQUE","");

        
 header('Location:'.ROOT);
 exit;
        }
    } // fin du if (empty($contenu))   
} // fin du if ($_POST)


?>
<?php 
echo "$contenu";
if($affiche_formulaire) : ?>
<p>Veuillez renseigner le formulaire pour vous inscrire.</p> 

<form method="post" action="">
     <label for="pseudo">Pseudo</label><br>
     <input type="text" value="" id="pseudo" name="pseudo"><br><br>

     <label for="mdp"  >Mot de passe</label><br>
     <input type="password"value=""  id="mdp" name="mdp"><br><br>

     <button type="submit" value="s'inscrire" name="inscription" class="btn">click</button>
</form> 

<?php

endif;