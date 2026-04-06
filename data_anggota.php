<h4> Data Anggota</h4>
<a href="?halaman=input_anggota" class="btn btn-secondary">
+ Tambah Data Anggota
</a>
<table class="table table-bordered mt-3">
<tr class="fw-bold">
<td>No</td>
<td>ID Anggota</td>
<td>Nama Anggota</td>
<td>Username</td>
<td>Password</td>
<td>Jenis Kelamin</td>
<td>Tempat Lahir</td>
<td>Tanggal Lahir</td>
<td>Kelola</td>
</tr>
<?php
$no = 1;
include'../koneksi.php';
$query = "SELECT*FROM anggota ORDER BY id_anggota DESC";
$data = mysqli_query($koneksi, $query);
foreach($data as $anggota){ ?>
<tr>
<td><?= $no++; ?></td>
<td><?= $anggota['id_anggota'] ?></td>
<td><?= $anggota['nama_anggota'] ?></td>
<td><?= $anggota['username'] ?></td>
<td><?= $anggota['password'] ?></td>
<td><?= $anggota['jenis_kelamin'] ?></td>
<td><?= $anggota['tempat_lahir'] ?></td>
<td><?= $anggota['tanggal_lahir'] ?></td>
<td>
<a class="btn btn-warning" href="?halaman=edit_anggota&id=<?= $anggota['id_anggota'] ?>"> Edit</a>
<a class="btn btn-danger" onclick="return confirm('Yakin data dihapus')" href="?halaman hapus_anggota&id=<?=$anggota['id_anggota'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>