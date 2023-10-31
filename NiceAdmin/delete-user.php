<?php
require_once 'include/classes/meekrodb.2.3.class.php'; // Include the MeekroDB library
require_once 'db_config.php'; // Include your database configuration

if (isset($_GET['id'])) {
    $user_id = $_GET['id']; // Get user ID from URL parameter

    // Delete user from admin_users table based on the ID
    DB::delete('admin_users', 'user_id=%i', $user_id);

    // Redirect back to the page displaying users after deletion
    header("Location:admin-users.php");
} else {
    // Handle the case when no user ID is provided in the URL
    echo "Invalid request.";
}
?>
