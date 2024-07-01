<?php  ?>

<!-- Vertically centered Modal -->
<div class="modal fade" id="addUpComing" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Up Coming</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/upcoming/create_up_coming.php" method="post" enctype="multipart/form-data">
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="formFile" name="image">
            </div>
          </div>
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="judul">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="genre">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Durasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="durasi">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Sinopsis</label>
            <div class="col-sm-10">
              <textarea class="form-control" style="height: 100px" name="sinopsis"></textarea>
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
<div class="modal fade" id="editUpComing" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Up Coming</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/upcoming/update_up_coming.php" method="post" enctype="multipart/form-data">
        	<input type="hidden" name="id" id="id-film">
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
              <!-- Image display -->
				      <img id="gambar-display" src="" alt="Current image" style="max-width: 25%; height: auto; margin-bottom: 10px;">
				      <!-- File input -->
				      <input class="form-control" type="file" id="gambar" name="image">
            </div>
          </div>
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judul" name="judul">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="genre" name="genre">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Durasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="durasi" name="durasi">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Sinopsis</label>
            <div class="col-sm-10">
              <textarea class="form-control" style="height: 100px" id="sinopsis" name="sinopsis"></textarea>
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
<div class="modal fade" id="deleteUpComing" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Up Coming</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/upcoming/delete_up_coming.php" method="post">
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