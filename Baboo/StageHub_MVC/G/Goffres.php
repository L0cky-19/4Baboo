<!DOCTYPE php>
<php lang="fr">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Offres de Stage</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/G.css">
</head>
<body>
    <main>
    <h1>Gestion des Offres de Stage</h1>
        <nav>
            <ul>
                <li><a href="#rechercher">Rechercher</a></li>
                <li><a href="#ajouter">Ajouter</a></li>
                <li><a href="#modifier">Modifier</a></li>
                <li><a href="#supprimer">Supprimer</a></li>
                <li><a href="#statistiques">Statistiques</a></li>
            </ul>
        </nav>
        <!-- Rechercher une offre -->
        <section id="rechercher">
            <h2>Rechercher une offre de stage</h2>
            <form action="rechercher_offre.php" method="GET">
                <label for="competences">Compétences:</label>
                <input type="text" id="competences" name="competences">
                <label for="entreprise">Entreprise:</label>
                <input type="text" id="entreprise" name="entreprise">
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <!-- Ajouter une offre -->
        <section id="ajouter">
            <h2>Ajouter une offre de stage</h2>
            <form action="ajouter_offre.php" method="POST">
                <label for="competences">Compétences:</label>
                <input type="text" id="competences" name="competences" required>
                <label for="titre">Titre de l'offre:</label>
                <input type="text" id="titre" name="titre" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <label for="entreprise">Entreprise:</label>
                <input type="text" id="entreprise" name="entreprise" required>
                <label for="remuneration">Rémunération:</label>
                <input type="number" id="remuneration" name="remuneration" required>
                <label for="dates">Dates de l'offre:</label>
                <input type="text" id="dates" name="dates" required>
                <button type="submit">Ajouter</button>
            </form>
        </section>

        <!-- Modifier une offre -->
        <section id="modifier">
            <h2>Modifier une offre de stage</h2>
            <form action="modifier_offre.php" method="POST">
                <label for="offre_id">ID de l'offre:</label>
                <input type="text" id="offre_id" name="offre_id" required>
                <label for="competences">Compétences:</label>
                <input type="text" id="competences" name="competences">
                <label for="titre">Titre de l'offre:</label>
                <input type="text" id="titre" name="titre">
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>
                <label for="entreprise">Entreprise:</label>
                <input type="text" id="entreprise" name="entreprise">
                <label for="remuneration">Rémunération:</label>
                <input type="number" id="remuneration" name="remuneration">
                <label for="dates">Dates de l'offre:</label>
                <input type="text" id="dates" name="dates">
                <button type="submit">Modifier</button>
            </form>
        </section>

        <!-- Supprimer une offre -->
        <section id="supprimer">
            <h2>Supprimer une offre de stage</h2>
            <form action="supprimer_offre.php" method="POST">
                <label for="offre_id">ID de l'offre:</label>
                <input type="text" id="offre_id" name="offre_id" required>
                <button type="submit">Supprimer</button>
            </form>
        </section>

        <!-- Statistiques -->
        <section id="statistiques">
            <h2>Statistiques des offres</h2>
            <p>Répartition par compétence, durée du stage, et top des offres mises en wish-list.</p>
        </section>
    </main>
</body>
</php>
