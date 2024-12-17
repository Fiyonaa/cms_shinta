<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
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
  <link rel="shortcut icon" href="<?= base_url('assets/skydash/') ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url('assets/skydash/') ?>/images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="<?= site_url('home/registrasi') ?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Admin</option>
                    <option>User</option>
                  </select>
                </div>
                <div class="mt-3"> 
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" >SIGN IN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?= base_url('ror') ?>" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
