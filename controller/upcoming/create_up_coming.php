<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];
    $sinopsis = $_POST['sinopsis'];
    $image = $_FILES['image']['name'];
    $target = "../../storage/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO t_up_coming (gambar, judul, genre, durasi, sinopsis) VALUES ('$image', '$judul', '$genre', '$durasi', '$sinopsis')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../../user_page.php?page=upcoming");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image";
        header("Location: ../../user_page.php?page=upcoming");
    }
}

$conn->close();
?>