<?php 
session_start();
if(!$_SESSION ['admin-user']) {
    header('Location:login.php');
}
?>