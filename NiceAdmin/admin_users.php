<?php require("auth.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Dashboard - NiceAdmin</title>

  <?php include("include/linked-files.php") ?>

</head>

<body>

<?php include("include/header-nav.php") ?>

<?php include("include/side-nav.php") ?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">id.</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">User Type</th>
                <th scope="col">Changes</th>
              </tr>
            </thead>
            <tbody>
            <?php
require_once 'include/classes/meekrodb.2.3.class.php'; // Include the MeekroDB library
require_once 'db_config.php'; // Include your database configuration

// Fetch all rows from the admin_users table
$users = DB::query("SELECT * FROM admin_users");


// Check if any users were found
if ($users) {
    // Loop through the users and display their data
    foreach ($users as $user) {
        $user_id = $user['user_id'];
        $user_name = $user['username'];
        $user_email = $user['email'];
        $user_type = $user['user_type'];   
    }
}
?>
                 <tr>
                    <th><?php echo $user_id; ?></th>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $user_email; ?></td>
                    <td><?php echo $user_type; ?></td>
                    <td>edit | delete</td>
                  </tr>
                
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
   
<?php include("include/footer.php") ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include("include/script-files.php") ?>

</body>

</html>