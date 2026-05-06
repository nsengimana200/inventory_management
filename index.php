<?php require 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Inventory System</title>

<style>
body {
    font-family: 'Segoe UI';
    background: #f4f6f9;
    padding: 30px;
}
.container {
    max-width: 1100px;
    margin: auto;
}
.card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
h1 {
    text-align: center;
}
a.button {
    background: #3498db;
    color: white;
    padding: 10px;
    text-decoration: none;
    border-radius: 5px;
}
.low {
    color: red;
    font-weight: bold;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
.actions a {
    padding: 5px 10px;
    color: white;
    border-radius: 5px;
    text-decoration: none;
}
.edit { background: orange; }
.delete { background: red; }
</style>

</head>
<body>

<div class="container">

<h1>📦 Inventory System</h1>

<div class="card">
    <a href="add.php" class="button">➕ Add Product</a>
</div>

<div class="card">
<table>
<tr>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Status</th>
<th>Actions</th>
</tr>

<?php
$stmt = $pdo->query("SELECT * FROM manage_products ORDER BY id DESC");
while ($row = $stmt->fetch()) {

    $status = $row['quantity'] < 5 ? "<span class='low'>Low Stock</span>" : "OK";

    echo "<tr>
        <td>{$row['name']}</td>
        <td>$ {$row['price']}</td>
        <td>{$row['quantity']}</td>
        <td>$status</td>
        <td class='actions'>
            <a href='edit.php?id={$row['id']}' class='edit'>Edit</a>
            <a href='delete.php?id={$row['id']}' class='delete' onclick=\"return confirm('Delete?')\">Delete</a>
        </td>
    </tr>";
}
?>

</table>
</div>

</div>

</body>
</html>