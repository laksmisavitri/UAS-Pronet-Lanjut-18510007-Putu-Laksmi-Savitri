<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $lokasi = $_POST['lokasi'];
    $theater = $_POST['id_theater'];

    $sql = "UPDATE t_lokasi_theater SET lokasi=?, id_theater=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $lokasi, $theater, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: ../../user_page.php?page=lokasi_theater");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
