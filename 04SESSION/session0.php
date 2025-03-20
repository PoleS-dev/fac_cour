<?php session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Stockage des informations de l'utilisateur dans la session
    $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
    $_SESSION['nom'] = htmlspecialchars($_POST['nom']);

    echo "prenom : ".$_SESSION['prenom']."<br>";
    echo "nom : ".$_SESSION['nom'];

 
}
?>



<!-- // Démarrage de la session au début du script -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
            <label for="prenom">Prénom:</label>
            <input type="text"  name="prenom" required><br>
            
            
            <label for="nom">nom</label>
            <input type="text"  name="nom" required><br>
            <input type="submit" value="Soumettre">
        </form>


        <a href="./session1.php">test session</a>
    
</body>
</html>