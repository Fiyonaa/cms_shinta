<!DOCTYPE html>
<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/skydash/') ?>/images/favicon.png">
</head>


<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="row w-100 m-0">
				<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
					<div class="card col-lg-4 mx-auto">
						<div class="card-body px-5 py-5">
							<h3 class="card-title text-left mb-3">Login</h3>
							<form action="<?= base_url('Ror/login') ?>" method="POST">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control p_input"
										placeholder="Masukkan Username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control p_input"
										placeholder="Masukkan Password">
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
								</div><br>
								<div>
									<a href="<?= base_url('ror/registerpage')?>">Belum punya akun? Daftar</a>
								</div>
								<div id="tuyul">
									<?= $this->session->flashdata('alert') ?>
								</div>
								<!-- <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->
							</form>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- row ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	





  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('assets/skydash/') ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/skydash/') ?>/js/off-canvas.js"></script>
  <script src="<?= base_url('assets/skydash/') ?>/js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/skydash/') ?>/js/template.js"></script>
  <script src="<?= base_url('assets/skydash/') ?>/js/settings.js"></script>
  <script src="<?= base_url('assets/skydash/') ?>/js/todolist.js"></script>
  <!-- endinject -->
  </body>

</html>


<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>