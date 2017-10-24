<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
</head>
<body>
	<?php
		include('/laragon/www/rizkyfa/siswa/koneksi.php');
		$id 	= $_GET['id'];
		$d = mysqli_query($koneksi,"SELECT siswa.id,siswa.nis,siswa.nama,siswa.jk,siswa.tempat_lahir,siswa.tgl_lahir,siswa.alamat,kelas.kelas as nama_kelas FROM siswa join kelas on kelas.id=siswa.id_kelas WHERE siswa.id='$id'");
		$data	= mysqli_fetch_array($d);
	?>

	<center><h3>Show Data siswa</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Show Biodata siswa</legend>
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<p>
				Nomor Induk Siswa<br />
				<input type="number" name="nis" class="form-control" value="<?php echo $data['nis'];?>" readonly>
			</p>
			<p>
				Nama Siswa<br />
				<input type="text" name="nama_siswa" class="form-control" value="<?php echo $data['nama'];?>" readonly>
			</p>
			<p>
				Jenis Kelamin<br />
				<input type="text" name="jk" class="form-control" value="<?php echo $data['jk'];?>" readonly>
			</p>
			<p>
				Tempat Lahir<br />
				<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>" readonly>
			</p>
			<p>
				Tanggal Lahri<br />
				<input type="text" name="tgl_lahir" class="form-control" value="<?php echo $data['tgl_lahir'];?>" readonly>
			</p>
			<p>
				alamat<br />
				<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'];?>" readonly>
			</p>
			<p>
				kelas<br />
				<input type="text" name="kelas" class="form-control" value="<?php echo $data['nama_kelas'];?>" readonly>
			</p>
	</fieldset>
	<br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</center>
</body>
</html>