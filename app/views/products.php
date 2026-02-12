<?php
global $title;
$title = "Products";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
render();
