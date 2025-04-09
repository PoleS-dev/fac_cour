<<?php
// Affiche toutes les erreurs à l'écran (utile en développement, à désactiver en production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Fonction utilitaire pour afficher proprement les tableaux et objets
 * Utile pour le débogage
 *
 * @param mixed $param Variable à afficher
 */
function debug($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

// ===========================
// ⚙️ Connexion à la base de données avec PDO
// ===========================

// Chaîne de connexion DSN (Data Source Name)
$dsn = "mysql:host=localhost;dbname=societe"; // Remplacer 'societe' par le nom réel de votre base
$user = "root"; // Nom d'utilisateur MySQL
$password = "votre_mot_de_passe"; // Mot de passe de l'utilisateur MySQL

try {
    /**
     * Création d'une instance PDO pour la connexion à la base de données
     *
     * PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION : active le mode exception pour la gestion des erreurs SQL
     * PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC : les résultats seront récupérés sous forme de tableau associatif
     * PDO::ATTR_EMULATE_PREPARES => false : désactive l'émulation des requêtes préparées (meilleure sécurité et performance)
     */
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}

// C’est un mécanisme de gestion d’erreurs en PHP, qui permet :

// ✅ D’essayer un bloc de code potentiellement risqué (try)
// ✅ Et de réagir proprement si une erreur survient (catch)
// ✅ Sans interrompre brutalement tout ton script ⚠️

// 🔐 Pourquoi c’est indispensable ?
// Sans try...catch :
// Si la connexion échoue, PHP affiche une erreur fatale

// Le script s’arrête brutalement

// L’utilisateur voit un message système non sécurisé

// Avec try...catch :
// Tu interceptes l’erreur (ex: mot de passe incorrect, serveur indisponible…)

// Tu peux afficher un message personnalisé et plus clair

// Tu gardes le contrôle sur le script

// 🧯 PDOException c’est quoi exactement ?
// PDOException est une classe d’erreur (Exception) spécifique à PDO.

// Elle capture tous les problèmes liés à :

// la connexion à la base,

// l’exécution de requêtes,

// l’accès à des colonnes inexistantes,

// etc.

// Et elle permet de récupérer des détails utiles :

// ===========================
// 🔍 Exploration de l'objet PDO
// ===========================

debug(get_class_methods($pdo)); // Affiche toutes les méthodes de l'objet PDO


// Liste toutes les méthodes disponibles dans l'objet $pdo (de la classe PDO)


/**
 * 📄 Liste commentée des méthodes PDO principales :
 *
 * Note : certaines méthodes sont internes ou rarement utilisées, on se concentre ici sur les plus importantes.
 */

// -----------------------------------------
// Méthodes pour exécuter des requêtes
// -----------------------------------------

/**
 * prepare(string $query): PDOStatement
 * Prépare une requête SQL avec des paramètres, pour une exécution sécurisée.
 */
//$pdo->prepare("INSERT INTO users (nom) VALUES (:nom)");

/**
 * query(string $query): PDOStatement
 * Exécute directement une requête SQL de type SELECT (résultats attendus).
 */
//$pdo->query("SELECT * FROM employes");

/**
 * exec(string $query): int|false
 * Exécute une requête SQL (INSERT, UPDATE, DELETE) sans retour de résultats.
 * Retourne le nombre de lignes affectées.
 */
//$pdo->exec("DELETE FROM employes WHERE id=3");

// -----------------------------------------
// Méthodes pour la gestion de transactions
// -----------------------------------------

/**
 * beginTransaction(): bool
 * Démarre une transaction manuelle.
 */
//$pdo->beginTransaction();

/**
 * commit(): bool
 * Valide toutes les opérations faites depuis beginTransaction().
 */
//$pdo->commit();

/**
 * rollBack(): bool
 * Annule toutes les opérations faites depuis beginTransaction().
 */
//$pdo->rollBack();

// -----------------------------------------
// Méthodes utilitaires
// -----------------------------------------

/**
 * lastInsertId(): string
 * Retourne l'ID auto-incrémenté généré par la dernière requête INSERT.
 */
//$pdo->lastInsertId();

/**
 * errorCode(): string|null
 * Retourne le code d'erreur SQLSTATE de la dernière opération.
 */
//$pdo->errorCode();

/**
 * errorInfo(): array
 * Retourne un tableau avec des informations détaillées sur l'erreur SQL.
 */
//$pdo->errorInfo();

// -----------------------------------------
// Méthodes de configuration PDO
// -----------------------------------------

/**
 * getAttribute(int $attribute): mixed
 * Récupère la valeur d’un attribut de la connexion PDO (ex: mode de fetch par défaut).
 */
//$pdo->getAttribute(PDO::ATTR_ERRMODE);

/**
 * setAttribute(int $attribute, mixed $value): bool
 * Modifie un attribut de la connexion PDO (par exemple, activer les exceptions).
 */
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// -----------------------------------------
// Méthodes pour la gestion de connexions multiples
// -----------------------------------------

/**
 * quote(string $string, int $parameter_type = PDO::PARAM_STR): string
 * Protège une chaîne pour l'injecter littéralement dans une requête SQL (moins utilisé car `prepare()` est meilleur).
 */
//$pdo->quote("Robert'; DROP TABLE users; --");

// Certaines autres méthodes internes peuvent apparaître selon le driver installé.


debug(get_object_vars($pdo));   // Affiche les propriétés internes (souvent vide pour PDO)

// ===========================
// 📤 Requête avec exec() - pour INSERT / UPDATE / DELETE
// ===========================

/**
 * La méthode exec() exécute une requête SQL ne retournant pas de jeu de résultats (ex : INSERT)
 * Elle retourne le nombre de lignes affectées, ou false en cas d'erreur
 */
$nbLignes = $pdo->exec("
    INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire)
    VALUES ('daniel', 'Baugrand', 'm', 'informatique', '2016-03-08', 500)
");

// exec() exécute une requête directement, sans protection contre les injections SQL.
// C’est parfait pour du code en dur, mais dangereux si on y insère des données utilisateur ❗

echo "✔️ Nombre de lignes insérées : $nbLignes <br>";
echo "🆔 Dernier ID inséré : " . $pdo->lastInsertId(); // ID auto-incrémenté généré par la dernière requête

// Exemple de suppression (non exécuté ici pour conserver les données)
// $pdo->exec("DELETE FROM employes WHERE prenom = 'daniel'");



// Connexion PDO sécurisée
// $pdo = new PDO("mysql:host=localhost;dbname=societe", "root", "votre_mot_de_passe", [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
// ]);

// Exemple de données reçues via formulaire (en POST)
$prenom  = $_POST['prenom'] ?? '';
$nom     = $_POST['nom'] ?? '';
$sexe    = $_POST['sexe'] ?? '';
$service = $_POST['service'] ?? '';
$date_embauche = $_POST['date_embauche'] ?? '';
$salaire = $_POST['salaire'] ?? 0;

// Requête préparée pour insertion sécurisée
$sql = "INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) 
        VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)";

