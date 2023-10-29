<?php include("NiceAdmin/include/auth.php") ?>
<?php include("NiceAdmin/include/config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Student - Form</title>
  <?php include"NiceAdmin/include/linked-files.php" ?>
</head>

<body>

  
  <?php include"NiceAdmin/include/header-nav.php" ?>  
 
  <?php include"NiceAdmin/include/side-nav.php" ?> 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add Admin Profile</li>
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
                  <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" placeholder="Enter Email" name="email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputfname" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputmobile" class="col-sm-2 col-form-label">Mobile Number</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Enter Mobile No." name="mobile">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputuser" class="col-sm-2 col-form-label">User Type</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Enter User type" name="utype">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputimage" class="col-sm-2 col-form-label">Add Profile Image</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" name="photo">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputabout" class="col-sm-2 col-form-label">About Profile</label>
                  <div class="col-sm-6">
                  <textarea class="form-control" name="about-profile" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Enter Adress" name="address">
                  </div>
                </div>

                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="add-user"><i class='bx bx-upload'></i> Save</button>
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

  <?php include"NiceAdmin/include/footer.php" ?> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include"NiceAdmin/include/script-files.php" ?>

</body>
<script src="NiceAdmin/jquery/jquery.min.js"></script>
  <script src="jquery/jquery.inputmask.bundle.js"></script>
  <script>
	  $(":input").inputmask();
  </script>

</html>































