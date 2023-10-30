<?php
require_once 'db_config.php';

session_start();

function isUserLoggedIn() {
    return isset($_SESSION['user_id']);
}

function authenticateUser($username, $password) {
    $user = DB::queryFirstRow("SELECT user_id, username, password FROM admin_users WHERE username = %s", $username);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        return true; // Authentication successful
    } else {
        return false; // Authentication failed
    }
}

function logoutUser() {
    session_unset();
    session_destroy();
    header("Location: login.php"); // Redirect to login page after logout
    exit();
}

// Example usage:
// To check if a user is logged in:
// if (isUserLoggedIn()) {
//     // User is logged in, perform actions accordingly
// } else {
//     // User is not logged in, redirect to login page or display an error message
// }

// To authenticate a user (usually after form submission):
// $username = $_POST['username'];
// $password = $_POST['password'];
// if (authenticateUser($username, $password)) {
//     // Authentication successful, redirect to a specific page
//     header("Location: dashboard.php");
//     exit();
// } else {
//     // Authentication failed, redirect back to login page with an error message
//     header("Location: login.php?error=1");
//     exit();
// }

// To log out a user:
// logoutUser();
?>
