<?php
require_once 'include/classes/meekrodb.2.3.class.php'; // Include the MeekroDB library
require_once 'db_config.php'; // Include your database configuration

if(isset($_POST['user_id']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['user_type'])){
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];
    $user_image = $_POST['user_image'];

    // Update user details in the admin_users table based on the ID
    DB::update('admin_users', array('username' => $username, 'email' => $email, 'user_type' => $user_type,'user_image' => $user_image, 'user_id=%i', $user_id));

    // Redirect back to the user details page after the update
    header("Location: edit-user.php?id=$user_id");
    exit();
} else {
    echo "Invalid request.";
}
?>
