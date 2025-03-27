<!DOCTYPE php>
<php lang="fr">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Entreprises</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/G.css">
</head>
<body>
    <main>
    <h1>Gestion des Entreprises</h1>
        <nav>
            <ul>
                <li><a href="#rechercher">Rechercher</a></li>
                <li><a href="#ajouter">Ajouter</a></li>
                <li><a href="#modifier">Modifier</a></li>
                <li><a href="#supprimer">Supprimer</a></li>
                <li><a href="#evaluer">Évaluer</a></li>
            </ul>
        </nav>

        <!-- Rechercher une entreprise -->
        <section id="rechercher">
            <h2>Rechercher une entreprise</h2>
            <form action="rechercher_entreprise.php" method="GET">
                <label for="nom">Nom de l'entreprise:</label>
                <input type="text" id="nom" name="nom">
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <!-- Ajouter une entreprise -->
        <section id="ajouter">
            <h2>Ajouter une entreprise</h2>
            <form action="ajouter_entreprise.php" method="POST">
                <label for="nom">Nom de l'entreprise:</label>
                <input type="text" id="nom" name="nom" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <label for="contact_email">Email de contact:</label>
                <input type="email" id="contact_email" name="contact_email" required>
                <button type="submit">Ajouter</button>
            </form>
        </section>

        <!-- Modifier une entreprise -->
        <section id="modifier">
            <h2>Modifier une entreprise</h2>
            <form action="modifier_entreprise.php" method="POST">
                <label for="entreprise_id">ID de l'entreprise:</label>
                <input type="text" id="entreprise_id" name="entreprise_id" required>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>
                <label for="contact_email">Email de contact:</label>
                <input type="email" id="contact_email" name="contact_email">
                <button type="submit">Modifier</button>
            </form>
        </section>

        <!-- Supprimer une entreprise -->
        <section id="supprimer">
            <h2>Supprimer une entreprise</h2>
            <form action="supprimer_entreprise.php" method="POST">
                <label for="entreprise_id">ID de l'entreprise:</label>
                <input type="text" id="entreprise_id" name="entreprise_id" required>
                <button type="submit">Supprimer</button>
            </form>
        </section>

        <!-- Évaluer une entreprise -->
        <section id="evaluer">
            <h2>Évaluer une entreprise</h2>
            <form action="evaluer_entreprise.php" method="POST">
                <label for="entreprise_id">ID de l'entreprise:</label>
                <input type="text" id="entreprise_id" name="entreprise_id" required>
                <label for="evaluation">Évaluation:</label>
                <input type="number" id="evaluation" name="evaluation" min="1" max="5" required>
                <button type="submit">Évaluer</button>
            </form>
        </section>
    </main>
</body>
</php>