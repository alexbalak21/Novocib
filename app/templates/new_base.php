<?php
require_once __DIR__ . "/../components/autoloader.php";

/* ------------------------------
   DEFAULT VALUES
------------------------------ */

if (!isset($title)) {
    $title = "Novocib";
}

if (!isset($lang)) {
    $lang = "en";
}

if (!isset($metas) || trim($metas) === "") {
    // Default SEO description
    $metas = '<meta name="description" content="Novocib provides nucleotide analysis, enzymatic assays, and purified enzymes for biotechnology and research.">';
}

/* ------------------------------
   FONT AWESOME SOURCE
------------------------------ */

$host = $_SERVER['HTTP_HOST'];

if (str_starts_with($host, "localhost")) {
    // Local development → local FA
    $fontAwesome_source = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css";
} else {
    // Production → CDN FA (faster)
    $fontAwesome_source = "/FA6/css/all.min.css";
}

/* ------------------------------
   SECURITY: Prevent direct access
------------------------------ */

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    header("Location: /404");
    exit('Forbidden');
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>
    <?= $metas ?>

    <!-- BOOTSTRAP FIRST -->
    <link rel="stylesheet" href="/app/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link href="<?= $fontAwesome_source ?>" rel="stylesheet" crossorigin="anonymous">

    <!-- PRELOAD MAIN CSS -->
    <link rel="preload" href="/app/css/main.css" as="style">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/app/css/main.css">
    <link rel="stylesheet" href="/app/css/nav.css">

    <!-- JS (DEFERRED) -->
    <script src="/app/js/bootstrap.bundle.min.js" defer></script>
    <script src="/app/js/app.js" defer></script>

    <!-- GOOGLE ANALYTICS (PRODUCTION ONLY) -->
    <?php
    if (!str_starts_with($_SERVER["HTTP_HOST"], "localhost")) {
        echo '<script src="/app/js/google_analytics.js" defer></script>';
    }

    echo $additional_head ?? "";
    ?>

    <link rel="icon" type="image/x-icon" href="/app/favicon.ico">
</head>

<body>
    <?= Nav::bar() ?>


    <?php
    /* ------------------------------
       CONTENT BUFFERING
    ------------------------------ */

    global $content;
    $content = "";

    function addContent($passedContent = "")
    {
        global $content;
        $content .= $passedContent;
    }

    function render()
    {
        global $content;
        echo $content;
        echo Footer::gen();
        echo "</body></html>";
    }
    ?>
