<?php
	$conn = mysqli_connect('localhost','root','','db_cinema_iix');

	if(mysqli_connect_error()){
		printf("Connect failed", mysqli_connect_error());
		exit();
	}
?>