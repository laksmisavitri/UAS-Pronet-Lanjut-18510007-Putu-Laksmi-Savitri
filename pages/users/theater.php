<?php
include'form/theater_form.php';
include 'controller/connection.php';

$query = mysqli_query($conn, "SELECT * FROM t_theater");
$no = 0;
?>

<div class="pagetitle mb-4">
  <h1>Theater</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body p-4">
          <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#addTheater"><i class="bi bi-plus"></i></button>
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
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
                <td><?= $row['nama_theater'] ?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTheater" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama_theater'] ?>"><i class="bi bi-pencil-square"></i></button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTheater" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama_theater'] ?>"><i class="bi bi-trash"></i></button>
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
        $('#editTheater').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');

            var modal = $(this);
            modal.find('.modal-body #id-theater').val(id);
            modal.find('.modal-body #nama-theater').val(nama);
        });

        $('#deleteTheater').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(nama);
        });
    });
</script>