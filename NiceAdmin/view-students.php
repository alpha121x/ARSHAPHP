<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tables / View Students</title>


  <?php include"include/linked-files.php" ?>

 

</head>

<body>
   
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">View Students</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">View Students - Table 
            <input type="hidden" name='student-edit-page-id'
                value='<?php echo $student_id; ?>'>
          </h5>
          <p>Students record.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Birth Date</th>
                <th>Gender</th>
                <th>Edit | Delete</th>
              </tr>
            </thead>
            <tbody>
            
          <?php 
             include ("config.php");
             $view_students_qry = "SELECT * FROM student";
             $result = $cn->query($view_students_qry);
             if ($result->num_rows >0) {
              while ($row = $result->fetch_assoc()) {
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
          ?>    
              <tr>
                <td> <a href="view-students-info.php?id=<?php echo $student_id; ?>"> <?php echo $student_id; ?> </a></td>
                <td> <?php echo $student_name; ?> </td>
                <td> <?php echo $student_father_name; ?> </td>
                <td> <?php echo $student_birth_date; ?> </td>
                <td> <?php echo $student_gender; ?> </td>
                <td>
                <a href="edit-student.php?id=<?php echo $student_id; ?>"><i class="bi bi-pencil-square"></i></a>
                |
                <a href="delete-student.php?id=<?php echo $student_id; ?>"><i class="bi bi-trash3-fill"></i></a>
                </td>
              </tr>
            <?php }}?>
            
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
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