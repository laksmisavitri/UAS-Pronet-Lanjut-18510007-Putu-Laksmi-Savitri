<?php  ?>

<!-- Services Section -->
<section class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Theaters</h2>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="card">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-dark" id="active-tab" data-bs-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="true">Cinema IIX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" id="link-tab" data-bs-toggle="tab" href="#link" role="tab" aria-controls="link" aria-selected="false">Cinépolis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" id="link-tab" data-bs-toggle="tab" href="#link2" role="tab" aria-controls="link" aria-selected="false">Movimax</a>
          </li>
        </ul>
      </div>
      <div class="card-body tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">
          <ul class="list-group">
            <?php 
            include 'controller/connection.php';

            $query = mysqli_query($conn, "SELECT * FROM t_lokasi_theater WHERE id_theater = '3'");
            while ($row = mysqli_fetch_array($query)) { ?>
              <li class="list-group-item"><?= $row['lokasi'] ?></li>
            <?php } ?>
					</ul>
        </div>
        <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab">
          <ul class="list-group">
					  <?php 
            include 'controller/connection.php';

            $query = mysqli_query($conn, "SELECT * FROM t_lokasi_theater WHERE id_theater = '4'");
            while ($row = mysqli_fetch_array($query)) { ?>
              <li class="list-group-item"><?= $row['lokasi'] ?></li>
            <?php } ?>
					</ul>
        </div>
        <div class="tab-pane fade" id="link2" role="tabpanel" aria-labelledby="link-tab">
          <ul class="list-group">
					  <?php 
            include 'controller/connection.php';

            $query = mysqli_query($conn, "SELECT * FROM t_lokasi_theater WHERE id_theater = '5'");
            while ($row = mysqli_fetch_array($query)) { ?>
              <li class="list-group-item"><?= $row['lokasi'] ?></li>
            <?php } ?>
					</ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Section -->

<script>
    $(document).ready(function() {
    	$('#theaters').addClass('active');
        $('#nowplaying').removeClass('active');
        $('#upcoming').removeClass('active');
        $('#tiketsaya').removeClass('active');
   
        $('#myTab a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
