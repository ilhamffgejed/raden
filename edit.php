<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
	  <a class="navbar-brand" href="#">Biodata</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Raden Rizky<span class="sr-only"></span></a>
		  </li>
	 
		  </li>
	
	
		</ul>
		
	  </div>
	</nav>

	<?php
	include 'database.php';
	$biodata = new Biodata();
	foreach ($biodata->edit($_GET['id']) as $data) {
		$id2 = $data['id'];
		$nama2 = $data['nama'];
		$tanggal_lahir2 = $data['tanggal_lahir'];
		$tempat_lahir2 = $data['tempat_lahir'];
    	$jk2 = $data['jenis_kelamin'];
    	$agama2 = $data['agama'];
    	$alamat2 = $data['alamat'];
    	$motivasi_hidup2 = $data['motivasi_hidup'];
	}
	?>

	<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
						<div class="card-header"><center><b>BIODATA ANDA</b></center></div>
						
				<div class="card-body">
	<form action="proses.php?aksi=update" method="post">

		<input type="hidden" name="id" value="<?php echo $id2 ?>">

		<label><b>Nama </b></label>
		<input type="text" name="nama" value="<?php echo $nama2 ?>" placeholder="Nama ..."required>
		<br><br>

		<label><b>Tanggal Lahir</b></label>
		<input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir2 ?>" placeholder="Tanggal Lahir ..."required>
		<br><br>

		<label><b>Tempat Lahir</b></label>
		<input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir2 ?>" placeholder="Tempat Lahir ..."required>
		<br><br>

		<label><b>Jenis Kelamin </b></label>
		<input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
		<br><br>

		<label><b>Agama</b><select name="agama" class="form-control" value="<?php echo $agama2 ?>"></label>
		<option value="islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		<option value="Khatolik">Khatolik</option></select>
		<br>
		<label><b>Alamat</b></label><textarea name="alamat" value="<?php echo $alamat2 ?>" required></textarea>
		<br><br>

		<label><b>Motivasi Hidup</b></label>
		<textarea name="motivasi_hidup" value="<?php echo $motivasi_hidup2 ?>" required></textarea>
		<br><br>

		<button class="btn btn-primary btn-block" type="submit" name="simpan">Simpan</button>

	</form>

	<footer>
				<center><b>&copy; Copyright</b></center>
	</footer>

	<script  src="assets/js/jquery-3.4.1.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.js"></script>
	
</body>

</html>