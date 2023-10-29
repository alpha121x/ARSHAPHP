<?php
    include ("config.php");     
    $get_student_id = $_GET['id'];
    $delete_student_query = "DELETE FROM student WHERE id = $get_student_id";

    $res = mysqli_query($cn,$delete_student_query);
    if($res) {
        header("Location:view-students.php");
    } 
    else {
        header("Location:view-students.php");
    }
?>