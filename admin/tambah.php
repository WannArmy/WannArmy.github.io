<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="tambah.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<header class="container">
		<h2>Halaman Admin</h2>
	</header>
	<div class="container-1">
		<nav>
		<ul>
			<li><a href="awal.php"><i class="fas fa-user-circle"></i><span class="ukuran">&nbsp Admin</span></a></li>
			<li><a href="dashboard.php"><i class="fas fa-th-large"></i>&nbsp Dashboard</a></li>
			<li><a href="about.php"><i class="fas fa-address-card"></i>&nbsp About</a></li>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp Logout</a></li>
		</ul>
		</nav>
	</div>
    <form action="proses-tambah.php" method="POST">
    <table>
        <tr>
            <td>
                <h3>Tambah Data User</h3>
            </td>
        </tr>
        <tr>
            <td class="jarak">Username</td>
            <td><input type="text" class="teks" name="username"></td>
        </tr>
        <tr>
            <td class="jarak">Password</td>
            <td><input type="password" class="teks" name="password"></td>
        </tr>
        <tr>
            <td class="jarak">Nama Lengkap</td>
            <td><input type="text" class="teks" name="nama"></td>
        </tr>
        <tr>
            <td class="jarak">Email</td>
            <td><input type="text" class="teks" name="email"></td>
        </tr>
        <tr>
            <td class="jarak">No.Telepon</td>
            <td><input type="text" class="teks" name="no_telepon"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>