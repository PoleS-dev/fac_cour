
<?php


echo "cookies";
print '<pre>';
print_r($_COOKIE);
print '<pre>';

echo "session :";
debug($_SESSION);


// Récupération des produits
$resultat = executeRequete($pdo,"SELECT * FROM produit");
$resultMenbre=executeRequete($pdo,"SELECT *FROM membre");

// Vérifier s'il y a des produits
$produits = $resultat->fetchAll(PDO::FETCH_ASSOC);
$membres=$resultMenbre->fetchAll(PDO::FETCH_ASSOC);
debug($produits);



if (!isset($_SESSION['membre'])) {
    header("Location: " . ROOT . "/"); // 🚀 Redirection vers connexion
    exit();
}

?>



    <h1 class=" text-4xl mx-auto " >Nos Produits</h1>
    
    
    
    <table class="border m-auto w-1/2 " >
        <tr class=" bg-orange-100 ">
            <th>ID</th>
            <th>Titre</th>
            <th>Prix</th>
        </tr>
        <?php foreach ($produits as $produit) : ?>
            <tr class=" bg-red-300">
                <td><?= htmlspecialchars($produit['id_produit']); ?></td>
                <td><?= htmlspecialchars($produit['titre']); ?></td>
                <td><?= htmlspecialchars($produit['prix']); ?> €</td>
            </tr>
            <?php endforeach; ?>
        </table>

        
        <h1 class=" text-4xl mx-auto " >liste des adherents</h1>
        <div class="flex flex-wrap gap-10 ">
            
            <?php  
    
    foreach($membres as $membre ) :?>
     <h5 class="text-xl p-5 border border-zinc-600 rounded-lg ">
        <?= htmlspecialchars($membre["pseudo"]); ?>
     </h5>
    
    
   <?php endforeach;
   
 
   
   ?>

   

    </div>
</body>
</html>
