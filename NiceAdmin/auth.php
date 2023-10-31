<?php
// for session start
 session_start();
// session create => $_SESSION['user']
if(!$_SESSION['user']){
    header("Location:login.php");
}
?>