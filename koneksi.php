<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$database = "db_sembako";

	// mebuat koneksi
	$koneksi = mysqli_connect($severname, $username, $password, $database);

	if (!$koneksi){
		die("Connection failed :" . mysqli_connect_eror());
	}
?>