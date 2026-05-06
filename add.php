<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<style>
body { font-family: Arial; background: #f4f6f9; display:flex; justify-content:center; align-items:center; height:100vh; }
form { background:white; padding:20px; border-radius:10px; width:300px; }
input, textarea, button { width:100%; padding:10px; margin:5px 0; }
button { background:#27ae60; color:white; border:none; }
</style>
</head>
<body>

<form action="save.php" method="post">
<h2>Add Product</h2>
<input type="text" name="name" placeholder="Name" required>
<textarea name="description"></textarea>
<input type="number" step="0.01" name="price" placeholder="Price">
<input type="number" name="quantity" placeholder="Quantity">
<button type="submit">Save</button>
</form>

</body>
</html>