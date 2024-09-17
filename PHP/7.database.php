<?php

echo "<h2>Database connection</h2>";

$servername = "localhost";
$username = "root";
$password = "database123";
$conn;

try {
    $conn = mysqli_connect($servername, $username, $password);
    echo "Connection was successful.";
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}

echo "<hr>";


// CREATING DATABASE

echo "<h3>Creating new database</h3>";

$sql = "CREATE DATABASE php_practice";
try {
    mysqli_query($conn,$sql);
    echo "Database created successfully.";

} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}

echo "<hr>";
