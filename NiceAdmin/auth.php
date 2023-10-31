<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check user credentials
    $check_user_qry = "SELECT user_id, username, user_type FROM admin_users WHERE username='$username' AND password='$password'";
    $result = $cn->query($check_user_qry);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION["username"] = $row['username'];
        $_SESSION["user_id"] = $row['username'];
        $_SESSION["user_type"] = $row['username'];

         header("Location: admin_users.php");
        }
    } else {
        // Invalid credentials, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
}
?>
