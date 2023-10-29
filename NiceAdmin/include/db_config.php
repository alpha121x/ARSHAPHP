<?php
require_once 'NiceAdmin/include/config.php';
require_once 'NiceAdmin/include/classes/meekrodb.2.3.class.php'; // Make sure to download and include the MeekroDB library

// Establish database connection using MeekroDB
DB::$host = DB_HOST;
DB::$user = DB_USERNAME;
DB::$password = DB_PASSWORD;
DB::$dbName = DB_DATABASE;
DB::$error_handler = 'db_error_handler'; // Optional: custom error handler function

function db_error_handler($params) {
    // Handle database errors if needed
    // For example: log the errors, display a user-friendly message, etc.
    // You can customize this function according to your requirements
}

// Now, you can use MeekroDB functions to interact with the database
?>
