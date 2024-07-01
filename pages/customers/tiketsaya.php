<?php  ?>

<!-- Services Section -->
<section class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Tiket Saya</h2>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="card-group">
      <?php 
      include 'controller/connection.php';

      $pengguna = $_SESSION['user_id'];

      $query = mysqli_query($conn, "SELECT * FROM t_pembelian JOIN t_now_playing ON t_pembelian.id_film = t_now_playing.id JOIN t_lokasi_theater ON t_now_playing.lokasi = t_lokasi_theater.id WHERE t_pembelian.id_customer = $pengguna");
      while ($row = mysqli_fetch_array($query)) { ?>
        <div class="ms-4">
          <div class="card" style="width: 20rem; height: 10rem;">
            <div class="card-body">
              <h5 class="card-title mb-4"><?= $row['judul'] ?></h5>
              <small class="card-text"><?= $row['lokasi'] ?></small>
            </div>
          </div>
          </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- End Services Section -->

<script>
    $(document).ready(function() {
    	$('#tiketsaya').addClass('active');
      $('#nowplaying').removeClass('active');
      $('#upcoming').removeClass('active');
      $('#theater').removeClass('active');
 
      $('#myTab a').on('click', function(e) {
          e.preventDefault();
          $(this).tab('show');
      });
    });
</script>
