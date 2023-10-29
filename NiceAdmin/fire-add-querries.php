<?php include("config.php") ?>

<!-------add student code -->
<?php 
if (isset($_POST['add-student'])){
    $student_name = $_POST['student_name'];
    $student_father_name = $_POST['student_father_name'];
    $student_birth_date = $_POST['student_birth_date'];
    $student_gender = $_POST['student_gender'];
    $student_cnic_number = $_POST['student_cnic_number'];
    $student_mobile_number = $_POST['student_mobile_number'];
    $student_address = $_POST['student_address'];
    $student_course_name = $_POST['student_course_name'];
    $student_date_of_admission = $_POST['student_date_of_admission'];
    $student_image = $_POST['student_image'];
    $remarks = $_POST['remarks'];

    $add_student_qry = mysqli_query($cn,"INSERT INTO student(student_name,student_father_name,student_birth_date,student_gender,student_cnic_number,student_mobile_number,student_address,student_course_name,student_date_of_admission ,remarks,student_image)
    VALUES('$student_name','$student_father_name','$student_birth_date','$student_gender','$student_cnic_number','$student_mobile_number','$student_address','$student_course_name','$student_date_of_admission','$remarks','$student_image')");
    if($add_student_qry) {
      header("Location:add-student.php");
    }
    else {
      echo "querry failed to add student";
    }
}
?>
<!-------end add student code -->

<!-------add utype code -->
<?php 
if (isset($_POST['add-user'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $utype = $_POST['utype'];
    $photo = $_POST['photo'];
    $address = $_POST['address'];
    $about = $_POST['about-profile'];

    $encrypt = md5($password);

    $add_user_qry = mysqli_query($cn,"INSERT INTO admin
    (username,email,password,mobile,utype,photo,address,about)
    VALUES('$username','$email','$encrypt','$mobile','$utype','$photo','$address','$about')");
    if($add_user_qry) {
      header("Location:add-admin-profile.php");
    }
    else {
      echo "querry failed to add student";
    }
}
?>
<!-------end add ytype code -->
