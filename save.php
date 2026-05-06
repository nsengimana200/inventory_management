<?php
require 'db.php';

$stmt = $pdo->prepare("INSERT INTO manage_products (name, description, price, quantity) VALUES (?, ?, ?, ?)");
$stmt->execute([
    $_POST['name'],
    $_POST['description'],
    $_POST['price'],
    $_POST['quantity']
]);

header("Location: index.php");