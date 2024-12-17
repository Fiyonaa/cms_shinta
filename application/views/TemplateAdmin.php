<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('assets/skydash/')?>/vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('assets/skydash/')?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/skydash/')?>/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet"
		href="<?= base_url('assets/skydash/')?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('assets/skydash/')?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" type="<?= base_url('assets/skydash/')?>/text/css" href="js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/skydash/')?>/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
	<link rel="shortcut icon" href="<?= base_url('assets/skydash/')?>/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<!-- <a class="navbar-brand brand-logo mr-5" href="<?= base_url(); ?>"><img
						src="<?= base_url('assets/skydash/')?>/images/logo.svg" class="mr-2" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="index.html"><img
						src="<?= base_url('assets/skydash/')?>/images/logo-mini.svg" alt="logo" /></a> -->
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="icon-menu"></span>
				</button>
				<!-- <ul class="navbar-nav mr-lg-2">
					<li class="nav-item nav-search d-none d-lg-block">
						<div class="input-group">
							<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
								<span class="input-group-text" id="search">
									<i class="icon-search"></i>
								</span>
							</div>
							<input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
								aria-label="search" aria-describedby="search">
						</div>
					</li>
				</ul> -->
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item nav-profile dropdown">
						<div class="profile-name \">
							<h5 class="mb-0 font-weight-normal mr-3"><?= $judul_halaman ?></h5>
						</div>
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
							<img src="<?= base_url('assets/skydash/')?>/images/faces/p.jpg" alt="profile" />
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown"
							aria-labelledby="profileDropdown">
							<a class="dropdown-item" href="<?= base_url('ror/logout') ?>">
								<i class="ti-power-off text-primary"></i>
								Logout
							</a>
						</div>
					</li>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('admin/home') ?>">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('admin/konten') ?>">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Konten</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('admin/kategori') ?>">
							<i class="icon-columns menu-icon"></i>
							<span class="menu-title">Kategori Konten</span>
						</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="<?= base_url('admin/galeri') ?>">
								<i class="icon-bar-graph menu-icon"></i>
								<span class="menu-title">Galeri</span>
							</a>
						</li>
					<?php if($this->session->userdata('level')=='admin') { ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('admin/caraousel') ?>">
								<i class="icon-grid-2 menu-icon"></i>
								<span class="menu-title">Caraousel</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('admin/saran') ?>">
								<i class="icon-contract menu-icon"></i>
								<span class="menu-title">Saran</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('admin/user') ?>">
								<i class="icon-head menu-icon"></i>
								<span class="menu-title">User</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('admin/konfigurasi') ?>">
								<i class="icon-paper menu-icon"></i>
								<span class="menu-title">Konfigurasi</span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel" >
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="row" style="min-height: 62vh;">
								<div class="">
									<?= $contents; ?>
								</div>
							</div>
						</div>
						<!-- content-wrapper ends -->

						<!-- partial:partials/_footer.html -->
						<footer class="footer ">
							<div class="d-sm-flex justify-content-center justify-content-sm-between">
								<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
							    taa 2008</span>
							</div>
						</footer>
						<!-- partial -->
					</div>
					<!-- main-panel ends -->
				</div>
				<!-- page-body-wrapper ends -->
			</div>
			<!-- container-scroller -->

			<!-- plugins:js -->
			<script src="<?= base_url('assets/skydash/')?>/vendors/js/vendor.bundle.base.js"></script>
			<!-- endinject -->
			<!-- Plugin js for this page -->
			<script src="<?= base_url('assets/skydash/')?>/vendors/chart.js/Chart.min.js"></script>
			<script src="<?= base_url('assets/skydash/')?>/vendors/datatables.net/jquery.dataTables.js"></script>
			<script src="<?= base_url('assets/skydash/')?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js">
			</script>
			<script src="<?= base_url('assets/skydash/')?>/js/dataTables.select.min.js"></script>

			<!-- End plugin js for this page -->
			<!-- inject:js -->
			<script src="<?= base_url('assets/skydash/')?>/js/off-canvas.js"></script>
			<script src="<?= base_url('assets/skydash/')?>/js/hoverable-collapse.js"></script>
			<script src="<?= base_url('assets/skydash/')?>/js/template.js"></script>
			<script src="<?= base_url('assets/skydash/')?>/js/settings.js"></script>
			<script src="j<?= base_url('assets/skydash/')?>/s/todolist.js"></script>
			<!-- endinject -->
			<!-- Custom js for this page-->
			<script src="<?= base_url('assets/skydash/')?>/js/dashboard.js"></script>
			<script src="<?= base_url('assets/skydash/')?>/js/Chart.roundedBarCharts.js"></script>
			<!-- End custom js for this page-->
			<script>
				$('#tuyul').delay('slow').slideDown('slow').delay(2500).slideUp(150);
			</script>
</body>

</html>
