<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cinema IIX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/admin/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Cinema IIX</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center"> 
      <li class="nav-item dropdown pe-3">
    </nav><!-- End Icons Navigation -->

      <a class="btn btn-getstarted text-white" style="background-color: #2487CE" href="cover.php" >Logout</a>
    
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=now_playing">
          <i class="bi bi-film"></i>
          <span>Now Playing</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=upcoming">
          <i class="bi bi-film"></i>
          <span>Up Coming</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=theater">
          <i class="bi bi-badge-hd"></i>
          <span>Theater</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=lokasi_theater">
          <i class="bi bi-geo-alt"></i>
          <span>Lokasi Theater</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=pembelian">
          <i class="bi bi-wallet"></i>
          <span>Pembelian Tiket</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=datauser">
          <i class="bi bi-person"></i>
          <span>Data User</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <?php
        if (isset($_GET['page']))
            include('pages/users/'.$_GET['page'].'.php');
    ?>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/admin/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/admin/vendor/echarts/echarts.min.js"></script>
  <script src="assets/admin/vendor/quill/quill.js"></script>
  <script src="assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/admin/js/main.js"></script>

</body>

</html>