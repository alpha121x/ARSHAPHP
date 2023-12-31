<?php include("auth.php") ?>
<?php
include("config.php");

// Check if user ID is provided in the URL
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // SQL query to fetch user data based on user ID
    $view_user_qry = "SELECT * FROM admin_users WHERE user_id = $user_id";
    $result = $cn->query($view_user_qry);

    if ($result->num_rows > 0) {
        // Fetch user data as an associative array
        $user_data = $result->fetch_assoc();
        $id = $user_data['user_id'];
        $username = $user_data['username'];
        $email = $user_data['email'];
        $user_type = $user_data['user_type'];
        $user_image = $user_data['user_image'];
    } else {
        echo "User not found";
        // Handle the case where the user ID doesn't exist in the database
    }
} else {
    echo "User ID not provided";
    // Handle the case where no user ID is provided in the URL
}

// Close the database connection
$cn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit user- Form</title>
  <?php include"include/linked-files.php" ?>
</head>

<body>

  
  <?php include"include/header-nav.php" ?>  
 
  <?php include"include/side-nav.php" ?> 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Add Users</li>
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
              <form method="post" action="fire-update-querries.php" enctype="form-data">
                <div class="row mb-3">
                  <label for="inputusername" class="col-sm-2 col-form-label"><input type="hidden" name="user-edit-page-id" value='<?php echo $id; ?>'>Username</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value='<?php echo $username; ?>' name="username">
                  </div>
                </div> 
                <div class="row mb-3">
                  <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" value='<?php echo $email; ?>' name="email">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputuser" class="col-sm-2 col-form-label">User Type</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value='<?php echo $user_type; ?>' name="user_type">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputimage" class="col-sm-2 col-form-label">Add user Image</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" name="user_image">
                  </div>
                </div>
                   
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="update-user"><i class='bx bx-upload'></i> Save</button>
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


</html>































