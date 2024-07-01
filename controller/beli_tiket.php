<?php
	session_start();
	include 'connection.php';
	if($_POST){
		$id_film = $_POST['id_film'];
		$pengguna = $_SESSION['user_id'];

		$sql = "INSERT INTO t_pembelian (id_customer, id_film) VALUES ('$pengguna','$id_film')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../../tiket_bioskop/customer_page.php");
    	}
	}
?>