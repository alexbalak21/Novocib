<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/rate_limit.php";

// Apply rate limit: 1 request every 10 seconds
rate_limit_once_every('test_endpoint', 10);

echo "<h1>Request allowed</h1>";
echo "<p>Time: " . date('H:i:s') . "</p>";
echo "<p>Your IP: " . $_SERVER['REMOTE_ADDR'] . "</p>";
