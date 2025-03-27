<?php
session_start();
session_destroy(); // Supprime toutes les données de la session
header('Location: ../../views/home\index.php'); // Redirige vers la page d'accueil
exit;
?>