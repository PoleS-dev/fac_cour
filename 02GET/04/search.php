<h1>Résultats de la recherche</h1>
<a href="form.php">← Retour</a>

<?php

var_dump($_GET);
// Vérifie si au moins un champ a été rempli
if (!empty($_GET)) {
    // Sécurisation avec htmlspecialchars
    $keyword = isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '';
    $category = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : 'Non précisée';
    $sort = isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'Aucun tri';

    echo "<p><strong>Mot-clé recherché :</strong> $keyword</p>";
    echo "<p><strong>Catégorie :</strong> $category</p>";
    echo "<p><strong>Tri demandé :</strong> $sort</p>";
} else {
    echo "<p style='color:red;'>Aucune recherche effectuée.</p>";
}
?>
