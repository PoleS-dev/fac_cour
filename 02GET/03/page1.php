<h1>Liste des produits</h1>

<?php
$produits = [
    [
        'article' => 'jean',
        'couleur' => 'bleu',
        'prix' => 49.99,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"

    ],
    [
        'article' => 't-shirt',
        'couleur' => 'blanc',
        'prix' => 19.99,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ],
    [
        'article' => 'chaussures',
        'couleur' => 'noir',
        'prix' => 89.90,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ]
];

foreach ($produits as $produit) {
    // Construction de l'URL avec urlencode() pour sécurité
    $url = 'page2.php?article=' . urlencode($produit['article']) .
           '&couleur=' . urlencode($produit['couleur']) .
           "&description=".urlencode($produit['description']).
           '&prix=' . urlencode($produit['prix']);

    echo "<p><a href=\"$url\">Voir le produit : {$produit['article']} ({$produit['couleur']}) - {$produit['prix']}€</a></p>";
}
?>
