<?php include("auth.php") ?>
<?php include("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Student - Form</title>
  <?php include"include/linked-files.php" ?>
</head>

<body>

  
  <?php include"include/header-nav.php" ?>  
 
  <?php include"include/side-nav.php" ?> 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add Stuent</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form</h5>

              <!-- Horizontal Form -->
              <form method="post" action="fire-add-querries.php" enctype="form-data">
                <div class="row mb-3">
                  <label for="inputname" class="col-sm-2 col-form-label">Student Name<input type="hidden" name='student-edit-page-id'
                                    value='<?php echo $student_id; ?>'></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Your Name Here ..." name="student_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputfname" class="col-sm-2 col-form-label">Student Father Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Your Father Name ..." name="student_father_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputdob" class="col-sm-2 col-form-label">Student Birth Date</label>
                  <div class="col-sm-6">
                  <input type="date" class="form-control" placeholder="Your Birth Date ..." name="student_birth_date">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputgender" class="col-sm-2 col-form-label">Student Gender</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Your Gender ..." name="student_gender">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputcnic" class="col-sm-2 col-form-label">Student Cnic Number</label>
                  <div class="col-sm-6">
                  <input type="text" data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" name="student_cnic_number" class="form-control input-sm" data-required="true" data-type="url">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputmobile" class="col-sm-2 col-form-label">Student Mobile Number</label>
                  <div class="col-sm-6">
                  <input type="text" data-inputmask="'mask':'9999-9999999'" placeholder="xxxx-xxxxxxx" name="student_mobile_number" class="form-control input-sm" data-required="true" data-type="url">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputaddress" class="col-sm-2 col-form-label">Student Address</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Your Address ..." name="student_address">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="input-course-dropdown" class="col-sm-2 col-form-label">Student Course Name</label>
                  <div class="col-sm-6">
                  <select class="form-control" name="student_course_name" id="student_course_name">
                  <option value="-1">Select an option</option>
                    <option value="BS-IT">BS-IT</option>
                    <option value="BS-CS">BS-CS</option>
                    <option value="BS-AI">BS-AI</option>
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputdoadmission" class="col-sm-2 col-form-label">Student Admission Date</label>
                  <div class="col-sm-6">
                  <input type="date" class="form-control" placeholder="Your Admission Date ..." name="student_date_of_admission">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputimage" class="col-sm-2 col-form-label">Add Student Image</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" name="student_image">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputremarks" class="col-sm-2 col-form-label">Remarks</label>
                  <div class="col-sm-6">
                  <textarea class="form-control" name="remarks" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="add-student"><i class='bx bx-plus'></i> Add Student</button>
                  <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
                </div>
                <br>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

      

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include"include/footer.php" ?> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include"include/script-files.php" ?>

</body>
<script src="jquery/jquery.min.js"></script>
  <script src="jquery/jquery.inputmask.bundle.js"></script>
  <script>
	  $(":input").inputmask();
  </script>

</html>































