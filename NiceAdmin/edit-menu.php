<?php include("auth.php") ?>
<?php
include("config.php");

// Check if user ID is provided in the URL
if(isset($_GET['id'])) {
    $menu_id = $_GET['id'];

    // SQL query to fetch user data based on user ID
    $view_link_qry = "SELECT * FROM menu_links WHERE link_id = $menu_id";
    $result = $cn->query($view_link_qry);

    if ($result->num_rows > 0) {
        // Fetch user data as an associative array
        $link_data = $result->fetch_assoc();
        $link_id = $link_data['link_id'];
        $link_text = $link_data['link_text'];
        $link_url = $link_data['url'];
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
  <title>Edit User Profile - Form</title>
  <?php include"include/linked-files.php" ?>
</head>

<body>

  
  <?php include"include/header-nav.php" ?>  
 
  <?php include"include/side-nav.php" ?> 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Add Menu Items</li>
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
                  <label for="inputusername" class="col-sm-2 col-form-label">Link Name:<input type="hidden" name="edit-menu-page-id" value='<?php echo $id; ?>'></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value='<?php echo $link_text ?>' name="link_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputfname" class="col-sm-2 col-form-label">Menu URL:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value='<?php echo $link_url ?>' name="link_url">
                  </div>
                </div>  
                   
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="update-link"><i class='bx bx-upload'></i> Save</button>
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


</html>































