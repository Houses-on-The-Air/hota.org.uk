<?php

// Database configuration
$db_type = getenv('DB_TYPE') ?: 'mysql'; // Default to 'mysql' if not set
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_name = getenv('DB_NAME') ?: 'your_database_name';
$db_user = getenv('DB_USER') ?: 'your_database_user';
$db_pass = getenv('DB_PASS') ?: 'your_database_password';
?>
