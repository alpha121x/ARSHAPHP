<?php include("include/config.php") ?>

<?php 
if (isset($_POST['add-user'])){
    $user_id = $_POST['username'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $encrypt = md5($password);

    $add_user_qry = mysqli_query($cn,"INSERT INTO admin_users
    (user_id,user_name,password,email)
    VALUES('$user_id','$username','$encrypt','$email')");
    if($add_user_qry) {
      header("Location:add-user-profile.php");
    }
    else {
      echo "querry failed to add student";
    }
}
?>
<!-------end add ytype code -->