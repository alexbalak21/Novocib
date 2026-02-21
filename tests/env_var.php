<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/env-loader.php";

function dump_section($title, $data) {
    echo "<h2>$title</h2><pre>";
    print_r($data);
    echo "</pre>";
}

dump_section("\$_ENV", $_ENV);


echo '<br>';
echo '<br>';
// Accessing a specific environment variable
echo "DB_URL=" . ($_ENV['DB_URL'] ?? ' DB_URL not set');
echo '<br>';
