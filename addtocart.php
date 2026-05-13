<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = (int)$_POST['quantity'];

    // Check if the product is already in the cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }

    // If not, add it to the cart
    if (!$found) {
        $item = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        ];
        array_push($_SESSION['cart'], $item);
    }

    // Redirect to cart page
    header("Location: cart.php");
    exit;
}
?>
