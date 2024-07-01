<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$lokasi = $_POST['lokasi'];
    $idTheater = $_POST['id_theater'];

    $sql = "INSERT INTO t_lokasi_theater (lokasi, id_theater) VALUES ('$lokasi', '$idTheater')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../../user_page.php?page=lokasi_theater");
    }
}

$conn->close();
?>