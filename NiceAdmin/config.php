<?php
define('DB_HOST', 'localhost'); // Database host (usually 'localhost')
define('DB_USERNAME', 'root'); // Your database username
define('DB_PASSWORD', ''); // Your database password
define('DB_DATABASE', 'arshaphp'); // Your database name

// TODO:: remove mysqli and use MeekroDB everywhere
// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>