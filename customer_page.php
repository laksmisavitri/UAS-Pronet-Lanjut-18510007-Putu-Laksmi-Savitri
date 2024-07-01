<?php
    session_start();
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:signin.php");
    }

    include 'controller/connection.php';

    $query = mysqli_query($conn, "SELECT * FROM t_now_playing");
?>
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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/customer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/customer/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/customer/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/customer/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/customer/css/main.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/customer/img/logo.png" alt=""> -->
        <h1 class="sitename">Cinema IIX</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="?" class="active" id="nowplaying">Now Playing<br></a></li>
          <li><a href="?page=theaters" id="theaters">Theaters</a></li>
          <li><a href="?page=upcoming" id="upcoming">Up Coming</a></li>
          <li><a href="?page=tiketsaya" id="tiketsaya">Tiket Saya</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="cover.php">Logout</a>
    </div>
  </header>

  <main class="main">
    <?php
        if (isset($_GET['page']))
            include('pages/customers/'.$_GET['page'].'.php');
        else{
    ?>
        <!-- Services Section -->
        <section class="services section">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <p>Anda Berhasil Log In!</p>
            <h2>NOW PLAYING</h2>
            <p>Cinema IIX: Hidupkan Imajinasi Anda dengan Setiap Film yang Kami Sajikan, Menyentuh Hati dan Menginspirasi Jiwa.</p>
          </div><!-- End Section Title -->

          <div class="container">
            <div class="row gy-4">
              <?php while ($row = mysqli_fetch_array($query)) {
                // Misalkan id film disimpan dalam variabel $film_id
                $film_id = $row['id'];

                // Buat URL dengan id film
                $url = "customer_page.php?page=view&id=" . $film_id;
              ?>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                  <img src='storage/<?= $row['gambar'] ?>' class="w-75 mb-4">
                  <a href="<?= $url; ?>" class="stretched-link">
                    <h3><?= $row['judul'] ?></h3>
                  </a>
                  <p><?= $row['sinopsis'] ?></p>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </section>
        <!-- End Services Section -->
    <?php } ?>

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

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

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>