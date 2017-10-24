<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h3>DATA SISWA</h3></center>
	<center><table border="2">
		<th>Nomor</th>
		<th>Nomor Induk Siswa</th>
		<th>Nama Siswa</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Kelas</th>
		<th colspan="3">Opsi</th>
	<?php
		include('koneksi.php');
		$d = mysqli_query($koneksi,"SELECT siswa.id,siswa.nis,siswa.nama,siswa.jk,siswa.tempat_lahir,siswa.tgl_lahir,siswa.alamat,kelas.kelas as nama_kelas FROM siswa join kelas on kelas.id=siswa.id_kelas ");
		
		$no = 1;

		foreach ($d as $data) {
				
			echo "<tr>
			<td>$no</td>
			<td>".$data['nis']."</td>
			<td>".$data['nama']."</td>
			<td>".$data['jk']."</td>
			<td>".$data['tempat_lahir']."</td>
			<td>".$data['tgl_lahir']."</td>
			<td>".$data['alamat']."</td>
			<td>".$data['nama_kelas']."</td>
			<td><a href='show.php?id=$data[id]'>Show</a></td>
			<td><a href='edit.php?id=$data[id]'>Edit</a></td>
			<td><a href='delete.php?id=$data[id]'>Delete</a></td>
			</tr>";
			$no++;
			}	
		  ?>
	</table>
	</center>
	<br>
	<center><a href="tambah.php"> &plus; Tambah Data Kelas </a></center>
</body>
</html>