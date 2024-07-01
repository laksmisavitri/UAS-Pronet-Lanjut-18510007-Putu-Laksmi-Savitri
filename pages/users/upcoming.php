<?php
include'form/upcoming_form.php';
include 'controller/connection.php';

$query = mysqli_query($conn, "SELECT * FROM t_up_coming");
?>

<div class="pagetitle mb-4">
  <h1>Up Coming</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body p-4">
          <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#addUpComing"><i class="bi bi-plus"></i></button>
          <table class="table datatable">
            <thead>
              <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Sinopsis</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)) { ?>
              <tr>
                <td><img src='storage/<?= $row['gambar'] ?>' width='100'></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['genre'] ?></td>
                <td><?= $row['durasi'] ?></td>
                <td><?= $row['sinopsis'] ?></td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editUpComing" data-id="<?= $row['id'] ?>" data-gambar="<?= $row['gambar'] ?>"  data-judul="<?= $row['judul'] ?>" data-genre="<?= $row['genre'] ?>" data-durasi="<?= $row['durasi'] ?>" data-sinopsis="<?= $row['sinopsis'] ?>"></i></button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUpComing" data-id="<?= $row['id'] ?>" data-judul="<?= $row['judul'] ?>"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>
</section>

 <script>
    $(function() {
        $('#editUpComing').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var gambar = button.data('gambar');
            var judul = button.data('judul');
            var genre = button.data('genre');
            var durasi = button.data('durasi');
            var sinopsis = button.data('sinopsis');

            var imagePath = 'storage/' + gambar;

            var modal = $(this);
            modal.find('.modal-body #id-film').val(id);
            modal.find('.modal-body #gambar-display').attr('src', imagePath);
            modal.find('.modal-body #judul').val(judul);
            modal.find('.modal-body #genre').val(genre);
            modal.find('.modal-body #durasi').val(durasi);
            modal.find('.modal-body #sinopsis').val(sinopsis);
        });

        $('#deleteUpComing').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var judul = button.data('judul');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(judul);
        });
    });
</script>