// $sql = "...";
// Tu stockes ta requête SQL dans une variable appelée $sql.

// Cela permet ensuite de la préparer avec PDO (via $pdo->prepare($sql)), et de l’exécuter avec les valeurs dynamiques.

/**
 * INSERT INTO employes (...)
*C'est une requête d'insertion (INSERT) qui dit à MySQL :

*“Je veux ajouter une nouvelle ligne dans la table employes”.

*employes est le nom de la table dans ta base de données.

*Les champs listés entre parenthèses sont les colonnes dans lesquelles tu veux insérer des données :
 * VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)
*Ce sont les valeurs que tu vas insérer dans les colonnes précédentes.

*Mais attention : ici, ce ne sont pas des valeurs fixes ❌

*Ce sont des paramètres nommés (aussi appelés placeholders) ✅
 * 
 *  Les paramètres nommés :prenom, :nom, etc.
*Ce sont des marqueurs que PDO va remplacer au moment de l’exécution.

*Avantage : tu ne mets pas directement les données utilisateur dans ta requête ⇒ tu évites les injections SQL 🚫💉
 * 
 */

$stmt = $pdo->prepare($sql);

// Bind et exécution
$stmt->execute([
    ':prenom'         => $prenom,
    ':nom'            => $nom,
    ':sexe'           => $sexe,
    ':service'        => $service,
    ':date_embauche'  => $date_embauche,
    ':salaire'        => $salaire
]);

echo "✔️ Nouvel employé enregistré avec succès !";
echo "🆔 ID : " . $pdo->lastInsertId();
?>

<style>
        form {
            max-width: 500px;
            margin: auto;
            padding: 1rem;
            background-color: #f5f5f5;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 0.5rem;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Ajouter un nouvel employé</h2>

    <form  method="post">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>

        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe" required>
            <option value="">-- Sélectionner --</option>
            <option value="m">Masculin</option>
            <option value="f">Féminin</option>
        </select>

        <label for="service">Service</label>
        <input type="text" name="service" id="service" required>

        <label for="date_embauche">Date d'embauche</label>
        <input type="date" name="date_embauche" id="date_embauche" required>

        <label for="salaire">Salaire (€)</label>
        <input type="number" name="salaire" id="salaire" required min="0" step="0.01">

        <button type="submit">Enregistrer</button>
    </form>


<?php




// ===========================
// 🔎 Requête avec query() - pour SELECT
// ===========================

/**
 * La méthode query() est utilisée pour exécuter des requêtes SQL retournant un jeu de résultats (ex : SELECT)
 * Elle retourne un objet de type PDOStatement
 */
$result = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel'");

debug($pdo);    // Affiche les détails de l'objet PDO
debug($result); // Affiche les détails de l'objet résultat (PDOStatement)

/**
 * fetch(PDO::FETCH_ASSOC) permet de récupérer une ligne de résultat sous forme de tableau associatif
 * Chaque appel à fetch() avance d'une ligne
 */
$employe = $result->fetch(PDO::FETCH_ASSOC);

echo "<h3>Détails d'un employé nommé Daniel :</h3>";
var_dump($employe);
debug($employe); // Affichage lisible de l'array

// ===========================
// 📚 Récupération de plusieurs lignes avec fetchAll()
// ===========================

/**
 * fetchAll() retourne un tableau contenant toutes les lignes du jeu de résultats
 * Chaque ligne est un sous-tableau associatif (grâce au mode PDO::FETCH_ASSOC)
 */
$resultAll = $pdo->query("SELECT * FROM employes");
$employes = $resultAll->fetchAll(PDO::FETCH_ASSOC); 

debug($employes); // Affiche tous les employés

// ===========================
// 🖨️ Affichage formaté des résultats
// ===========================

echo "<h3>Liste complète des employés :</h3>";
foreach ($employes as $employe) {
    echo '<div>';
    echo '<p><strong>ID :</strong> ' . $employe['id'] . '</p>';
    echo '<p><strong>Nom :</strong> ' . $employe['nom'] . '</p>';
    echo '<p><strong>Prénom :</strong> ' . $employe['prenom'] . '</p>';
    echo '</div><hr>';
}

?>
