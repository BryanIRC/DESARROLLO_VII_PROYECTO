<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Define the base path for includes
define('BASE_PATH', __DIR__ . '/');
// Include the configuration file
require_once BASE_PATH . 'config.php';
// Include necessary files
//require_once BASE_PATH . 'src/Database.php';
// Get the action from the URL, default to 'list' if not set
$action = $_GET['action'] ?? 'list';
include 'views/layout.php';
