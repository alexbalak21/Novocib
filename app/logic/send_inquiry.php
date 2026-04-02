<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/spam_detector.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$recipient = 'contact@novocib.com';

// 🛠 Error logging
function logError($message)
{
    $logFile = __DIR__ . '/../../logs/message.log';
    $dir = dirname($logFile);

    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }

    if (!is_writable($dir)) {
        error_log("Log directory not writable: $dir");
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

// ❌ If mail() is disabled
if (!function_exists('mail')) {
    logError("mail() function is not available");
    http_response_code(500);
    echo "<h2>Email functionality unavailable. Contact admin.</h2>";
    exit;
}

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Required fields
    $required = ['name', 'mail', 'message'];
    $missing = [];

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missing[] = $field;
        }
    }

    if (!empty($missing)) {
        logError("Missing fields: " . implode(', ', $missing));
        http_response_code(400);
        echo "Missing required fields: " . implode(', ', $missing);
        exit;
    }

    // 🔒 Sanitize input
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $visitor_email = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

    $product = !empty($_POST['product']) ? htmlspecialchars(trim($_POST['product']), ENT_QUOTES, 'UTF-8') : '';
    $volume  = !empty($_POST['volume'])  ? htmlspecialchars(trim($_POST['volume']), ENT_QUOTES, 'UTF-8') : '';
    $ref     = !empty($_POST['ref'])     ? htmlspecialchars(trim($_POST['ref']), ENT_QUOTES, 'UTF-8') : '';
    $price   = !empty($_POST['price'])   ? htmlspecialchars(trim($_POST['price']), ENT_QUOTES, 'UTF-8') : '';

    // Build inquiry subject
    $subject = "[Inquiry]";
    if ($product) $subject .= " $product";
    if ($volume)  $subject .= " - $volume";
    if ($price)   $subject .= " - $price €";
    if ($ref)     $subject .= " (Ref: #$ref)";

    // 1️⃣ Detect spam BEFORE saving
    $isSpam = is_gibberish($message);

    if ($isSpam) {
        $name = "[SPAM SUSPECTED] - $name";
    }

    // 2️⃣ Save message (spam or not)
    $MessageRepo = new Message_repository();
    $MessageRepo->save_message($name, $visitor_email, $subject, $message);

    // 3️⃣ If spam → stop here (no email)
    if ($isSpam) {
        logError("Spam detected (gibberish inquiry): $message");
        http_response_code(202);
        header("Location: /message-sent-successfully");
        exit;
    }

    // 4️⃣ Build email content
    $email_body =
        "You have received a new Inquiry:\n\n" .
        "From: $name\n" .
        "Email: $visitor_email\n" .
        (!empty($ref) ? "Ref: #$ref\n" : '') .
        (!empty($product) ? "Product: $product\n" : '') .
        (!empty($volume) ? "Volume: $volume\n" : '') .
        (!empty($price) ? "Price: $price €\n" : '') .
        "\nMessage:\n$message";

    $headers = implode("\r\n", [
        'From: contact@novocib.com',
        'Reply-To: ' . $visitor_email,
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/plain; charset=UTF-8'
    ]);

    // 5️⃣ Send email
    $sent = @mail($recipient, $subject, $email_body, $headers);

    if ($sent) {
        http_response_code(202);
        header("Location: /message-sent-successfully");
        exit;
    } else {
        $error = error_get_last();
        logError("Failed to send email: " . ($error['message'] ?? 'Unknown error'));
        http_response_code(503);
        header("Location: /message-error");
        exit;
    }

} else {
    http_response_code(405);
    header("Location: /404");
    exit;
}
