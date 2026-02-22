<?php

echo "Version 3.0 <br>";
require_once __DIR__ . "/config/db_config.php";

$get_config = get_config();
$host = $get_config['host'] ?? 'localhost';
$username = $get_config['username'] ?? '';
$password = $get_config['password'] ?? '';
$database = $get_config['database'] ?? '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
    } catch (PDOException $e) {
        echo ("Database connection failed: " . $e->getMessage());
        throw new RuntimeException("Unable to connect to the database.");
    }
