<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $theater = $_POST['nama_theater'];

    $sql = "INSERT INTO t_theater (nama_theater) VALUES ('$theater')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../../user_page.php?page=theater");
    }
}

$conn->close();
?>