<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Blog - Moderna Bootstrap Template</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/moderna/'); ?>assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/moderna/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/moderna/'); ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top ">
		<div class="container">

			<div class="logo float-left">
				<h1 class="text-light"><a href="index.html"><span><?= $konfig->judul_website; ?></span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav class="nav-menu float-right d-none d-lg-block">
				<ul>
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<?php foreach($kategori as $ka) { ?>
					<li><a href="<?= base_url('home/kategori/'.$ka['id_kategori']) ?>"><?= $ka['nama_kategori']?></a>
					</li>
					<?php } ?>
					<li><a href="<?= base_url('Ror')?>">Login</a></li>
				</ul>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<main id="main">

		<!-- ======= Blog Section ======= -->
		<!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section>End Blog Section -->

		<!-- ======= Blog Section ======= -->
		<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
			<div class="container">

				<div class="row" style="width: 100%;">

					<div class="col-lg-8 entries">

						<article class="entry">

							<div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel"
								data-bs-interval="5000">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<?php $no=1; foreach($caraousel as $aa){ ?>
										<div class="carousel-item <?php if($no==1) { echo 'active'; }?>">
											<img src="<?=  base_url('assets/upload/caraousel/'.$aa['foto'])?>"
												class="d-block w-100">
										</div>
										<?php $no++; } ?>
									</div>
									<button class="carousel-control-prev" type="button"
										data-bs-target="#carouselExampleControls" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button"
										data-bs-target="#carouselExampleControls" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>

						</article><!-- End blog entry -->

						<div class="blog-pagination">
							<ul class="justify-content-center">
								<li class="disabled"><i class="icofont-rounded-left"></i></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="icofont-rounded-right"></i></a></li>
							</ul>
						</div>

					</div><!-- End blog entries list -->

					<!-- <div class="col-lg-4">
						<div class="sidebar">

							<h3 class="sidebar-title">Search</h3>
							<div class="sidebar-item search-form">
								<form action="">
									<input type="text">
									<button type="submit"><i class="icofont-search"></i></button>
								</form>
							</div>End sidebar search formn-->

					<!-- <h3 class="sidebar-title">Categories</h3>
							<div class="sidebar-item categories">
								<ul>
									<li><a href="#">General <span>(25)</span></a></li>
									<li><a href="#">Lifestyle <span>(12)</span></a></li>
									<li><a href="#">Travel <span>(5)</span></a></li>
									<li><a href="#">Design <span>(22)</span></a></li>
									<li><a href="#">Creative <span>(8)</span></a></li>
									<li><a href="#">Educaion <span>(14)</span></a></li>
								</ul>

							</div>End sidebar categories -->

					<!-- <h3 class="sidebar-title">Recent Posts</h3>
							<div class="sidebar-item recent-posts">
								<div class="post-item clearfix">
									<img src="<?= base_url('assets/moderna/'); ?>assets/img/recent-posts-1.jpg" alt="">
									<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="<?= base_url('assets/moderna/'); ?>assets/img/recent-posts-2.jpg" alt="">
									<h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="<?= base_url('assets/moderna/'); ?>assets/img/recent-posts-3.jpg" alt="">
									<h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="<?= base_url('assets/moderna/'); ?>assets/img/recent-posts-4.jpg" alt="">
									<h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="<?= base_url('assets/moderna/'); ?>assets/img/recent-posts-5.jpg" alt="">
									<h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>
							</div>End sidebar recent posts -->

					<!-- <h3 class="sidebar-title">Tags</h3>
							<div class="sidebar-item tags">
								<ul>
									<li><a href="#">App</a></li>
									<li><a href="#">IT</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Mac</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Office</a></li>
									<li><a href="#">Creative</a></li>
									<li><a href="#">Studio</a></li>
									<li><a href="#">Smart</a></li>
									<li><a href="#">Tips</a></li>
									<li><a href="#">Marketing</a></li>
								</ul>

							</div>End sidebar tags -->

				</div><!-- End sidebar -->

			</div><!-- End blog sidebar -->

			</div><!-- End .row -->

			</div><!-- End .container -->

		</section><!-- End Blog Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

		<div class="footer-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h4>Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
					</div>
					<div class="col-lg-6">
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contact Us</h4>
						<p>
							A108 Adam Street <br>
							New York, NY 535022<br>
							United States <br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
						</p>

					</div>

					<div class="col-lg-3 col-md-6 footer-info">
						<h3>About Moderna</h3>
						<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
							valies
							darta donna mare fermentum iaculis eu non diam phasellus.</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/moderna/'); ?>assets/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/moderna/'); ?>assets/js/main.js"></script>

</body>

</html>
