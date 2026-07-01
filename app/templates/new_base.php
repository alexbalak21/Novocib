<?php
require_once __DIR__ . "/../components/autoloader.php";

/* ------------------------------
   DEFAULT VALUES
------------------------------ */

if (!isset($title)) $title = "Novocib";
if (!isset($lang)) $lang = "en";

if (!isset($metas) || trim($metas) === "") {
    $metas = '<meta name="description" content="Novocib provides nucleotide analysis, enzymatic assays, and purified enzymes for biotechnology and research.">';
}

/* ------------------------------
   FONT AWESOME SOURCE (FA7)
------------------------------ */

// $fontAwesome_source = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css";
$fontAwesome_source = "/FA/css/all.min.css";

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
    <link rel="stylesheet" href="<?= $fontAwesome_source ?>">

    <!-- PRELOAD MAIN CSS -->
    <link rel="preload" href="/app/css/main.min.css" as="style">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/app/css/main.css">
    <link rel="stylesheet" href="/app/css/nav.css">

    <!-- JS -->
    <script src="/app/js/bootstrap.bundle.min.js" defer></script>
    <script src="/app/js/app.js" defer></script>

      <!-- GOOGLE ANALYTICS (PRODUCTION ONLY) -->
    <?php
    if (!str_starts_with($_SERVER["HTTP_HOST"], "localhost")) {
        echo '<script src="/app/js/google_analytics.js" defer></script>';
    }
    ?>

    <?= $additional_head ?? "" ?>

    <link rel="icon" type="image/x-icon" href="/app/favicon.ico">
</head>

<body>
    <?= Nav::bar() ?>

    <?php
    /* ------------------------------
   AUTO‑RENDER SYSTEM (WORKING)
------------------------------ */

    ob_start(); // capture all page output

    function render()
    {
        $content = ob_get_clean(); // everything printed so far
        echo $content;
        echo Footer::gen();

        // close HTML properly
        echo "</body></html>";
    }

    register_shutdown_function("render");
    ?>

    <!-- FA7 FIX: CENTER ICONS -->