<?php
include 'db.php'; // This includes your database connection code

ini_set('display_errors', 1); // Optional: to ensure error reporting is enabled
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure id is an integer to prevent SQL injection

    $sql = "DELETE FROM products WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect after successful deletion
        exit;
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "No product ID specified.";
}

