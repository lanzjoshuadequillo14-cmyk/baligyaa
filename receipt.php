<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt - Dequillo Ecommerce</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: rgb(168, 165, 165);
            min-height: 100vh;
            color: rgb(10, 10, 10);
            display: flex;
            flex-direction: column;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }
        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        main {
            padding: 20px;
            flex: 1;
        }
        h1 {
            text-align: center;
            color: black;
        }
        .receipt-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .receipt-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .receipt-total, .receipt-cash, .receipt-change {
            font-weight: bold;
            margin-top: 10px;
            text-align: right;
        }
        .back-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">PALAMEGSS</div>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="cart.php">CART</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>RECEIPT</h1>
        <div class="receipt-container">
            <?php
            if (isset($_SESSION['last_transaction']) && !empty($_SESSION['last_transaction'])) {
                $transaction = $_SESSION['last_transaction'];
                $items = $transaction['items'];
                $cash = $transaction['cash'];
                $total = 0;

                foreach ($items as $item) {
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
                    echo "
                    <div class='receipt-item'>
                        <div>
                            <h3>{$item['name']}</h3>
                            <p>Price: \$" . number_format($item['price'], 2) . "</p>
                            <p>Quantity: {$item['quantity']}</p>
                        </div>
                        <div>
                            <p>\$" . number_format($subtotal, 2) . "</p>
                        </div>
                    </div>
                    ";
                }

                echo "<div class='receipt-total'><h3>Total: \$" . number_format($total, 2) . "</h3></div>";
                echo "<div class='receipt-cash'><h3>Cash: \$" . number_format($cash, 2) . "</h3></div>";
                echo "<div class='receipt-change'><h3>Change: \$" . number_format(max(0, $cash - $total), 2) . "</h3></div>";
            } else {
                echo "<p style='text-align: center;'>No transaction found.</p>";
            }
            ?>
        </div>
        <a href="index.php" class="back-btn">Back to Shop</a>
    </main>
</body>
</html>
