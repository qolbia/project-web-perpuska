<h4> Tambah Data Anggota</h4>
<form method="post" action="#" class="mt-3">
<input name="id_anggota" type="number" class="form-control mb-2" placeholder="Id Anggota" required>
<input name="nama_anggota" type="text" class="form-control mb-2" placeholder="Nama Anggota" required>
<input name="username" type="text" class="form-control mb-2" placeholder="Username" required>
<input name="password" type="text" class="form-control mb-2" placeholder="Password" required>
<input name="jenis_kelamin" type="text" class="form-control mb-2" placeholder="Jenis Kelamin" required>
<input name="tempat_lahir" type="text" class="form-control mb-2" placeholder="Tempat Lahir" required>
<input name="tanggal_lahir" type="text" class="form-control mb-2" placeholder="Tanggal Lahir" required>
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
$data = mysqli_query($koneksi, $query);
if($data){
echo"<script>alert('✅️data tersimpan'); window.location.assign('?halaman data_anggota'); </script>";
}else{
echo"<script>alert('❌data gagal tersimpan's); window.location.assign('?halaman=input_anggota'); </script>";
}
}
?>