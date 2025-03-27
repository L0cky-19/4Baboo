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

// Récupération des entreprises
$sql = "SELECT * FROM Entreprises";
$stmt = $pdo->query($sql);
$entreprises = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprises</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/entreprises.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
<main>
    <h2>Entreprises</h2>
    <div class="company-container">
        <?php foreach ($entreprises as $entreprise): ?>
            <div class="company">
                <h3><?= htmlspecialchars($entreprise['Nom']) ?></h3>
                <p><strong>Description :</strong> <?= htmlspecialchars($entreprise['Description']) ?></p>
                <p><strong>Email :</strong> <?= htmlspecialchars($entreprise['Email']) ?></p>
                <p><strong>Téléphone :</strong> <?= htmlspecialchars($entreprise['Telephone']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>
