<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_user'];
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "UPDATE t_user SET nama_user='$nama', username='$username', password='$password', level='$level' WHERE id_user=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../../user_page.php?page=datauser");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>