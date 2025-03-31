<h1>Détails du produit</h1>
<a href="page1.php">Retour à la liste</a>

<?php
if (isset($_GET['article'], $_GET['couleur'], $_GET['prix'])) {
    $article = htmlspecialchars($_GET['article']);
    $couleur = htmlspecialchars($_GET['couleur']);
    $prix = htmlspecialchars($_GET['prix']);
    $desc = htmlspecialchars($_GET['description']);

    echo "<p><strong>Article :</strong> $article</p>";
    echo "<p><strong>Couleur :</strong> $couleur</p>";
    echo "<p><strong>Prix :</strong> $prix €</p>";
    echo "<p><strong>description :</strong> $desc €</p>";
} else {
    echo '<p class="error">Produit invalide ou manquant.</p>';
}
?>
