<!DOCTYPE html>
	<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	</head>
	<body>
			<!-- Header -->
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
			<!-- End Header -->
	
			<!-- Content -->

			<?php
    include 'database.php';
    $biodata= new Biodata();
    foreach ($biodata->edit($_GET['id']) as $data){
        $id2=$data['id'];
        $nama2=$data['nama'];
        $tanggal_lahir2=$data['tanggal_lahir'];
				$tempat_lahir2 = $data['tempat_lahir'];
				$jk2 = $data['jk'];
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
								<form action="index.php" method="post">
									<div class="form-group">
										<label ><b>Nama </b></label>
										<input type="text" name="nama" class="form-control" value="<?php echo $nama2?>" placeholder="Nama ..."required>
									</div>
									<div class="form-group">
										<label ><b>Tanggal Lahir</b></label>
										<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir2?>" placeholder="Tanggal Lahir ..."required>
									</div>
									<div class="form-group">
										<label><b>Tempat Lahir</b></label>
										<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir2 ?>" placeholder="Tempat Lahir ..."required>
									</div>
									<div class="form-group">
										<label><b>Jenis Kelamin </b></label>
										<input type="radio" name="jenis_kelamin" value="<?php echo $jk2 ?>"> Laki-laki
										<input type="radio" name="jenis_kelamin" value="<?php echo $jk2 ?>"> Perempuan
									</div>
									<div class="form-group">
										<label><b>Agama : </b><select name="agama" class="form-control" value="<?php echo $agama2 ?>"></label>
										<option value="islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
										<option value="Khatolik">Khatolik</option></select>
									</div>
									<div class="form-group">
										<label><b>Alamat</b></label>
										<input type="text" name="alamat" class="form-control" value="<?php echo $alamat2 ?>" required>
									</div>
									<div class="form-group">
										<label><b>Motivasi Hidup</b></label>
										<input type="text" name="motivasi_hidup" class="form-control" value="<?php echo $motivasi_hidup2 ?>" required>
   								</div>
									<div class="form-group">
								<button class="btn btn-primary btn-block">Kembali</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- End Content-->
	
			<!-- footer -->
			<footer>
				<center><b>&copy; Copyright</b></center>
	
			</footer>
			<!--  End Footer-->
	
			<!-- Js -->
			<script  src="assets/js/jquery-3.4.1.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.js"></script>
	
			<!-- End Js -->
	
	</body>
	</html>