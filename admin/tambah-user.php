<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data 
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['level'];
    // buat query
    $sql = "INSERT INTO tb_user (nama,kelas,username,'password','level') VALUE ('$nama', '$kelas', '$username',
    '$password', '$status')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: user.php?pesan=User telah ditambahkan');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: user.php?pesan=User gagal ditambahkan');
    }


} else {
    die("Akses dilarang...");
}

?>