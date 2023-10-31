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
  <h1>Edit Menu Links</h1>
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
          <p>Editt Links record.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">link_id</th>
                <th scope="col">link_text</th>
                <th scope="col">url</th>
                <th scope="col">Changes</th>
              </tr>
            </thead>
            <tbody>
          	<?php
									include("config.php");
									$view_links_qry = "SELECT * FROM menu_links";
									$result = $cn->query($view_links_qry);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {

                                    // make variables and display in rows
                                    $link_id = $row['link_id'];
                                    $link_text = $row['link_text'];
                                    $url = $row['url'];
									?>
                                    <!-- show data in the rows -->
                                    <tr>
                                        <td><?php echo $row['link_id']; ?></td>
                                        <td><?php echo $row['link_text'] ?></td>
                                        <td><?php echo $row['url']; ?></td>
                                        <td>
                                            <a href='edit-menu.php?id=<?php echo $link_id; ?>'><i class="fa fa-edit"></i>Edit</a>
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