<?php
include'form/lokasi_theater_form.php';
include 'controller/connection.php';

$query = mysqli_query($conn, "SELECT t_lokasi_theater.id AS id_lokasi, t_lokasi_theater.lokasi, t_lokasi_theater.id_theater, t_theater.nama_theater FROM t_lokasi_theater JOIN t_theater ON t_lokasi_theater.id_theater = t_theater.id");

$no = 0;
?>

<div class="pagetitle mb-4">
  <h1>Lokasi Theater</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body p-4">
          <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#addLokasiTheater"><i class="bi bi-plus"></i></button>
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Nama Theater</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)) { 
                $no++;
              ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $row['lokasi'] ?></td>
                <td><?= $row['nama_theater'] ?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editLokasiTheater" data-id="<?= $row['id_lokasi'] ?>" data-lokasi="<?= $row['lokasi'] ?>" data-idtheater="<?= $row['id_theater'] ?>"><i class="bi bi-pencil-square"></i></button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteLokasiTheater" data-id="<?= $row['id_lokasi'] ?>" data-lokasi="<?= $row['lokasi'] ?>"><i class="bi bi-trash"></i></button>
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
        $('#editLokasiTheater').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var lokasi = button.data('lokasi');
            var idtheater = button.data('idtheater');

            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #lokasi').val(lokasi);
            modal.find('.modal-body #id-theater').val(idtheater);
        });

        $('#deleteLokasiTheater').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var lokasi = button.data('lokasi');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(lokasi);
        });
    });
</script>