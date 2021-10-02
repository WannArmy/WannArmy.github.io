<?php

include 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM akun 
                        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if(mysqli_num_rows($result) > 0){
      echo "<h1>Selamat Datang, ".$username."!</h1>";
	  echo "<a href='admin.php'>Tekan Ini untuk lanjut</a>";
}else{
      echo "<h2>Username atau Password Salah!</h2>";
}
?>