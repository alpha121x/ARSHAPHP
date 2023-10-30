<?php
require_once 'include/classes/meekrodb.2.3.class.php'; // Include the MeekroDB library
require_once 'db_config.php'; // Include your database configuration

if (isset($_POST['add-user'])){
    $username = $_POST['username'];
    $password = password_hash('password', PASSWORD_DEFAULT); // Hash the password for security
    $email = $_POST['email'];
    $user_image = $_POST['user_image'];
    $user_about = $_POST['about-profile'];
    $user_type = $_POST['user_type'];
  }

// Insert data into admin_users table
DB::insert('admin_users', array(
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'user_type' => $user_type,
    'user_image' => $user_image,
    'user_about' => $user_about
));

// Check if the insertion was successful
if (DB::affectedRows() > 0) {
    header("Location:add-user-profile.php");
  } else {
      echo "Error: Unable to insert user data.";
  }
  ?>