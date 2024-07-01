<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO t_customers (nama_pengguna,no_telp,email,username,password) VALUES ('$nama','$notelp','$email','$username','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../signin.php");
    }
}

$conn->close();
?>