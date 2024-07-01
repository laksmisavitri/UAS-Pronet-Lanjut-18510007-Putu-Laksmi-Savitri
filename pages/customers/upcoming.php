<?php
    include 'controller/connection.php';

    $query = mysqli_query($conn, "SELECT * FROM t_up_coming");
?>
<!-- Services Section -->
<section class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>UP COMING</h2>
    <p>Cinema IIX: Hidupkan Imajinasi Anda dengan Setiap Film yang Kami Sajikan, Menyentuh Hati dan Menginspirasi Jiwa.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <?php while ($row = mysqli_fetch_array($query)) { ?>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <img src='storage/<?= $row['gambar'] ?>' class="w-75 mb-4">
          <a href="?page=upcoming" class="stretched-link">
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

<script>
    $(document).ready(function() {
        // Add the 'highlight' class to the 'my-element' div
        $('#upcoming').addClass('active');
        $('#nowplaying').removeClass('active');
        $('#theaters').removeClass('active');
        $('#tiketsaya').removeClass('active');
    });
</script>