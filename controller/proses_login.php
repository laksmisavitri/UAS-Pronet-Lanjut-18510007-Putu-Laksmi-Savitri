<?php
	session_start();

	include "connection.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "") {
		$_SESSION['gagal'] = "Username dan Password tidak boleh kosong !";
			header("location:../signin.php");
	}else{
		$q = mysqli_query($conn, "SELECT * from t_customers where username='$username' and password='$password'");
		$r = mysqli_fetch_array ($q);

		$q2 = mysqli_query($conn, "SELECT * from t_user where username='$username' and password='$password'");
		$row = mysqli_fetch_array ($q2);

		if (mysqli_num_rows($q) == 1) {
		    $_SESSION['user_id'] = $r['id_pengguna'];
		    $_SESSION['nama'] = $r['nama_pengguna'];
		    $_SESSION['username'] = $r['username'];
		    $_SESSION['level'] = 'pengguna';
		    header('location:../customer_page.php');
		}elseif (mysqli_num_rows($q2) == 1) {
		    if ($row['level'] == "admin") {
		    	$_SESSION['user_id'] = $row['id_user'];
		    	$_SESSION['nama'] = $row['nama_user'];
			    $_SESSION['username'] = $row['username'];
			    $_SESSION['level'] = 'admin';
			    header('location:../user_page.php');
		    }elseif ($row['level'] == "owner") {
		    	$_SESSION['user_id'] = $row['id_user'];
		    	$_SESSION['nama'] = $row['nama_user'];
			    $_SESSION['username'] = $row['username'];
			    $_SESSION['level'] = 'owner';
			    header('location:../user_page.php');
		    }
		}else {
		    $_SESSION['gagal_login'] = "Username dan Password tidak sesuai !";
				header("location:../signin.php");
		}
	}
?>