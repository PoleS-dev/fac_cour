<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/bdd.php';


if(empty($_SESSION['membre'])){
    $membre = null;
}else{
    $membre = $_SESSION['membre'];
}

// debug(BASE);

// debug($_POST);


if ($_POST) {
    // contrôles sur le formulaire :

    //REGEX
    if (empty($_POST['pseudo'])) {
        $contenu .= '<div class="text-red-800 ">Le pseudo est requis.</div>';
    } elseif (!preg_match('/^[a-zA-Z0-9_-]{4,20}$/', $_POST['pseudo'])) {
        $contenu .= '<div class="text-red-800 ">Le pseudo doit contenir entre 4 et 20 caractères, sans caractères spéciaux.</div>';
    }
    if (empty($_POST['mdp'])) {
        $contenu .= '<div class="text-red-800 ">Le mot de passe est requis.</div>';
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_+]{6,20}$/', $_POST['mdp'])) {
        $contenu .= '<div class="text-red-800 >Le mot de passe doit contenir entre 6 et 20 caractères, avec au moins une lettre et un chiffre.</div>';
    }


    
    if (empty($contenu)) { // si $contenu est vide , c'est qu'il n'y a pas d'erreur sur le formulaire : on peut donc interroger la BDD

        $resultat = executeRequete( $pdo,"SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp", array(':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));

        if ($resultat->rowCount() > 0) { // s'il y a 1 (ou plusieurs) lignes dans $resultat, le pseudo et le mpd existent pour le même membre
            $membre = $resultat->fetch(PDO::FETCH_ASSOC);  // pas de while car il n'y a qu'une seule ligne de résultat dans la requête (les pseudos sont uniques)
            // on stock les données du $_POST dans les cookies avec la fonction setcookie
            $pseudo = $_POST['pseudo'] ?? '';
            $mdp = $_POST['mdp'] ?? '';

            setcookie('pseudo', $pseudo, time() + (86400 * 30), "/courPHPfacundo/08BOUTIQUE/");
            setcookie('mdp', $mdp, time() + (86400 * 30), "/courPHPfacundo/08BOUTIQUE/");

            $_SESSION['membre'] = $membre;  // nous créons une session appelée "membre" qui contient les informations provenant de la BDD
            print_r($membre);

            header('Location:/courPHPfacundo/08BOUTIQUE/home');  // on redirige (redirection) l'internaute vers la page située à l'url "profil.php"
            exit(); // et on quitte le script 

        } else {
            // sinon il n'y a pas de correspondance entre le login et le mdp pour le même membre :
    
                // Supprimer cookies et session si la connexion échoue
                setcookie("pseudo", "", time() - 3600, "/");
                setcookie("mdp", "", time() - 3600, "/");
    
                session_unset();
 
            $contenu .= '<div class="text-red-800 ">Erreur sur les identifiants.</div>';
        }
    }  // fin du  if (empty($contenu))

    // 🔹 Durée d'inactivité avant expiration (10 minutes)
    $session_timeout = 10 * 60;

    // Vérifier si `LAST_ACTIVITY` existe
    if (isset($_SESSION['LAST_ACTIVITY'])) {
        // 🔹 Temps écoulé depuis la dernière activité
        $tempsInactif = time() - $_SESSION['LAST_ACTIVITY'];

        if ($tempsInactif > $session_timeout) {
            // 🔥 L'utilisateur est inactif trop longtemps ➜ Déconnexion
            session_unset();
            session_destroy();

            // Redirection vers la page de connexion
            header("Location:" . ROOT . "/?timeout=1");
            exit();
        }
    }
 

    // 🔹 Mettre à jour l'activité de l'utilisateur
    $_SESSION['LAST_ACTIVITY'] = time();
}  // fin du if ($_POST)






?>
<p>Veuillez indiquer vos identifiants pour vous connecter.</p>

<?php echo $contenu; ?>

<form method="post" action="">

    <label for="pseudo">Pseudo</label><br>


    <input type="text" id="pseudo" value="<?php echo isset($_COOKIE['speudo']) ? htmlspecialchars($_COOKIE['speudo']) : ''; ?>" name="pseudo">

    
  name="pseudo"><br><br>
    
    <label for="mdp">Mot de passe</label><br>
    <input type="password" id="mdp" value="<?php echo isset($_COOKIE['mdp']) ? htmlspecialchars($_COOKIE['mdp']) : ''; ?>" name="mdp">
 name="mdp"><br><br>

    <button type="submit" class=" p-5 bg-red-100">se connceter</button>

</form>


<?php
