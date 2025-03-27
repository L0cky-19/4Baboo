<!DOCTYPE php>
<php lang="fr">
<?php include '../partials\navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StageHUB - Trouvez votre stage facilement</title>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="stylesheet" href="../../CSS/index.css">
    <link rel="stylesheet" href="../../CSS/navbar.css">
</head>
<body>

<main>
    <section class="description">
        <h2>Bienvenue sur StageHUB</h2>
        <p>Découvrez des offres adaptées à votre profil, explorez les entreprises et créez votre wishlist !</p>
    </section>

    <?php
    // Inclure le contrôleur et initialiser la base de données
    require_once __DIR__ . '/../../config/database.php';
    require_once __DIR__ . '/../../controllers/HomeController.php';

    $homeController = new HomeController($pdo);
    $stats = $homeController->homeModel->getStats();?>

<section class="stats">
    <div><h3><?= $stats['offres'] ?></h3><p>Offres de stage</p></div>
    <div><h3><?= $stats['entreprises'] ?></h3><p>Entreprises partenaires</p></div>
    <div><h3><?= $stats['etudiants'] ?></h3><p>Étudiants inscrits</p></div>
</section>


    <section class="images-container">
        <a href="../offres\index.php"><img src="placeholder.png" alt="Offres"><p>Voir les offres</p></a>
        <a href="../entreprises\index.php"><img src="placeholder.png" alt="Entreprises"><p>Découvrir les entreprises</p></a>
        <a href="../wishlist\index.php"><img src="placeholder.png" alt="Whishlist"><p>Gérer ma WishList</p></a>
    </section>
</main>

<footer>
    <p>&copy; 2025 StageHUB - <a href="mentions-legales.php">Mentions légales</a> | <a href="contact.php">Contact</a> | <a href="privacy.php">Politique de confidentialité</a></p>
</footer>

</body>
</php>