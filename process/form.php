<?php
require_once("includes/db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['goods'];
    $service = $_POST['services'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $availability = $_POST['availability'];

    $stmt = $conn->prepare("INSERT INTO goods_services (product, service, price, quantity, availability) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdis", $product, $service, $price, $quantity, $availability);

    if ($stmt->execute()) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
