<?php

?>
<!-- Vertically centered Modal -->
<div class="modal fade" id="addLokasiTheater" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lokasi Theater</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/lokasi_theater/create_lokasi_theater.php" method="post">
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="lokasi">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Theater</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="id_theater">
                <?php 
                include 'controller/connection.php';

                $query = mysqli_query($conn, "SELECT * FROM t_theater");
                while ($row = mysqli_fetch_array($query)) { ?>
                  <option value="<?= $row['id'] ?>"><?= $row['nama_theater'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color: #012970">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Vertically centered Modal-->

<!-- Vertically centered Modal -->
<div class="modal fade" id="editLokasiTheater" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lokasi Theater</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/lokasi_theater/update_lokasi_theater.php" method="post">
          <input type="hidden" name="id" id="id">
          <div class="row mb-3">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="id-theater" class="col-sm-2 col-form-label">Theater</label>
            <div class="col-sm-10">
              <select class="form-select" id="id-theater" name="id_theater" required>
                <?php
                include 'controller/connection.php';

                $query = mysqli_query($conn, "SELECT * FROM t_theater");
                while ($row = mysqli_fetch_assoc($query)) { ?>
                  <option value="<?= $row['id'] ?>"><?= $row['nama_theater'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" style="background-color: #012970">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- End Vertically centered Modal-->

<!-- Vertically centered Modal -->
<div class="modal fade" id="deleteLokasiTheater" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lokasi Theater</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/lokasi_theater/delete_lokasi_theater.php" method="post">
        	<input type="hidden" name="id" id="id-hapus">
		          Apakah anda ingin menghapus data <b id="data-hapus"></b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color: #012970">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Vertically centered Modal-->