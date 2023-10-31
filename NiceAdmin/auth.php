<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check user credentials
    $check_user_qry = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $result = $cn->query($check_user_qry);

    if ($result->num_rows == 1) {
        // User found, redirect to a secure page
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
}
?>
