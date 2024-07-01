<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];
    $sinopsis = $_POST['sinopsis'];
    $lokasi = $_POST['lokasi'];
    $image = $_FILES['image']['name'];
    $target = "../../storage/" . basename($image);

    if ($image) {

        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "UPDATE t_now_playing SET gambar='$image', judul='$judul', genre='$genre', durasi='$durasi', sinopsis='$sinopsis', lokasi='$lokasi' WHERE id=$id";
    } else {
        $sql = "UPDATE t_now_playing SET judul='$judul', genre='$genre', durasi='$durasi', sinopsis='$sinopsis' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../../user_page.php?page=now_playing");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>