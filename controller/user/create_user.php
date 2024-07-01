<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "INSERT INTO t_user (nama_user,username,password,level) VALUES ('$nama','$username','$password','$level')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../../user_page.php?page=datauser");
    }
}

$conn->close();
?>