<?php
// db_connect.php

// Include the database configuration file
require_once 'db_config.php';

try {
    // Create a new PDO instance
    $dsn = "$db_type:host=$db_host;dbname=$db_name";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
    echo "Connected successfully to the database.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
