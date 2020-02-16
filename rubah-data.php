<!DOCTYPE html>
<html>
<head>
	<title>Rubah Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil-data.php">Lihat Data</a>
      </li>
    </ul>
  </div>
</nav>
<?php
		include "koneksi.php";

		$ide = $_GET["rubah_id"];

		$sql = "SELECT * FROM mahasiswa WHERE Nim='$ide'";
		$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

		if(mysqli_num_rows($query) > 0){
			$data = mysqli_fetch_array($query);
		}
	?>
<div class="container">
	<div class="row">
		<div class="col-sm-12"><br><br>
<h3>Halaman Rubah Data</h3>
<form  action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $data["Nim"];?>">
  <div class="form-group">
    <label for="NIM">NIM</label>
    <input type="text" class="form-control" name="Nim" value="<?php echo $data["Nim"];?>" id="NIM" aria-describedby="NIM">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="Nama" value="<?php echo $data["Nama"];?>">
  </div>
  <div class="form-group">
    <label>Alamatn</label>
    <input type="text" class="form-control" name="Alamat" value="<?php echo $data["Alamat"];?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="Email" value="<?php echo $data["Email"];?>">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label><br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="JenisKelamin" <?= ($data["JenisKelamin"]=='2')?"checked":"" ?> value="2">
  <label class="form-check-label" for="inlineRadio1">laki-laki</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="JenisKelamin" <?= ($data["JenisKelamin"]=='1')?"checked":"" ?> value="1">
  <label class="form-check-label" for="inlineRadio2">perempuan</label>
</div>
	</div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="TanggalLahir" value="<?php echo $data["TanggalLahir"];?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


			</div>
			</div>
			</div>
</body>
</html>