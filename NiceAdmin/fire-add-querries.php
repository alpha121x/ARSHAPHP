<?php require('config.php'); ?>
<?php
//create query 
  if(isset($_POST['add-user'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $user_type = $_POST['user_type'];
      $user_image = $_POST['user_image'];
 
	
//insert query
$add_user_query = mysqli_query($cn,"INSERT INTO admin_users (username,password,email,user_type,user_image)
VALUES('$username','$password','$email','$user_type','$user_image')");

if($add_user_query){
    header("Location:add-user-profile.php");
}
else{
	echo mysqli_error($cn);	
}
}
?>

