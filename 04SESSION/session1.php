<h2>4. Récupérer les données de la session</h2>
<p>Maintenant que nous avons stocké des informations dans notre session, nous allons les afficher sur le navigateur (cela ne fonctionnera que si 'session_start()' a été appelée).</p>
<?php
session_start();
        echo "Prénom : " . htmlspecialchars($_SESSION['prenom'])."<br>" ;
        echo "Nom : " . htmlspecialchars($_SESSION['nom']) ;

?>

<div style="display: flex;justify-content:center">

    <?php
    if (!empty($_SESSION)){
    
        echo  "<h2> bonjour ". $_SESSION["prenom"]. "</h2>";
    }
    else {
        echo "<p style='color:red'>personne dans cette session ? </p>";
    }

    ?>



</div>

 <?php
  if (!empty($_SESSION)){

    echo "<form action='./deconnexion.php' method='POST'> ";

    echo " <button type='submit' name='logout'>voulez vous vous deconnecter? </button> ";

    echo "</form>";
  }












