<?php
require_once 'config.php';
require_once 'include/classes/meekrodb.2.3.class.php'; // Make sure to download and include the MeekroDB library

// Establish database connection using MeekroDB
DB::$host = 'localhost';
DB::$user = 'username';
DB::$password = '';
DB::$dbName = 'arshaphp';
DB::$error_handler = 'db_error_handler'; // Optional: custom error handler function

?>
