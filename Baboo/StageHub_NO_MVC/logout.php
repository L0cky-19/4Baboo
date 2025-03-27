<?php
session_start();
session_destroy(); // Supprime toutes les données de la session
header('Location: index.php'); // Redirige vers la page d'accueil
exit;
?>
