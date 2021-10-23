<?php
if(!session_id()) session_start();
require_once 'proses.php';

$proses = new Proses;

if(isset($_SESSION['id'])) {
    if($_SESSION['level'] == "user") {
     header('Location: admin.php');
    } else {
     header('Location: index.php');
    }
   }

    if (isset($_POST['submit'])) {
        $username = $proses->koneksi->real_escape_string($_POST['username']);
        $password = $proses->koneksi->real_escape_string(sha1($_POST['password']));

        $masuk = $proses->login($username, $password);

    if($masuk->num_rows > 0) {
        $data = mysqli_fetch_assoc($masuk);

    if($data['level'] == "user") {
        header('Location: admin.php');
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['level'] = $data['level'];
    } else {
        echo "Pergi ke halaman Petugas";
    }
    } else {
        $_SESSION['error'] = "Username atau password tidak valid";
    }
}
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<?php
        if (isset($_SESSION['error'])) {
        echo '<span style="color:red;">' . $_SESSION['error'] . '</span>';
    }
    ?>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <h2><b>Admin</b></h2>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Slahkan Login</p>
        <form method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
        </div>
        <!-- /.col -->
        </div>
    </form>
    </div>
</div>
</div>
<!-- jQuery -->
<script src="../template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>
	<!-- Menampung jika ada pesan -->
	<?php 
	if(isset($_GET['pesan'])) {  
		?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
</body>
</html>