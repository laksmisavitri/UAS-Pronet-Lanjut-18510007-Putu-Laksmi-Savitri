<!-- Vertically centered Modal -->
<div class="modal fade" id="addTheater" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Theater</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/theater/create_theater.php" method="post">
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Theater</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_theater">
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
<div class="modal fade" id="editTheater" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Theater</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/theater/update_theater.php" method="post">
        	<input type="hidden" name="id" id="id-theater">
        	<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Theater</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_theater" id="nama-theater">
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
<div class="modal fade" id="deleteTheater" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Theater</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/theater/delete_theater.php" method="post">
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