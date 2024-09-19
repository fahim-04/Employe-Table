<?php
include 'config.php';

// Use the constants defined in config.php
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("set names utf8");

} catch (\PDOException $e) {
    die($e->getMessage());
}

