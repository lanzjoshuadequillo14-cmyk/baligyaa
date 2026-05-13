<?php
session_start();

if(isset($_POST['checkout'])){
    $_SESSION['last_transaction'] = $_SESSION['cart'];
    unset($_SESSION['cart']);
    header("Location: receipt.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>

<h1 align="center">YOUR ORDER</h1>

<?php
$total = 0;

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $item){
        $sub = $item['price'] * $item['quantity'];
        $total += $sub;

        echo "<p>{$item['name']} - {$item['quantity']} pcs - $$sub</p>";
    }

    echo "<h3>Total: $$total</h3>";

    echo "
    <form method='post'>
        <input type='number' name='cash' placeholder='Enter Cash' required>
        <button type='submit' name='checkout'>DONE</button>
    </form>
    ";

}else{
    echo "<p>Cart is empty</p>";
}
?>

</body>
</html>