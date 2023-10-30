<?php
define('DB_HOST', 'localhost'); // Your database host (usually 'localhost')
define('DB_USERNAME', 'root'); // Your database username
define('DB_PASSWORD', ''); // Your database password
define('DB_DATABASE', 'arshaphp'); // Your database name

require_once 'include/classes/meekrodb.2.3.class.php'; // Include the MeekroDB library

// Establish database connection using MeekroDB
DB::$host = DB_HOST;
DB::$user = DB_USERNAME;
DB::$password = DB_PASSWORD;
DB::$dbName = DB_DATABASE;

// Optional: Set additional configurations if needed
// DB::$encoding = 'utf8'; // Example: Set character encoding

?>
