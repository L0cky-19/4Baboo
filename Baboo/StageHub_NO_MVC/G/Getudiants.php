<!DOCTYPE php>
<php lang="fr">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Étudiants</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/G.css">
</head>
<body>
    <main>
    <h1>Gestion des Étudiants</h1>
        <nav>
            <ul>
                <li><a href="#rechercher">Rechercher</a></li>
                <li><a href="#ajouter">Ajouter</a></li>
                <li><a href="#modifier">Modifier</a></li>
                <li><a href="#supprimer">Supprimer</a></li>
                <li><a href="#statistiques">Statistiques</a></li>
            </ul>
        </nav>

        <!-- Rechercher un étudiant -->
        <section id="rechercher">
            <h2>Rechercher un étudiant</h2>
            <form action="rechercher_etudiant.php" method="GET">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <!-- Ajouter un étudiant -->
        <section id="ajouter">
            <h2>Ajouter un étudiant</h2>
            <form action="ajouter_etudiant.php" method="POST">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Ajouter</button>
            </form>
        </section>

        <!-- Modifier un étudiant -->
        <section id="modifier">
            <h2>Modifier un étudiant</h2>
            <form action="modifier_etudiant.php" method="POST">
                <label for="etudiant_id">ID de l'étudiant:</label>
                <input type="text" id="etudiant_id" name="etudiant_id" required>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <button type="submit">Modifier</button>
            </form>
        </section>

        <!-- Supprimer un étudiant -->
        <section id="supprimer">
            <h2>Supprimer un étudiant</h2>
            <form action="supprimer_etudiant.php" method="POST">
                <label for="etudiant_id">ID de l'étudiant:</label>
                <input type="text" id="etudiant_id" name="etudiant_id" required>
                <button type="submit">Supprimer</button>
            </form>
        </section>

        <!-- Statistiques -->
        <section id="statistiques">
            <h2>Statistiques</h2>
            <p>Statistiques sur la recherche de stages des étudiants</p>
            <ul>
                <li>Nombre d'étudiants inscrits</li>
                <li>Nombre d'étudiants ayant trouvé un stage</li>
            </ul>
        </section>
    </main>
</body>
</php>
