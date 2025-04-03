

<h1>back</h1>

<?php
      

      
      // ✅ Protection contre les accès directs sans POST
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
          
          // 🔐 Sécuriser l'accès aux champs POST (avec vérification d'existence)
          $nom = isset($_POST['auteur']) ? htmlspecialchars($_POST['auteur']) : 'Non fourni';
     
          $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : 'Non fournie';
      
          // 🔐 Sécuriser l'accès aux paramètres GET
          $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : 'Non spécifié';
          $type = isset($_GET['type']) ? htmlspecialchars($_GET['type']) : 'Non spécifié';
      
          // ✅ Affichage des données
          echo "<h1>Données reçues :</h1>";
          echo "<p><strong>ID (GET)</strong> : $id</p>";
          echo "<p><strong>Type (GET)</strong> : $type</p>";
          echo "<p><strong>Nom (POST)</strong> : $nom</p>";
   
          echo "<p><strong>Description (POST)</strong> : $description</p>";
      
      } else {
          // 🔒 Protection : rediriger ou message
          echo "<p>⚠️ Ce script doit être accédé via un formulaire POST.</p>";
      }
      //-----------------------
      // La superglobale $_POST
      //-----------------------
      // $_POST est une superglobale qui permet de récupérer les données saisies dans un formulaire.
      
      // $_POST est une superglobale, donc un array. Il est disponible dans tous les contextes du script, y compris au sein des fonctions.
      
      // Syntaxe de $_POST : $_POST = array('name1' => 'valeur input1', 'nameN' => 'valeur inputN');
      
      
      
      var_dump($_SERVER);
      ?>



<!-- 
La fonction htmlspecialchars() en PHP est utilisée pour convertir des caractères spéciaux en entités HTML. Cela est principalement fait pour prévenir les attaques par injection de code, comme le Cross-Site Scripting (XSS), où des scripts malveillants peuvent être insérés dans les données qui seront ensuite affichées sur une page web. L'utilisation de htmlspecialchars() aide à sécuriser votre application en s'assurant que les données affichées ne seront pas exécutées comme du code HTML ou JavaScript.
 -->
<!-- 
Dans le script PHP que vous avez partagé, $_SERVER est une superglobale en PHP qui contient des informations sur les en-têtes, chemins, et emplacements de scripts. La superglobale $_SERVER est un tableau contenant des informations telles que les en-têtes HTTP, les chemins des scripts et les emplacements des scripts. Les valeurs de ce tableau sont générées par le serveur web.

Utilisation de $_SERVER["REQUEST_METHOD"]
Dans votre script, $_SERVER["REQUEST_METHOD"] est utilisé pour déterminer la méthode HTTP avec laquelle la page a été demandée. Les méthodes HTTP les plus courantes sont GET et POST.

"POST" : Indique que les données ont été envoyées au serveur à partir d'un formulaire. La méthode POST est souvent utilisée lorsque les données du formulaire sont envoyées car elle est plus sécurisée que GET ; les données ne sont pas visibles dans l'URL.
Votre code vérifie si la méthode de requête est POST avant de procéder au traitement des données du formulaire. Si la méthode est POST, cela signifie que l'utilisateur a probablement soumis un formulaire et que le script doit alors traiter ces données.


Vérification de la méthode : Le script commence par vérifier si la méthode de requête est POST à l'aide de $_SERVER["REQUEST_METHOD"] == "POST". Cela permet de s'assurer que le script traite les données uniquement si elles ont été envoyées par un formulaire utilisant cette méthode.

Affichage des données : Si la méthode est POST, le script affiche un bloc HTML avec les résultats. Il utilise htmlspecialchars() pour nettoyer les données du formulaire reçues via $_POST (qui est une autre superglobale en PHP utilisée pour collecter des données de formulaire envoyées par méthode POST). Cette fonction convertit les caractères spéciaux en entités HTML, ce qui empêche l'exécution de scripts malveillants (XSS).

Sécurité
L'utilisation de htmlspecialchars() est cruciale pour sécuriser l'affichage des données entrées par l'utilisateur, car sans cela, un utilisateur malveillant pourrait insérer du code JavaScript ou d'autres éléments HTML qui pourraient être exécutés par le navigateur, menant à des vulnérabilités de type Cross-Site Scripting (XSS).


-->