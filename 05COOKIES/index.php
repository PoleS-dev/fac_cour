<?php


include_once "./utils.php";


ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();


print '<pre>';
print_r($_COOKIE);
print '<pre>';



if (isset($_POST['login'])) {
    // on recupère dans la variable global $_POST les données du formulaire et on les stock dans des variables
    $nom= $_POST['nom'];
    $prenom = $_POST['prenom']; 


// nous creons une session avec la variable global $_SESSION et il stock les variables contenant les $_POST + un booleen pour dire qu'il est connecté
    $_SESSION['logged_in'] = true;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;



    // on stock les données du $_POST dans les cookies avec la fonction setcookie
    setcookie('name', $nom, time() + (86400 * 30), "/courPHPfacundo/05COOKIES/","",false,true);
    setcookie('user_name', $prenom, time() + (86400 * 30), "/courPHPfacundo/05COOKIES/","",false,true);

// 'name' : Le nom du cookie.

// $nom : La valeur du cookie, qui est probablement le nom d'utilisateur de la personne connectée.

// time() + (86400 * 30) : La date d'expiration du cookie, ici 30 jours après la date actuelle. 86400 représente le nombre de secondes en une journée, donc 86400 * 30 donne le nombre de secondes en 30 jours.

// "/" : Le chemin sur le serveur pour lequel le cookie sera disponible. En utilisant "/", le cookie est disponible sur tout le site.

// "" : Le domaine pour lequel le cookie est disponible. Une chaîne vide signifie que le cookie est disponible pour le domaine actuel de la requête, y compris tous ses sous-domaines.

// true : Le premier true correspond à l'attribut Secure. Cela signifie que le cookie ne doit être envoyé que sur des connexions sécurisées (HTTPS). C'est une bonne pratique de sécurité pour s'assurer que les informations sensibles comme les noms d'utilisateur ne sont pas envoyées en clair sur le réseau.

// true : Le second true correspond à l'attribut HttpOnly. Cela rend le cookie inaccessible au code JavaScript côté client, comme les scripts de cross-site scripting (XSS). Cela ajoute une couche de sécurité en s'assurant que le cookie n'est utilisable que par le serveur et aide à protéger les données de l'utilisateur contre certains types d'attaques par injection.



    // Rediriger vers la sélection de langue si le cookie de langue n'existe pas
    if (isset($_COOKIE['user_language']) && $_COOKIE["name"] === $_SESSION["nom"] && $_COOKIE["user_name"] === $_SESSION["prenom"]) 
    
    {
        $_SESSION['language'] = $_COOKIE['user_language'];
        header('Location: welcome.php');
    } else {
        header('Location: language.php');
    }
    exit();

    // exercice changer la langue de nom et prenom selon les données du cookies
}
if(array_key_exists("user_language",$_COOKIE)){

    $language=$_COOKIE["user_language"];
}
?>

<form method="post">


    <?php  echo translate('name',$language) ?> 
    
    <input type="text" name="nom" value="<?php echo isset($_COOKIE['name']) ? htmlspecialchars($_COOKIE['name']) : ''; ?>" ><br>



    prénom: 
    
    <input type="text" name="prenom" value="<?php echo isset($_COOKIE['user_name']) ? htmlspecialchars($_COOKIE['user_name']) : ''; ?>" ><br>

    <input type="submit" name="login" value="Login">
</form>
