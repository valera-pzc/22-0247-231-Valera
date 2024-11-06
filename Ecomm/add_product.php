<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    if ($name && $price && $stock !== '') {
        $sql = "INSERT INTO products (name, description, price, stock) VALUES ('$name', '$description', '$price', '$stock')";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error adding product: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form method="post" action="add_product.php">
        <input type="text" name="name" placeholder="Product Name" required><br>
        <textarea name="description" placeholder="Product Description"></textarea><br>
        <input type="number" step="0.01" name="price" placeholder="Price" required><br>
        <input type="number" name="stock" placeholder="Stock Quantity" required><br>
        <button type="submit">Add Product</button>
    </form>    
</body>
</html>
