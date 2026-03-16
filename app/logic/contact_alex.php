
<?php
// Handle CORS preflight (OPTIONS) requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header("Access-Control-Allow-Origin: https://www.alex-balak.online");
    header("Access-Control-Allow-Methods: POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    http_response_code(200);
    exit;
}

// CORS headers for actual requests
header("Access-Control-Allow-Origin: https://www.alex-balak.online");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

// Read JSON body
$data = json_decode(file_get_contents("php://input"), true);

// Validate JSON
if (!$data || !isset($data['name'], $data['email'], $data['message'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON or missing fields"]);
    exit;
}

$name = htmlspecialchars(trim($data['name']));
$email = filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars(trim($data['message']));

if (!$email) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid email"]);
    exit;
}

// Email settings
$to = "contact@alex-balak.online";
$to = "admin@novocib.com";
$subject = "New Contact Form Message from $name";

$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message\n";


// Use a domain-based From address
$from = "noreply@alex-balak.online";
$headers = "From: $from\r\n";
$headers .= "Reply-To: $email\r\n";


// Send email
if (mail($to, $subject, $body, $headers)) {
    echo json_encode(["success" => true, "message" => "Message sent"]);
} else {
    // Log the error for debugging
    error_log("Mail failed: to=$to, subject=$subject, headers=$headers");
    http_response_code(500);
    echo json_encode(["error" => "Failed to send email"]);
}
