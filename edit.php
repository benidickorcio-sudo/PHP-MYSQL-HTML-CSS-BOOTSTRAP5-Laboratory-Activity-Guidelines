<?php
include ("dbcon.php");

$id = isset($_GET["id"]) ? intval($_GET["id"]) :0;
$user = null;


if ($id > 0) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id");