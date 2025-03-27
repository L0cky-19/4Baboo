<?php include './views/partials/navbar.php'; ?>
    <link rel="stylesheet" href="./public/CSS/styles.css">
    <link rel="stylesheet" href="./public/CSS/index.css">
    <link rel="stylesheet" href="./public/CSS/navbar.css">
<h1>Liste des entreprises</h1>
<ul>
    <?php foreach ($entreprises as $entreprise): ?>
        <li><?= htmlspecialchars($entreprise['Nom']); ?></li>
    <?php endforeach; ?>
</ul>
