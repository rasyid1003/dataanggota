<?php
  include "inc/koneksi.php";
   
  $sql = $koneksi->query("SELECT COUNT(id_anggota) as anggota  from tbl_anggota");
  while ($data= $sql->fetch_assoc()) {
    $anggota=$data['anggota'];
  }

?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php $data['judul']; ?></title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="stylesheet" href="assets/veco/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/veco/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/veco/css/animate.css">
		<link rel="stylesheet" href="assets/veco/css/bootstrap-dropdownhover.min.css">
		<link rel="stylesheet" href="assets/veco/css/aos.css">
		<link rel="stylesheet" href="assets/veco/css/style.css">
		<link rel="stylesheet" href="https://themesdesign.in/teamzia/layouts/css/style.css">
		<style>
			.colorbtn{
				background-color: #9891B2 ;
			}
		</style>
	</head>
	<body>
		
		<!-- header intro -->
		<div class="header-intro">
			<div class="navbar navbar-expand-md">
				<div class="container">
					<a href="index.html" class="navbar-brand"></h2></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-align-justify"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about-us.html">About us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="our-work.html">Our Work</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu fade-up">
									<li><a href="services.html">Services</a></li>
									<li><a href="features.html">Features</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="testimonial.html">Testimonial</a></li>
									<li><a href="faq.html">Faq</a></li>
									
									
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact-us.html">Contact us</a>
							</li>
							<li class="nav-item">
								<a id="colorlogin" class="btn btn-primary fa fa-user" class="button"href="login.php">Login</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="about-us.html" ></a>
							</li>
						</ul>
</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-sm-12">
						<div class="entry" data-aos="slide-up">
							<span>We are professional</span>
							<h2>We are the Best Proffesional <br> Creative Agency</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec orem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus ne ullamcorper mattis, pulvinar dapibus leo.</p>
							<button class="button">Get Started</button>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="entry entry-img" data-aos="zoom-in">
							<img src="img/hero.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header intro -->

		<!-- services -->
		<div class="services section">
			<div class="container">
				<div class="title-section">
					<span>Sevices</span>
					<h2>Choose our<br>creative services</h2>
				</div>
				<div class="row first-row">
					<div class="col-md-4">
						<div class="entry" data-aos="zoom-in">
							<i class="fab fa-wordpress"></i>
							<h5>WordPress</h5>
							<p>Lorem ipsum dolor sit consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="entry" data-aos="zoom-in" data-aos-duration="1500">
							<i class="fab fa-magento"></i>
							<h5>Magento</h5>
							<p>Lorem ipsum dolor sit consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="entry" data-aos="zoom-in" data-aos-duration="1500">
							<i class="fab fa-drupal"></i>
							<h5>Drupal</h5>
							<p>Lorem ipsum dolor sit consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="entry" data-aos="zoom-in" data-aos-duration="2000">
							<i class="far fa-chart-bar"></i>
							<h5>Marketing</h5>
							<p>Lorem ipsum dolor sit consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="entry" data-aos="zoom-in" data-aos-duration="2500">
							<i class="fas fa-mobile-alt"></i>
							<h5>Mobile</h5>
							<p>Lorem ipsum dolor sit consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="entry" data-aos="zoom-in" data-aos-duration="3000">
							<i class="fas fa-credit-card"></i>
							<h5>Graphic</h5>
							<p>Lorem ipsum dolor sit consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end services -->

		<!-- about us -->
		<div class="about-us section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="entry">
							<img src="img/about-us.png" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="entry">
							<span>About us</span>
							<h2>We grow brands beyond set targets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
							<button class="button">Read More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about us -->

		<!-- counter -->
		<div class="counter section">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="col-md-4">
							<div class="entry">
								<span><?php echo $anggota;  ?>
				</h3></span>
								Jumalah Anggota
							</div>
						</div>
						<div class="col-md-4">
							<div class="entry">
								<span>182</span>
								Perempuan
							</div>
						</div>
						<div class="col-md-4">
							<div class="entry">
								<span>145</span>
								laki-Laki
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end counter -->

		<!-- pricing -->
		<div class="pricing">
    <div class="container">
        <div class="title-section">
            <span>Data Anggota</span>
            <h2>Choose our<br>pricing plans</h2>
        </div>
        <div class="row">
            <section>
                <div class="container team-6">
                    <div class="row g-2">
                        <div class="text-center mb-md-5 pb-4">
                            <h2 class="position-relative team-heading fw-500">Creative Agents</h2>
                        </div>
						<div class="row g-2">
                        <?php
                        $sql = $koneksi->query("select * from tbl_anggota");
                        while ($data = $sql->fetch_assoc()) {
                        ?>
                            <div class="col-md-6">
                                <div class="card mb-3 border-0 bg-light-info mx-2" style="object-fit: cover;">
                                    <div class="row">
                                        <div class="col-md-5">
										<div style="width: 150px; height: 200px;  margin: auto; ">
  <img class="rounded-1" src="uploads/<?php echo $data['foto']; ?>" style="object-fit: cover; width: 100%; height: 100%;">
</div>


                                        </div>
                                        <div class="col-md-7 d-flex align-self-center">
                                            <div class="card-body ps-md-0">
                                                <h6 class="card-title mb-1 mt-3 fw-500"><?php echo $data['nama']; ?></h6>
                                                <p class="text-muted fs-15"> <?php echo $data['kelas']; ?> | <span class="text-light-success"><?php echo $data['npm']; ?></span></p>
												
                                                <a href="mailto:<?php echo $data['email']; ?>" class="card-text text-muted mb-md-4 small"><b><?php echo $data['email']; ?></b></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item mx-2">
                                                        <a href="#" class="text-muted team-icon">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mx-2">
                                                        <a href="#" class="text-muted team-icon">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mx-2">
                                                        <a href="#" class="text-muted team-icon">
                                                            <i class="fab fa-gofore"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mx-2">
                                                        <a href="#" class="text-muted team-icon">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



		<!-- end pricing -->
		
		<!-- footer -->
		<footer>
			<div class="container">
				<h2>Veco</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
				<ul>
					<li><a href=""><i class="fab fa-facebook"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-dribbble"></i></a></li>
					<li><a href=""><i class="fab fa-behance"></i></a></li>
					<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
				</ul>
				<h6>Copyright © All Right Reserved</h6>
			</div>
		</footer>
		<!-- end footer -->

		<!-- script -->
		<script src="assets/veco/js/jquery.min.js"></script>
		<script src="assets/veco/js/bootstrap.min.js"></script>
		<script src="assets/veco/js/fontawesome.js"></script>
		<script src="assets/veco/js/bootstrap-dropdownhover.min.js"></script>
		<script src="assets/veco/js/aos.js"></script>
		<script src="assets/veco/js/custom.js"></script>
	</body>
</html>
