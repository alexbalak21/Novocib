<?php
// Force no-cache headers (bypass browser + proxy if allowed)
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");

// Show current server time
echo "<h1>Cache Test</h1>";
echo "<p>Server time: " . date("Y-m-d H:i:s") . "</p>";

// Generate a random number to detect caching
echo "<p>Random: " . rand(100000, 999999) . "</p>";

// Show request headers (to detect proxy behavior)
echo "<h2>Request Headers</h2>";
foreach (getallheaders() as $key => $value) {
    echo "<p><strong>$key:</strong> $value</p>";
}

// Show response headers (to confirm no-cache)
echo "<h2>Response Headers</h2>";
echo "<pre>";
header_remove(); // show what PHP set
print_r(headers_list());
echo "</pre>";
?>
