<?php
include'form/user_form.php';
include 'controller/connection.php';

$query = mysqli_query($conn, "SELECT * FROM t_user");

$no = 0;
?>

<div class="pagetitle mb-4">
  <h1>Data User</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body p-4">
          <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#addUser"><i class="bi bi-plus"></i></button>
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)) { 
                $no++;
              ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $row['nama_user'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><?= $row['level'] ?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editUser" data-id="<?= $row['id_user'] ?>" data-nama="<?= $row['nama_user'] ?>" data-username="<?= $row['username'] ?>" data-password="<?= $row['password'] ?>" data-level="<?= $row['level'] ?>"><i class="bi bi-pencil-square"></i></button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser" data-id="<?= $row['id_user'] ?>" data-nama="<?= $row['nama_user'] ?>"><i class="bi bi-trash"></i></button>
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
        $('#editUser').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');
            var username = button.data('username');
            var password = button.data('password');
            var level = button.data('level');

            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #nama').val(nama);
            modal.find('.modal-body #username').val(username);
            modal.find('.modal-body #password').val(password);
            modal.find('.modal-body #level').val(level);
        });

        $('#deleteUser').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');
            var modal = $(this);
            modal.find('.modal-body #id-hapus').val(id);
            modal.find('.modal-body #data-hapus').text(nama);
        });
    });
</script>