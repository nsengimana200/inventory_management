<?php
require 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM manage_products WHERE id=?");
$stmt->execute([$id]);
$p = $stmt->fetch();
?>

<form action="update.php" method="post">
<input type="hidden" name="id" value="<?= $p['id'] ?>">
<input type="text" name="name" value="<?= $p['name'] ?>">
<input type="number" name="price" value="<?= $p['price'] ?>">
<input type="number" name="quantity" value="<?= $p['quantity'] ?>">
<button>Update</button>
</form>