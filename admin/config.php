<?php

$dbhost = 'localhost';
$dbname = 'alodokter';
$dbuser = 'root';
$dbpass = '';

try {
    $pdo = new PDO("mysql:host={$dbhost};dbname{$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection Error Bro: " . $exception->getMessage();
}

define("BASE_URL", "http://localhost/alodokter/admin/");
// define("ADMIN_URL", BASE_URL . "admin/");

// Setup mailtrap.io
define("SMPT_HOST", "sandbox.smtp.mailtrap.io");
define("SMTP_PORT", "587");
define("SMTP_USERNAME", "YOUR SMTP USERNAME");
define("SMTP_PASSWORD", "YOUR_SMTP_PASSWORD");
