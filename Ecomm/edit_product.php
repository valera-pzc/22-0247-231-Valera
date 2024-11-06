<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "UPDATE products SET name='$name', description='$description', price='$price', stock='$stock' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form method="post" action="edit_product.php?id=<?php echo $id; ?>">
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required><br>
        <textarea name="description"><?php echo htmlspecialchars($product['description']); ?></textarea><br>
        <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br>
        <input type="number" name="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required><br>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
