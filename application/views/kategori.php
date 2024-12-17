<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $konfig->judul_website; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link href="<?= base_url('assets/investa/'); ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/investa/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/investa/'); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">


	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/investa/'); ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/investa/'); ?>css/style.css" rel="stylesheet">
</head>

<body>

	<!-- Spinner Start -->
	<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
	<!-- Spinner End -->


	<!-- Topbar Start -->
	<div class="container-fluid topbar px-0 d-none d-lg-block">
		<div class="container px-0">
			<div class="row gx-0 align-items-center" style="height: 45px;">
				<div class="col-lg-8 text-center text-lg-start mb-lg-0">
					<div class="d-flex flex-wrap">
						<a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i><?= $konfig->alamat; ?></a>
						<a href="#" class="text-muted me-4"><i
								class="fas fa-phone-alt text-primary me-2"></i><?= $konfig->no_wa; ?></a>
						<a href="#" class="text-muted me-0"><i
								class="fas fa-envelope text-primary me-2"></i><?= $konfig->email; ?></a>
					</div>
				</div>
				<div class="col-lg-4 text-center text-lg-end">
					<div class="d-flex align-items-center justify-content-end">
						<a href="<?= $konfig->facebook ?>" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
								class="fab fa-facebook-f text-white"></i></a>
						<a href="<?= $konfig->instagram ?>" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
								class="fab fa-instagram text-white"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar & Hero Start -->
	<div class="container-fluid sticky-top px-0">
		<div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
		</div>
		<div class="container px-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
				<a href="<?= base_url(); ?>" class="navbar-brand p-0">
					<h1 class="text-primary m-0"><?= $konfig->judul_website; ?></h1>
					<!-- <img src="img/logo.png" alt="Logo"> -->
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto py-0 ">
						<a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
						<?php foreach($kategori as $ka) { ?>
						<a href="<?= base_url('home/kategori/'.$ka['id_kategori']) ?>"
							class="nav-item nav-link"><?= $ka['nama_kategori']?> </a>
						<?php } ?>
						<a href="<?= base_url('home/galeri')?>" class="nav-item nav-link">Galeri</a>
					</div>
					<div class="d-flex align-items-center flex-nowrap pt-xl-0">
						<!-- <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal"
							data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
						<a href="<?= base_url('Ror')?>"
							class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Login</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- Navbar & Hero End -->

	<!-- Modal Search Start -->
	<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content rounded-0">
				<div class="modal-header">
					<h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body d-flex align-items-center">
					<div class="input-group w-75 mx-auto d-flex">
						<input type="search" class="form-control p-3" placeholder="keywords"
							aria-describedby="search-icon-1">
						<span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Search End -->

	

	<!-- Blog Start -->
	<div class="container-fluid blog py-5">
		<div class="container py-5">
			<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
				<h4 class="text-primary">it's me taa</h4>
				<h1 class="display-4">Kategori</h1>
			</div>
			<div class="row g-4 justify-content-center">
            <?php foreach($konten as $ko){ ?>
				<div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
					<div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
						<div class="mb-4">
							<h4 class="text-primary mb-2"><?= $ko['judul'] ?></h4>
							<div class="d-flex justify-content-between">
								<!-- <p class="mb-0"><span class="fa fa-user text-primary"></span> <?= $ko['nama'] ?></p> -->
								<p class="mb-0"><span class="fa fa-folder text-primary"></span> <?= $ko['nama_kategori'] ?></p>
							</div>
						</div>
						<div class="project-img">
							<img src="<?= base_url('assets/upload/konten/'.$ko['foto']) ?>" class="img-fluid w-100 rounded"
								alt="Image">
							<div class="blog-plus-icon">
								<a href="<?= base_url('assets/upload/konten/'.$ko['foto']) ?>" data-lightbox="blog-1"
									class="btn btn-primary btn-md-square rounded-pill"><i
										class="fas fa-plus fa-1x"></i></a>
							</div>
						</div>
						<a class="btn btn-primary rounded-pill py-2 px-4 mt-3" href="<?= base_url('home/artikel/'.$ko['slug']) ?>">Explore More</a>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
	<!-- Blog End -->

	<!-- Footer Start -->
	<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" >
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<div class="footer-item">
							<h4 class="text-white mb-4"><?= $konfig->judul_website; ?></h4>
							<p class="mb-3"><?= $konfig->profil_website; ?></p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">Explore</h4>
						<a href="<?= base_url(); ?>"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <?php foreach($kategori as $ka) { ?>
						<a href="<?= base_url('home/kategori/'.$ka['id_kategori']) ?>"><i class="fas fa-angle-right me-2"></i> <?= $ka['nama_kategori']?></a>
                        <?php } ?>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">Contact Us</h4>
						<a href=""><i class="fa fa-map-marker-alt me-2"></i><?= $konfig->alamat; ?></a>
						<a href=""><i class="fas fa-envelope me-2"></i><?= $konfig->email; ?></a>
						<a href=""><i class="fas fa-phone me-2"></i><?= $konfig->no_wa; ?></a>
						<div class="d-flex align-items-center">
							<a class="btn btn-light btn-md-square me-2" href="<?= $konfig->facebook ?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-light btn-md-square me-2" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6 text-center text-md-start mb-md-0">
					<span class="text-body"><a href="#" class="border-bottom text-primary"><i
								class="fas fa-copyright text-light me-2"></i><?= $konfig->judul_website ?></a></span>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/investa/'); ?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/investa/'); ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/investa/'); ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/investa/'); ?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/investa/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/investa/'); ?>lib/lightbox/js/lightbox.min.js"></script>


	<!-- Template Javascript -->
	<script src="<?= base_url('assets/investa/'); ?>js/main.js"></script>
</body>

</html>
