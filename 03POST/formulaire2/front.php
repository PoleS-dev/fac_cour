<body>

   

    <?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    

    $article=[

        "id"=>"123",
        "name"=>"article secret",
        "text"=>" ceci est un secret  ",
        "auteur"=>"facundo"
    ];

    $id=urlencode($article["id"]);

    $type=urlencode($article["name"]);
    
    $url="back.php?id=$id&type=$type"

    
    ?>
    <!-- Notez l'ajout des paramètres dans l'URL de l'action -->
    <form action=" <?php echo $url ?> " method="post">
    <label for="nom">Auteur:</label>
    <input type="text"  name="auteur" value="<?php echo htmlspecialchars($article['auteur']); ?>"required>

   <label for="descrition">text</label>
    <textarea type="text" name="description"  ><?php echo htmlspecialchars($article['text']); ?></textarea>

    <input type="submit" value="Envoyer">
    </form>
</body>