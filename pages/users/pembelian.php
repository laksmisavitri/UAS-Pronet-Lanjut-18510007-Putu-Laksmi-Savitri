<?php
include 'controller/connection.php';

$query = mysqli_query($conn, "SELECT t_now_playing.judul, t_lokasi_theater.lokasi, t_customers.nama_pengguna FROM t_pembelian JOIN t_customers ON t_pembelian.id_customer = t_customers.id_pengguna JOIN t_now_playing ON t_pembelian.id_film = t_now_playing.id JOIN t_lokasi_theater ON t_now_playing.lokasi = t_lokasi_theater.id");
$no = 0;
?>

<div class="pagetitle mb-4">
  <h1>Pembelian</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body p-4">
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Lokasi</th>
                <th>Customer</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)) { 
                $no++;
              ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['lokasi'] ?></td>
                <td><?= $row['nama_pengguna'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>
</section>