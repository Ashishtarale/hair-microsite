<?php
$host = "148.72.245.251";  // Database host (default: localhost)
$dbname = "eterne-admin";  // Replace with your actual database name
$username = "santosh_s";  // Replace with your database username
$password = "dku^U,N1jYa8";  // Replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>