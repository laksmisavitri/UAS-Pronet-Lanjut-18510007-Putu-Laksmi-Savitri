<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];
    $sinopsis = $_POST['sinopsis'];
    $lokasi = $_POST['lokasi'];
    $image = $_FILES['image']['name'];
    $target = "../../storage/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO t_now_playing (gambar, judul, genre, durasi, sinopsis, lokasi) VALUES ('$image', '$judul', '$genre', '$durasi', '$sinopsis', '$lokasi')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../../user_page.php?page=now_playing");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image";
        header("Location: ../../user_page.php?page=now_playing");
    }
}

$conn->close();
?>