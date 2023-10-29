<?php include("config.php") ?>

<!-------update student code -->
<?php 
if (isset($_POST['update-student'])){
  $student_name = $_POST['student_name'];
  $student_father_name = $_POST['student_father_name'];
  $student_birth_date = $_POST['student_birth_date'];
  $student_gender = $_POST['student_gender'];
  $student_cnic_number = $_POST['student_cnic_number'];
  $student_mobile_number = $_POST['student_mobile_number'];
  $student_address = $_POST['student_address'];
  $student_course_name = $_POST['student_course_name'];
  $student_date_of_admission = $_POST['student_date_of_admission'];
  $remarks = $_POST['remarks'];
  $student_image = $_POST['student_image'];

    $update_student_querry = mysqli_query($cn,"UPDATE student SET student_name='$student_name',student_father_name='$student_father_name',student_birth_date='$student_birth_date',student_gender='$student_gender',student_cnic_number='$student_cnic_number',student_mobile_number='$student_mobile_number',student_address='$student_address',student_course_name='$student_course_name',student_date_of_admission='$student_date_of_admission',remarks='$remarks',student_image='$student_image'");
    if($update_student_querry) {
      header("Location:view-students.php");
    }
    else {
      echo "update querry failed";
    }
}
?>
<!-------end update student code -->

<!-------update admin profile code -->
<?php 
if (isset($_POST['save-changes'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $utype = $_POST['utype'];
  $photo = $_POST['photo'];
  $address = $_POST['address'];
  $about = $_POST['about'];

    $update_admin_querry = mysqli_query($cn,"UPDATE admin SET username='$username',email='$email',mobile='$mobile',utype='$utype',photo='$photo',address='$address',about='$about'");
    if($update_admin_querry) {
      header("Location:admin-profile.php");
    }
    else {
      echo "update admin querry failed";
    }
}
?>
<!-------end update admin profile code -->

<!-------update admin profile code -->
<?php 
if (isset($_POST['update-password'])){
  $new_password = $_POST['renewpassword'];
  $encrypt_new_password = md5($new_password);

    $update_password_querry = mysqli_query($cn,"UPDATE admin SET password='$encrypt_new_password'");
    if($update_password_querry) {
      header("Location:admin-profile.php");
    }
    else {
      echo "update admin querry failed";
    }
}
?>
<!-------end update admin profile code -->
