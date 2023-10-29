<?php include("auth.php") ?>
<?php include("config.php") ?>
<?php
include("config.php");
$get_student_id = $_GET['id'];
$qry = "SELECT * FROM student WHERE id ='$get_student_id'";
$result = $cn->query($qry);
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_rows > 0) {
    $student_id = $row['id'];
    $student_name = $row['student_name'];
    $student_father_name = $row['student_father_name'];
    $student_birth_date = $row['student_birth_date'];
    $student_gender = $row['student_gender'];
    $student_cnic_number = $row['student_cnic_number'];
    $student_mobile_number = $row['student_mobile_number'];
    $student_address = $row['student_address'];
    $student_course_name = $row['student_course_name'];
    $student_date_of_admission = $row['student_date_of_admission'];
    $remarks = $row['remarks'];
    $student_image = $row['student_image'];
} else {
    header('Location:view-students.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Student Info - Form</title>
    <?php include "include/linked-files.php" ?>
</head>

<body>

    <?php include "include/header-nav.php" ?>

    <?php include "include/side-nav.php" ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Student Form</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Edit Students Info</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Students Detail </h5>

                 <!-- Horizontal Form -->
              <form method="post" action="fire-update-querries.php" <input type="hidden" name='student-edit-page-id'
                                    value='<?php echo $student_id; ?>'>
                  <div class="row mb-3">
                  <label for="inputname" class="col-sm-2 col-form-label">Student Image</label>
                  <div class="col-sm-2">
                        <img src="assets/img/<?php echo $student_image; ?>" class="form-control" alt="Profile">
                        <div class="pt-2 mb-3">
                          <a href="" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                  </div>                   
                <div class="row mb-3">
                  <label for="inputname" class="col-sm-2 col-form-label">Student Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value='<?php echo $student_name; ?>'  placeholder="Your Name Here ..." name="student_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputfname" class="col-sm-2 col-form-label">Student Father Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value='<?php echo $student_father_name; ?>' placeholder="Your Father Name ..." name="student_father_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputdob" class="col-sm-2 col-form-label">Student Birth Date</label>
                  <div class="col-sm-6">
                  <input type="date" class="form-control" value='<?php echo $student_birth_date; ?>' placeholder="Your Birth Date ..." name="student_birth_date">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputgender" class="col-sm-2 col-form-label">Student Gender</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" value='<?php echo $student_gender; ?>' placeholder="Your Gender ..." name="student_gender">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputcnic" class="col-sm-2 col-form-label">Student Cnic Number</label>
                  <div class="col-sm-6">
                  <input type="text" value='<?php echo $student_cnic_number; ?>' placeholder="xxxxx-xxxxxxx-x" name="student_cnic_number" class="form-control input-sm" data-required="true" data-type="url">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputmobile" class="col-sm-2 col-form-label">Student Mobile Number</label>
                  <div class="col-sm-6">
                  <input type="text" value='<?php echo $student_mobile_number; ?>' placeholder="xxxx-xxxxxxx" name="student_mobile_number" class="form-control input-sm" data-required="true" data-type="url">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputaddress" class="col-sm-2 col-form-label">Student Address</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" value='<?php echo $student_address; ?>' placeholder="Your Address ..." name="student_address">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="input-course-dropdown" class="col-sm-2 col-form-label">Student Course Name</label>
                  <div class="col-sm-6">
                  <select class="form-control" value='' name="student_course_name" id="student_course_name">
                  <option><?php echo $student_course_name; ?></option>
                    <option value="BS-IT">BS-IT</option>
                    <option value="BS-CS">BS-CS</option>
                    <option value="BS-AI">BS-AI</option>
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputdoadmission" class="col-sm-2 col-form-label">Student Admission Date</label>
                  <div class="col-sm-6">
                  <input type="date" class="form-control" value='<?php echo $student_date_of_admission; ?>' placeholder="Your Admission Date ..." name="student_date_of_admission">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputremarks" class="col-sm-2 col-form-label">Remarks</label>
                  <div class="col-sm-6">
                  <textarea class="form-control" name="remarks" id="" cols="30" rows="10"><?php echo $remarks; ?></textarea>
                  </div>
                </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="update-student"><i class='bx bx-upload'></i> Update & save</button>
                <br>
              </form><!-- End Horizontal Form -->
              <br>
                    </div>
                </div>



            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php include "include/footer.php" ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php include "include/script-files.php" ?>

</body>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>

</html>