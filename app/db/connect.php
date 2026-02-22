<?php

$isLocalhost = in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']) 
    || in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']);

if ($isLocalhost) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config/db_config_local.php";
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config/db_config.php";
}


function connect_db(): PDO
{
    $config = get_config();
    $host = $config['host'] ?? 'localhost';
    $username = $config['username'] ?? '';
    $password = $config['password'] ?? '';
    $database = $config['database'] ?? '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        throw new RuntimeException("Unable to connect to the database.");
    }
}
