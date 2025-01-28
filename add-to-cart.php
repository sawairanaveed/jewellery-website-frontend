<?php
session_start();

// Get product ID from URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Simulate adding to cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (!in_array($id, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $id;
}

header('Location: shop.php');
