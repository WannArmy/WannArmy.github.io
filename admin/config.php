<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "pengguna";

	$koneksi = mysqli_connect($host, $user, $pass, $db);
	if (!$koneksi){
		die ("Koneksi anda gagal : " . mysqli_connect_error());
	}
?>