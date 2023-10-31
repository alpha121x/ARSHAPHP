<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>

      <nav id="navbar" class="navbar">
      <?php
									include("NiceAdmin/config.php");
									$get_links_qry = "SELECT * FROM menu_links";
									$res = $cn->query($get_links_qry);
									if ($res->num_rows > 0) {
										while ($row = $res->fetch_assoc()) {

											// make variables and display in ul
											$id = $row['link_id'];
											$link_text = $row['link_text'];
                      $url = $row['url'];
									?>
										<ul>
                        <li><a class="nav-link scrollto active" href='<?php echo $url ?>'><?php echo $link_text ?></a></li>
                        <li><a class="nav-link scrollto" href="<?php echo $url ?>"><?php echo $link_text ?></a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-link scrollto" href="#team">Team</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                      </ul>
									<?php } }  ?>  
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>