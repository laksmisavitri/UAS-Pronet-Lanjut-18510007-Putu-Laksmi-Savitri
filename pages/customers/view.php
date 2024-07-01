<?php
    include 'pages/customers/beli_tiket.php';
    include 'controller/connection.php';

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT t_now_playing.id AS id_film, t_now_playing.judul, t_now_playing.gambar, t_now_playing.sinopsis, t_now_playing.durasi, t_lokasi_theater.lokasi, t_lokasi_theater.harga, t_lokasi_theater.lokasi FROM t_now_playing JOIN t_lokasi_theater ON t_now_playing.lokasi = t_lokasi_theater.id WHERE t_now_playing.id = $id");

    $row = mysqli_fetch_array($query)
?>
<!-- Services Section -->
<section class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2><?= $row['judul'] ?></h2>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="storage/<?= $row['gambar'] ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body p-4">
            <p class="card-text"><?= $row['sinopsis'] ?></p>
            <p class="card-text"><small class="text-muted"><?= $row['durasi'] ?></small></p>
            <p class="card-text"><small class="text-muted"><?= $row['lokasi'] ?></small></p>
            <div class="list-group w-25 mt-5 text-center">
              <button type="button" class="list-group-item list-group-item-action text-white" style="background-color: #2487CE" data-bs-toggle="modal" data-bs-target="#beliTiket" data-id="<?= $row['id_film'] ?>" data-judul="<?= $row['judul'] ?>" data-harga="<?= $row['harga'] ?>" data-lokasi="<?= $row['lokasi'] ?>">Beli Tiket</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Section -->

<script>
    $(function() {
        $('#beliTiket').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var judul = button.data('judul');
            var harga = button.data('harga');
            var lokasi = button.data('lokasi');

            var modal = $(this);
            modal.find('.list-group #id-film').val(id);
            modal.find('.list-group #harga-tiket').val(harga);
            modal.find('.list-group #judul').text(judul);
            modal.find('.list-group #harga').text(harga);
            modal.find('.list-group #lokasi').text(lokasi);
        });
    });
</script>
