<?php
include 'navbar.php';

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

// Récupération des offres
$sql = "SELECT Offres.*, Entreprises.Nom AS Entreprise FROM Offres 
        JOIN Entreprises ON Offres.ID_Entreprise = Entreprises.ID_Entreprise";
$stmt = $pdo->query($sql);
$offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/offres.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
<main>
    <h2>Offres</h2>
    <div class="offer-container">
        <?php foreach ($offres as $offre): ?>
            <div class="offer">
                <h3><?= htmlspecialchars($offre['Titre']) ?></h3>
                <p><strong>Entreprise :</strong> <?= htmlspecialchars($offre['Entreprise']) ?></p>
                <p><strong>Date de début :</strong> <?= htmlspecialchars($offre['Date_Debut']) ?></p>
                <p><strong>Date de fin :</strong> <?= htmlspecialchars($offre['Date_Fin']) ?></p>
                <p><strong>Rémunération :</strong> <?= htmlspecialchars($offre['Remuneration']) ?> €</p>
                <p><?= htmlspecialchars($offre['Description']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>
