<?php

echo "<pre>";

// ===============================
// 🔧 EDIT THESE VALUES
// ===============================
$host     = "localhost:3306";          
$username = "c2747590c_novocib_admin";
$password = "W~}IUfYv3}X,enSP^J&lhWW";
$database = "c2747590c_novocib";
// ===============================


// 1. Show PHP version
echo "PHP VERSION: " . PHP_VERSION . "\n";

// 2. Check PDO
echo "\nChecking PDO...\n";
if (!class_exists('PDO')) {
    echo "❌ PDO n'est PAS disponible\n";
    exit;
}

echo "✔️ PDO est disponible\n";

// 3. Try connection
try {
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

    $pdo = new PDO(
        $dsn,
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

    echo "✔️ Connexion MySQL réussie via PDO\n";

} catch (Exception $e) {
    echo "❌ Erreur PDO : " . $e->getMessage() . "\n";
}

echo "</pre>";
