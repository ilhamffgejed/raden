<html>

<head>
	<title>CRUD</title>
</head>

<body>
	<center><b>SILAHKAN ISI BIODATA</b></center>

	<form action="proses.php?aksi=tambah" method="post">

		<label><b>Nama : </b></label>
		<input type="text" name="nama" placeholder="Nama ..."required>
		<br><br>
		<label><b>Tanggal Lahir : </b></label>
		<input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir ..."required>
		<br><br>
		<label><b>Tempat Lahir : </b></label>
		<input type="text" name="tempat_lahir" placeholder="Tempat Lahir ..."required>
		<br><br>
		<label><b>Jenis Kelamin : </b></label>
		<input type="radio" name="jenis_kelamin" value="Laki-laki" required >Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" required >Perempuan
		<br><br>
		<label><b>Agama : </b><select name="agama" class="form-control"></label>
		<option value="islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		<option value="Khatolik">Khatolik</option></select>
		<br><br>
		<b>Alamat : </b><textarea name="alamat" required ></textarea>
		<br><br>
		<b>Motivasi Hidup : </b>
		<textarea name="motivasi_hidup" required ></textarea>
		<br><br>
		<button type="submit" name="simpan">Simpan</button>

	</form>
</body>

</html>