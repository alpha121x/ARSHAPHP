<?php   include('config.php');?> 

<?php
//create query 
if(isset($_POST['update-user'])){
    $user_edit_page_id=$_POST['user-edit-page-id'];
    $username=$_POST['username'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];
    $user_image = $_POST['user_image'];
	

//update query
$update_user_qry = mysqli_query($cn,"UPDATE admin_users SET username = '$username', email = '$email', user_type = '$user_type', user_image = '$user_image' WHERE user_id = $user_edit_page_id");
if($update_user_qry){
    header("Location:admin_users.php");
}
else {
    echo mysqli_error($cn);
}
}
?> 

<?php
//create query 
if(isset($_POST['update-password'])){
    $password = $_POST['renewpassword'];
	

//update query
$update_password_qry = mysqli_query($cn,"UPDATE admin_users SET password = '$password' LIMIT 1");
if($update_password_qry){
    header("Location:admin-profile.php");
}
else {
    echo mysqli_error($cn);
}
}
?> 


<?php
//create query 
if(isset($_POST['update-link'])){
    $edit_menu_page_id=$_POST['edit-menu-page-id'];
    $link_text = mysqli_real_escape_string($cn, $_POST['link_name']);
    $link_url = mysqli_real_escape_string($cn, $_POST['link_url']);
	

//update query
$update_menu_qry = mysqli_query($cn,"UPDATE menu_links SET link_text='$link_text', url='$link_url' WHERE link_id = $edit_menu_page_id");
if($update_menu_qry){
    header("Location:view-menu_links.php");
}
else {
    echo mysqli_error($cn);
}
}
?> 