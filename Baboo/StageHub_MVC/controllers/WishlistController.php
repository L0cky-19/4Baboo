<?php
require_once './models/WishlistModel.php';

class WishlistController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /public/index.php');
            exit;
        }

        $model = new WishlistModel();
        $wishlist = $model->getWishlistByUserId($_SESSION['user']['id']);
        require './views/wishlist/index.php';
    }
}
