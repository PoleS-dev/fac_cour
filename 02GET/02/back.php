<?php 

echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo '<pre>';
var_dump($_GET["article"]);
echo '</pre>';
echo '<pre>';
var_dump($_GET["prix"]);
echo '</pre>';
echo '<pre>';
var_dump($_GET["couleur"]);
echo '</pre>';

if(isset($_GET["article"]) && isset($_GET["prix"] ) && isset($_GET["couleur"])){

echo "les couleur est : " .$_GET["couleur"];

}else {
    // sinon, on met un message à l'internaute :
    echo '<p class="error">Ce produit n\'existe pas !</p>';
}