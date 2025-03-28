<?php
session_start();

// Vérifier si l'utilisateur est connecté
$isConnected = isset($_SESSION['user']); // Si une session utilisateur existe
$userName = $isConnected ? htmlspecialchars($_SESSION['user']['prenom']) : null;

// Déterminer la page actuelle
$currentPage = basename($_SERVER['PHP_SELF']); // Récupère le nom du fichier actuel
?>

<header>
    <h1>StageHUB</h1>
    <div id="user-buttons">
        <?php if ($isConnected): ?>
            <!-- Bouton "Bonjour, [Nom]" -->
            <button class="big-button user-name" onclick="toggleUserMenu()">Bonjour, <?= $userName ?></button>
            <div id="user-menu" class="hidden">
                <a href="logout.php">Déconnexion</a>
            </div>
        <?php else: ?>
            <!-- Bouton "Connexion" -->
            <button id="loginButton" class="big-button" onclick="toggleElement('loginForm')">Connexion</button>
        <?php endif; ?>
    </div>
    <nav>
        <ul>
            <li>
                <!-- Désactiver le lien si on est sur la page "index.php" -->
                <?php if ($currentPage === 'index.php'): ?>
                    <a class="nav-link">Accueil</a>
                <?php else: ?>
                    <a href="index.php">Accueil</a>
                <?php endif; ?>
            </li>
            <li>
                <!-- Désactiver le lien si on est sur la page "offres.php" -->
                <?php if ($currentPage === 'offres.php'): ?>
                    <a class="nav-link">Offres</a>
                <?php else: ?>
                    <a href="offres.php">Offres</a>
                <?php endif; ?>
            </li>
            <li>
                <!-- Désactiver le lien si on est sur la page "entreprises.php" -->
                <?php if ($currentPage === 'entreprises.php'): ?>
                    <a class="nav-link">Entreprises</a>
                <?php else: ?>
                    <a href="entreprises.php">Entreprises</a>
                <?php endif; ?>
            </li>
            <li>
                <!-- Désactiver le lien si on est sur la page "whishlist.php" -->
                <?php if ($currentPage === 'whishlist.php'): ?>
                    <a class="nav-link">Wishlist</a>
                <?php else: ?>
                    <a href="whishlist.php">Wishlist</a>
                <?php endif; ?>
            </li>
        </ul>
    </nav>

    <!-- Formulaire de connexion -->
    <div id="loginForm" class="hidden">
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        <div id="errorMessage" style="display: none;">L'email ou le mot de passe est incorrect.</div>
    </div>
</header>

<script>
    function toggleUserMenu() {
        const userMenu = document.getElementById('user-menu');
        userMenu.classList.toggle('active');
    }

    function toggleElement(id) {
        document.getElementById(id).classList.toggle("active");
    }
</script>
