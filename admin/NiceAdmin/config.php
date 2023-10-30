<?php
require_once 'include/classes/meekrodb.2.3.class.php'; // Include the MeekroDB library
require_once 'db_config.php'; // Include your database configuration

// Establish database connection using MeekroDB
DB::$host = 'localhost'; // Your database host (usually 'localhost')
DB::$user = 'username'; // Your database username
DB::$password = ''; // Your database password
DB::$dbName = 'arshaphp'; // Your database name


?>
