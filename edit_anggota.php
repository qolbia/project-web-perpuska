<?php
include'../koneksi.php';
$id = $_GET['id'];
$query_anggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota='$id'");
$data_anggota = mysqli_fetch_array($query_anggota);
?>
<h4> Edit Data Anggota</h4>
<form method="post" action="#" class="mt-3">
<input value="<?= $data_anggota['id_anggota'] ?>" name="id_anggota" type="number" class="form-control mb-2" placeholder="ID Anggota" required>
<input value="<?= $data_anggota['nama_anggota'] ?>" name="nama_anggota" type="text" class="form-control mb-2" placeholder="Nama Anggota" required>
<input value="<?= $data_anggota['username'] ?>" name="username" type="text" class="form-control mb-2" placeholder="Username" required>
<input value="<?= $data_anggota['password'] ?>" name="password" type="text" class="form-control mb-2" placeholder="Password" required>
<input value="<?= $data_anggota ['jenis_kelamin'] ?>" name="jenis_kelamin" type="text" class="form-control mb-2" placeholder="Jenis Kelamin" required>
<input value="<?= $data_anggota['tempat_lahir'] ?>" name="tempat_lahir" type="text" class="form-control mb-2" placeholder="Tempat Lahir" required>
<input value="<?= $data_anggota ['tanggal_lahir'] ?>" name="tanggal_lahir" type="text" class="form-control mb-2" placeholder="Tanggal Lahir" required>
<button name="tombol" type="submit" class="btn btn-primary"> SIMPAN</button>
</form>
<?php
if(isset($_POST['tombol'])){
$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$username = $_POST['username'];
$pass = $_POST['password'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
include'../koneksi.php';
$query = "INSERT INTO anggota (id_anggota, nama_anggota, username, password, jenis_kelamin, tempat_lahir, tanggal_lahir) VALUES('$id_anggota', '$nama_anggota', '$username', '$pass', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir')";
$data = mysqli_query($koneksi,$query);
if($data){
echo"<script>alert('✅️data tersimpan'); window.location.assign('?halaman data_anggota'); </script>";
}else{
echo"<script>alert('❌data gagal tersimpan's); window.location.assign('?halaman=input_anggota'); </script>";
}
}
?>
