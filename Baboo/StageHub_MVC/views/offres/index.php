<?php include './views/partials/navbar.php'; ?>
<link rel="stylesheet" href="./public/CSS/styles.css">
<link rel="stylesheet" href="./public/CSS/index.css">
<link rel="stylesheet" href="./public/CSS/navbar.css">


<h1>Liste des offres</h1>
<ul>
    <?php foreach ($offres as $offre): ?>
        <li><?= htmlspecialchars($offre['Titre']); ?> - <?= htmlspecialchars($offre['Entreprise']); ?></li>
    <?php endforeach; ?>
</ul>
