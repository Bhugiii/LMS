<?php

// Database configuration.
// For production, set environment variables instead of hardcoding credentials.
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'libraryms';

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($con->connect_error) {
    die('connection failed: ' . $con->connect_error);
}

?>