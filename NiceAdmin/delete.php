<?php
include ("config.php");
// create delete query ,after deletng the data move  back to the user view. page...
$get_user_id = $_GET['deleteid'];
$delete_user_query = "DELETE FROM admin_users WHERE user_id = $get_user_id";

$res = mysqli_query($cn,$delete_user_query);
if($res){
    header("Location:admin_users.php");
}
else {
    header("Location:admin_users.php");
}
?>