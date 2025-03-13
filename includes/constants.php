<?php
require_once __DIR__ . '/../classes/ConfigManager.php';

// Load configuration
ConfigManager::load();

// Define constants from configuration
$ADVERTISING_EMAIL_ADDRESS = ConfigManager::get('email.advertising');
$INFO_EMAIL_ADDRESS = ConfigManager::get('email.info');
$PRIVACY_EMAIL_ADDRESS = ConfigManager::get('email.privacy');
?>
