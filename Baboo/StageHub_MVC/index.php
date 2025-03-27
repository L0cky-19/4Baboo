<?php

require_once './controllers/OffresController.php';
require_once './controllers/EntreprisesController.php';
require_once './controllers/WishlistController.php';
require_once './controllers/HomeController.php';

// Récupérer l'URI
$uri = $_GET["uri"];

// Retirer le préfixe "/StageHub/public" de l'URI
//$basePath = '/StageHub/public';
//if (strpos($uri, $basePath) === 0) {
//    $uri = substr($uri, strlen($basePath));
//}

// Routage
if ($uri === 'offres') {
    $controller = new OffresController();
    $controller->index();
} elseif ($uri === 'entreprises') {
    $controller = new EntreprisesController();
    $controller->index();
} elseif ($uri === 'wishlist') {
    $controller = new WishlistController();
    $controller->index();
} elseif ($uri === 'home') {
    $controller = new HomeController();
    $controller->index();
}  else {
    echo "404 - Page non trouvée";
}
