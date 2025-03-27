<?php
include 'navbar.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

// Connexion à la base de données
$host = 'localhost';
$dbname = 'stagehub';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupération de la wishlist de l'utilisateur
$userId = $_SESSION['user']['id'];
$sql = "SELECT Offres.* FROM WishLists 
        JOIN Offres ON WishLists.ID_Offre = Offres.ID_Offre 
        WHERE WishLists.ID_User = :userId";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':userId', $userId);
$stmt->execute();
$wishlists = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
<link rel="stylesheet" href="CSS/styles.css">
<link rel="stylesheet" href="CSS/whishlist.css">
    <h2>Ma Wishlist</h2>
    <div class="wishlist-container">
        <?php foreach ($wishlists as $offre): ?>
            <div class="wishlist-item">
                <h3><?= htmlspecialchars($offre['Titre']) ?></h3>
                <p><strong>Date de début :</strong> <?= htmlspecialchars($offre['Date_Debut']) ?></p>
                <p><strong>Date de fin :</strong> <?= htmlspecialchars($offre['Date_Fin']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
