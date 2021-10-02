<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="bagian-admin.css">
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
	<a href="tambah.php">
	<button class="tombol">
		Tambah Data
	</button>
	</a>
	<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>No telepon</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tambah";
        $query = mysqli_query($koneksi, $sql);

        while($user = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['username']."</td>";
            echo "<td>".$user['nama']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['no_telepon']."</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
</body>
</html>