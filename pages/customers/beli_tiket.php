<!-- Vertically centered Modal -->
<div class="modal fade" id="beliTiket" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Beli Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/beli_tiket.php" method="post">
        	<ul class="list-group list-group-flush">
            <input type="hidden" name="id_film" id="id-film">
            <li class="list-group-item" id="judul">A second item</li>
            <li class="list-group-item" id="harga">A third item</li>
            <li class="list-group-item" id="lokasi">A third item</li>
          </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color: #2789CF">Beli</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Vertically centered Modal-->