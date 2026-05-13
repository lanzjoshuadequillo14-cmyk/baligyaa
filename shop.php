<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNESSENTIAL</title>
</head>

<style>
/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* BODY */
body {
    background-color: #f5f5f5;
}

/* HEADER */
header {
    background-color: #111;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

/* NAV */
.cart-link {
    color: white;
    text-decoration: none;
    font-weight: bold;
    background: #27ae60;
    padding: 8px 15px;
    border-radius: 5px;
}

.cart-link:hover {
    background: #2ecc71;
}

/* MAIN */
main {
    padding: 30px;
    text-align: center;
}

h1 {
    margin-bottom: 30px;
}

/* PRODUCT GRID */
.products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

/* PRODUCT CARD */
.product {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease;
}

.product:hover {
    transform: translateY(-5px);
}

/* IMAGE */
.product img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

/* INFO */
.product-info {
    padding: 15px;
}

.product-info h3 {
    margin-bottom: 10px;
}

.product-info p {
    font-size: 18px;
    font-weight: bold;
    color: #27ae60;
    margin-bottom: 10px;
}

/* QUANTITY + BUTTON */
.quantity-container {
    display: flex;
    gap: 10px;
    align-items: center;
    justify-content: center;
}

.quantity-input {
    width: 60px;
    padding: 5px;
    text-align: center;
}

/* BUTTON */
.buy-btn {
    background-color: #111;
    color: white;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 5px;
}

.buy-btn:hover {
    background-color: #333;
}
</style>

<body>

<header>
    <div class="logo">UNESSENTIAL</div>

    <?php
    // COUNT CART ITEMS
    $cart_count = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $cart_count += $item['quantity'];
        }
    }
    ?>

    <nav>
        <a href="cart.php" class="cart-link">
            🛒 CART (<?php echo $cart_count; ?>)
        </a>
    </nav>
</header>

<main>
    <h1>OUR PRODUCTS</h1>
    <div class="products">
        <?php
        $products = [
            ['id' => 1, 'name' => 'Frying Pan', 'price' => 19.99, 'image' => 'PICS/PAN.png'],
            ['id' => 2, 'name' => 'Sala Set Wood', 'price' => 29.99, 'image' => 'PICS/sala.png'],
            ['id' => 3, 'name' => 'Rechargeable Fan', 'price' => 39.99, 'image' => 'PICS/fan.png'],
            ['id' => 4, 'name' => 'Apple Watch Series 8', 'price' => 19.99, 'image' => 'PICS/watch.png'],
            ['id' => 5, 'name' => 'Smart Google TV', 'price' => 24.99, 'image' => 'PICS/tv.png'],

            ['id' => 6, 'name' => 'Washing Machine', 'price' => 19.99, 'image' => 'PICS/wm.png'],
            ['id' => 7, 'name' => 'Bluetooth Speakers', 'price' => 29.99, 'image' => 'PICS/s.png'],
            ['id' => 8, 'name' => 'Portable Spotlight Flashlight', 'price' => 39.99, 'image' => 'PICS/f.png'],
            ['id' => 9, 'name' => 'Convertible Refrigerator', 'price' => 19.99, 'image' => 'PICS/r.png'],
            ['id' => 10, 'name' => 'Electric Oven', 'price' => 24.99, 'image' => 'PICS/o.png'],

            ['id' => 11, 'name' => 'Bed Frame', 'price' => 19.99, 'image' => 'PICS/b.png'],
            ['id' => 12, 'name' => 'Wooden Chair', 'price' => 29.99, 'image' => 'PICS/chair.png'],
            ['id' => 13, 'name' => 'Office Chair', 'price' => 39.99, 'image' => 'PICS/ofchair.png'],
            ['id' => 14, 'name' => 'Inverter Generator', 'price' => 19.99, 'image' => 'PICS/generator.png'],
            ['id' => 15, 'name' => 'Socket', 'price' => 24.99, 'image' => 'PICS/socket.png'],

            ['id' => 16, 'name' => 'Wall Drill Barena', 'price' => 39.99, 'image' => 'PICS/barena.png'],
            ['id' => 17, 'name' => 'Grinder', 'price' => 19.99, 'image' => 'PICS/grinder.png'],
            ['id' => 18, 'name' => 'Metal Saw', 'price' => 24.99, 'image' => 'PICS/saw.png'],
        ];

        foreach ($products as $product) {
            echo "
            <div class='product'>
                <img src='{$product['image']}' alt='{$product['name']}'>
                <div class='product-info'>
                    <h3>{$product['name']}</h3>
                    <p>\${$product['price']}</p>
                    <form method='post' action='add_to_cart.php'>
                        <input type='hidden' name='product_id' value='{$product['id']}'>
                        <input type='hidden' name='product_name' value='{$product['name']}'>
                        <input type='hidden' name='product_price' value='{$product['price']}'>
                        <div class='quantity-container'>
                            <input type='number' name='quantity' class='quantity-input' value='1' min='1'>
                            <button type='submit' class='buy-btn'>Buy Now</button>
                        </div>
                    </form>
                </div>
            </div>
            ";
        }
        ?>
    </div>
</main>

</body>
</html>