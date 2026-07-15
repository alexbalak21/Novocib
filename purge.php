<?php
// URL to purge (root page)
$url = "https://www.novocib.com/";

// Create a PURGE request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PURGE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute
$response = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

// Output result
echo "<h1>Varnish Purge</h1>";
echo "<p>Status: " . $info['http_code'] . "</p>";
echo "<pre>" . htmlspecialchars($response) . "</pre>";
?>
