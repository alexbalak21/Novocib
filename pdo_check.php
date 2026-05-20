<?php

echo "<pre>";

echo "PHP VERSION: " . PHP_VERSION . "\n";

if (class_exists('PDO')) {
    echo "✔️ PDO is available\n";
} else {
    echo "❌ PDO is NOT available\n";
}

echo "</pre>";
