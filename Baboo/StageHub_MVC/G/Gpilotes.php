<!DOCTYPE php>
<php lang="fr">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Pilotes de Promotion</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/G.css">
</head>
<body>
    <main>
    <h1>Gestion des Pilotes de Promotion</h1>
        <nav>
            <ul>
                <li><a href="#rechercher">Rechercher</a></li>
                <li><a href="#ajouter">Ajouter</a></li>
                <li><a href="#modifier">Modifier</a></li>
                <li><a href="#supprimer">Supprimer</a></li>
            </ul>
        </nav>
        <!-- Rechercher un pilote -->
        <section id="rechercher">
            <h2>Rechercher un pilote de promotion</h2>
            <form action="rechercher_pilote.php" method="GET">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <!-- Ajouter un pilote -->
        <section id="ajouter">
            <h2>Ajouter un pilote de promotion</h2>
            <form action="ajouter_pilote.php" method="POST">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
                <button type="submit">Ajouter</button>
            </form>
        </section>

        <!-- Modifier un pilote -->
        <section id="modifier">
            <h2>Modifier un pilote de promotion</h2>
            <form action="modifier_pilote.php" method="POST">
                <label for="pilote_id">ID du pilote:</label>
                <input type="text" id="pilote_id" name="pilote_id" required>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                <button type="submit">Modifier</button>
            </form>
        </section>

        <!-- Supprimer un pilote -->
        <section id="supprimer">
            <h2>Supprimer un pilote de promotion</h2>
            <form action="supprimer_pilote.php" method="POST">
                <label for="pilote_id">ID du pilote:</label>
                <input type="text" id="pilote_id" name="pilote_id" required>
                <button type="submit">Supprimer</button>
            </form>
        </section>
    </main>
</body>
</php>
