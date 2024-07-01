<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cinema IIX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/customer/img/favicon.png" rel="icon">
  <link href="assets/customer/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/customer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/customer/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/customer/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/customer/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/customer/css/main.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .index-page {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      background-color: #f8f9fa;
    }
    .card {
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>

<body class="index-page" style="background-color: #F6F9FF">

  <?php 
      if(isset($_SESSION['gagal'])){
  ?>
          <script>
              swal("Perhatian !", "<?= $_SESSION['gagal'] ?>", "warning");
          </script>
  <?php session_destroy(); }
  ?>
  <?php 
      if(isset($_SESSION['gagal_login'])){
  ?>
          <script>
              swal("Perhatian !", "<?= $_SESSION['gagal_login'] ?>", "warning");
          </script>
  <?php 
      session_destroy(); }
  ?>
  
  <div class="card shadow-lg">
    <div class="row align-items-center text-center">
      <div class="col-md-12">
        <div class="card-body">
          <h4 class="mb-3 f-w-400 mb-5">Sign In</h4>
          <form action="controller/proses_login.php" method="POST">
            <div class="form-group mb-3">
              <label class="floating-label" for="Username">Username</label>
              <input type="text" name="username" class="form-control" id="Username" placeholder="">
            </div>
            <div class="form-group mb-4">
              <label class="floating-label" for="Password">Password</label>
              <input type="password" name="password" class="form-control" id="Password" placeholder="">
            </div>
            <button class="btn btn-block btn-primary mb-4 w-100" style="background-color: #012970">Sign in</button>
          </form>
          <p class="mb-0 text-muted">Don’t have an account? <a href="signup.php" class="f-w-400">Signup</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/customer/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/customer/vendor/php-email-form/validate.js"></script>
  <script src="assets/customer/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/customer/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/customer/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/customer/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/customer/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/customer/js/main.js"></script>

</body>

</html>