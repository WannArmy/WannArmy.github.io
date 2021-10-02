<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" href="styles-login.css">
</head>
<body>
	<form action="login.php" method="POST">
	<div class="kotak">
			<h1>Silahkan Login</h1>
		<label>Username :</label>
		<input type="text" name="username" placeholder="masukkan username" required="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit" name="submit" class="tombol">LOGIN</button>
	</div>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php 
	if(isset($_GET['pesan'])) {  
		?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
</body>
</html>