<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/spam_detector.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/rate_limit.php";

// Limit: 1 message every 10 seconds per IP
rate_limit_once_every('contact_form', 10);

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Email recipient
$recipient = 'contact@novocib.com';

// Error logging function
function logError($message)
{
    $logFile = __DIR__ . '/../../logs/message.log';
    $dir = dirname($logFile);

    if (!is_dir($dir)) {
        if (!@mkdir($dir, 0755, true)) {
            error_log("Failed to create log directory: $dir");
            return;
        }
    }

    if (!is_writable($dir)) {
        error_log("Log directory is not writable: $dir");
        return;
    }

    $timestamp = date('Y-m-d H:i:s');
    $script = __FILE__;
    $uri = $_SERVER['REQUEST_URI'] ?? 'N/A';
    $method = $_SERVER['REQUEST_METHOD'] ?? 'N/A';

    $logMessage = "[$timestamp] ERROR in $script | URI: $uri | Method: $method | $message" . PHP_EOL;

    @file_put_contents($logFile, $logMessage, FILE_APPEND);
    error_log($logMessage);
}

// Check if mail() exists
if (!function_exists('mail')) {
    logError("mail() function is not available on this server");
    http_response_code(500);
    echo "<h2 style='text-align: center; padding-top:40px;'>Email functionality is not available on this server. Please contact the administrator.</h2>";
    exit;
}

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Honeypot check
    if (!empty($_POST['website'])) {
        logError("Honeypot triggered by IP: " . $_SERVER['REMOTE_ADDR']);
        http_response_code(202);
        header("Location: /message-sent-successfully");
        exit;
    }

    // Required fields
    $required = ['name', 'mail', 'need', 'message'];
    $missing = [];

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missing[] = $field;
        }
    }

    if (!empty($missing)) {
        $errorMsg = "Missing required fields: " . implode(', ', $missing);
        logError("Form validation failed: $errorMsg");
        http_response_code(400);
        echo $errorMsg;
        exit;
    }

    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $visitor_email = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
    $need = htmlspecialchars(trim($_POST['need']), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

    // Optional volume
    if (!empty($_POST['volume'])) {
        $volume = htmlspecialchars(trim($_POST['volume']), ENT_QUOTES, 'UTF-8');
        $need .= " - volume: $volume";
    }

    // Detect spam BEFORE saving
    $isSpam = is_gibberish($message);

    if ($isSpam) {
        // Mark name BEFORE saving so DB stores the tag
        $name = "[SPAM SUSPECTED] - $name";
    }

    //  Save message (spam or not)
    $MessageRepo = new Message_repository();
    $MessageRepo->save_message($name, $visitor_email, $need, $message);

    //  If spam → stop here (no email)
    if ($isSpam) {
        logError("Spam detected (gibberish message): $message");
        http_response_code(202);
        header("Location: /message-sent-successfully");
        exit;
    }

    // Prepare email for legit messages
    $email_subject = "[REQUEST]: $need";
    $email_body = "new message received via NOVOCIB.COM:\n\n" .
        "Name: $name\n" .
        "Email: $visitor_email\n" .
        "Need: $need\n\n" .
        "Message:\n$message";

    $headers = [
        'From: contact@novocib.com',
        'Reply-To: ' . $visitor_email,
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/plain; charset=UTF-8'
    ];

    $headers = implode("\r\n", $headers);

    // 5️⃣ Send email
    $sent = @mail($recipient, $email_subject, $email_body, $headers);

    if ($sent) {
        http_response_code(202);
        header("Location: /message-sent-successfully");
        exit;
    } else {
        $error = error_get_last();
        $errorMessage = "Failed to send email to $recipient. " . ($error['message'] ?? 'Unknown error');
        logError($errorMessage);
        logError("Email details - Subject: $email_subject, From: $visitor_email");
        http_response_code(503);
        header("Location: /message-error");
        exit;
    }
} else {
    http_response_code(405);
    header("Location: /404");
    exit;
}
