<!DOCTYPE html>
<html>
<head>
	<h3>Formulir Pendaftaran Siswa Baru</h3>
</head>
<body>
	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>
	</form>
	</body>
</html>
