<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];
    $sinopsis = $_POST['sinopsis'];
    $image = $_FILES['image']['name'];
    $target = "../../storage/" . basename($image);

    if ($image) {

        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "UPDATE t_up_coming SET gambar='$image', judul='$judul', genre='$genre', durasi='$durasi', sinopsis='$sinopsis' WHERE id=$id";
    } else {
        $sql = "UPDATE t_up_coming SET judul='$judul', genre='$genre', durasi='$durasi', sinopsis='$sinopsis' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../../user_page.php?page=upcoming");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>