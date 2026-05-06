<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare("UPDATE manage_products SET name=?, price=?, quantity=? WHERE id=?");
    $stmt->execute([$name, $price, $quantity, $id]);

    header("Location: index.php");
    exit;
}