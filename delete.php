<?php
require 'db.php';

$stmt = $pdo->prepare("DELETE FROM manage_products WHERE id=?");
$stmt->execute([$_GET['id']]);

header("Location: index.php");