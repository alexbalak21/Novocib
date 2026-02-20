<?php
require_once "app/logic/env-loader.php";

function dump_section($title, $data) {
    echo "<h2>$title</h2><pre>";
    print_r($data);
    echo "</pre>";
}

dump_section("getenv()", getenv());
dump_section("\$_ENV", $_ENV);
dump_section("\$_SERVER", $_SERVER);
