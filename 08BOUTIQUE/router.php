<?php


require_once(__DIR__ . '/config/function.php');

// Récupérer l'URL demandée
$basePath = "/courPHPfacundo/08BOUTIQUE"; // 🔹 Chemin du projet
$requestUri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = str_replace($basePath, '', $requestUri); // On enlève "/courPHPfacundo/08BOUTIQUE"
// echo "🔍 requestUri : " . $_SERVER['REQUEST_URI'] . "<br>";
// echo "✅ uri après correction : " . $uri;
// exit();

//  echo "🔍 requestUri : " . $requestUri . "<br>";
//  echo "✅ uri après correction : " . $uri;
//  exit();
// Définir les routes disponibles
$routes = [
    '/' => 'page/connexion.php',
    '/deconnexion' => 'page/deconnexion.php',
    '/home' => 'page/home.php',
    '/inscription' => 'page/inscription.php',
    '/profil' => 'page/profil.php',
    '/404' => 'page/404.php',

];

// Vérifier si l'URL existe dans les routes
if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . '/' . $routes[$uri]);

} else {
    echo " Route inconnue : " . $uri;
    exit();
    exit;

}
?>
