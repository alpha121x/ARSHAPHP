<?php
require_once'config.php';
require_once 'db_config.php';

if (isset($_POST['add-user'])){
  $username = $_POST['username'];
  $password = password_hash('password', PASSWORD_DEFAULT); // Hash the password for security
  $email = $_POST['email'];
  $user_image = $_POST['user_image'];
  $user_about = $_POST['about-profile'];
  $user_type = $_POST['user_type'];
}
 

// Insert data into the admin_users table
DB::insert('admin_users', [
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'user_image' => $user_image,
    'user_about' => $user_about,
    'user_type' => $user_type
]);

// Check if the insertion was successful
if (DB::affectedRows() > 0) {
  header("Location:add-user-profile.php");
} else {
    echo "Error: Unable to insert user data.";
}
?>
