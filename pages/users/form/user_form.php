<?php

?>
<!-- Vertically centered Modal -->
<div class="modal fade" id="addUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/user/create_user.php" method="post">
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_user">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="level">
                <option value="admin">Admin</option>
                <option value="owner">Owner</option>
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
<div class="modal fade" id="editUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/user/update_user.php" method="post">
          <input type="hidden" name="id_user" id="id">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_user" id="nama">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="password">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="level" id="level">
                <option value="admin">Admin</option>
                <option value="owner">Owner</option>
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
<div class="modal fade" id="deleteUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/user/delete_user.php" method="post">
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