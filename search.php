<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "127.0.0.1";  // Changed from "localhost" to "127.0.0.1"
$username = "root"; // Your username
$password = ""; // Your password
$dbname = "search_db"; // Your database name
$socket = "/data/data/com.termux/files/usr/var/mysql/mysql.sock"; // Path to the MySQL socket

$conn = new mysqli($servername, $username, $password, $dbname, null, $socket);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$conn->close();
?>