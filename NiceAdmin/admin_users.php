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
          <p>Eidt Users record.</p>

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
									include("config.php");
									$view_users_qry = "SELECT * FROM admin_users";
									$result = $cn->query($view_users_qry);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {

											// make variables and display in rows
											$id = $row['user_id'];
											$username = $row['username'];
                      $email = $row['email'];
                      $user_type = $row['user_type'];
                      $user_image = $row['user_image'];
									?>
											<!-- show data in the rows -->
											<tr>
												<td><?php echo $row['user_id']; ?></td>
												<td><?php echo $row['username'] ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php echo $row['user_type']; ?></td>

												<td>
													<a href='edit-user.php?id=<?php echo $id; ?>'><i class="fa fa-edit"></i>Edit</a>
													|
													<a href='delete.php?deleteid=<?php echo $id; ?>'><i class=" fa fa-trash-o"></i>Delte</a>
												</td>
											</tr>
									<?php } }  ?>
                
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