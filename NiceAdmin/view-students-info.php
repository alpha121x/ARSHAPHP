<!DOCTYPE html>
<html lang="en">

<head>

  <title>View Students Info</title>


  <?php include"include/linked-files.php" ?>

 

</head>

<body>
   
<main id="main" class="main">

<div class="pagetitle">
  <h1>Info Table</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">View Students Info</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
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
                    }
                    else {
                      header("Location:view-students.php");
                    }
                ?>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">View Students Info- Table</h5>
          <p>Students Registration Record.</p>
          <div class="col-sm-12 text-center">
          <img src="assets/img/<?php echo $student_image ; ?>" height="150" width="150" alt="Profile" class="rounded-circle">
          </div>
        
         <!-- Default Table -->
         <table class="table">
                <thead>
                  <tr>
                    <th colspan="2">Student Registration</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Id.</th>
                    <td><?php echo $student_id; ?></td>
                  </tr>
                  <tr>
                    <th>Name</th>
                    <td><?php echo $student_name; ?></td>
                  </tr>
                  <tr>
                  <th>Father Name</th>
                  <td><?php echo $student_father_name; ?></td>
                  </tr>
                  <tr>
                  <th>Birth Date</th>
                    <td><?php echo $student_birth_date; ?></td>
                  </tr>
                  <tr>
                  <th>Gender</th>
                    <td><?php echo $student_gender; ?></td>
                  </tr>
                  <tr>
                  <th>Cnic Number</th>
                    <td><?php echo $student_cnic_number; ?></td>
                  </tr>
                  <tr>
                  <th>Mobile Number</th>
                    <td><?php echo $student_mobile_number; ?></td>
                  </tr>
                  <tr>
                  <th>Adress</th>
                    <td><?php echo $student_address; ?></td>
                  </tr>
                  <tr>
                  <th>Course Name</th>
                    <td><?php echo $student_course_name; ?></td>
                  </tr>
                  <tr>
                  <th>Date of Admission</th>
                    <td><?php echo $student_date_of_admission; ?></td>
                  </tr>
                  <tr>
                  <th>Remarks</th>
                    <td><?php echo $remarks; ?></td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
  
  <?php include"include/header-nav.php" ?>  
 
  <?php include"include/side-nav.php" ?> 


  <?php include"include/footer.php" ?> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include"include/script-files.php" ?>

</body>

</html>