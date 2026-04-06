<!Doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pendaftaran Anggota Aplikasi Perpuska</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="vh-100 row justify-content-center align-items-center">
<form method="post" action="#" class="col-md-3 border p-4 bg-white rounded-4">
<h4 class="text-center">Pendaftaran Anggota</h4>
<h5 class="text-center mb-3">Aplikasi Perpuska</h5>
<input name="nama_anggota" type="text" class="form-control mb-3" placeholder="Nama Anggota" required>
<input name="username" type="text" class="form-control mb-3" placeholder="Username" required>
<input name="password" type="text" class="form-control mb-3" placeholder="Password" required>
<input name="jenis_kelamin" type="text" class="form-control mb-3" placeholder="Jenis Kelamin" required>
<input name="tempat_lahir" type="text" class="form-control mb-3" placeholder="Tempat Lahir" required>
<input name="tanggal_lahir" type="datetime" class="form-control mb-3" placeholder="Tanggal Lahir" required>
<button type="submit" name="tombol" class="btn btn-success w-100 mb-2">Daftar</button>
<a href="login-admin.php" class="text-decoration-none">💻Login sebagai admin Perpustakaan..?</a><br>
<a href="login-anggota.php" class="text-decoration-none">👥Login sebagai anggota Perpustakaan..?</a>
</form>
</div>

</body>
</html>
<?php
if(isset($_POST['tombol'])){
include 'koneksi.php';
$nama_anggota = $_POST['nama_anggota'];
$username = $_POST['username'];
$password = $_POST['password'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$query = "INSERT INTO anggota (nama_anggota, username, password, jenis_kelamin, tempat_lahir, tanggal_lahir)VALUES('$nama_anggota', '$username', '$password', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir')";
$data = mysqli_query($koneksi, $query);
if($data) {
session_start();
$_SESSION['id_anggota'] = mysqli_insert_id($koneksi);
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['nama_anggota'] = $nama_anggota;
echo"<script>alert('✅️Pendaftaran Berhasil'); window.location.assign('anggota/dashboard.php');</script>";
}else{
echo"<script>alert('❌Pendaftaran Gagal'); window.location.assign('anggota/dashboard.php');</script>";
}
}
?>