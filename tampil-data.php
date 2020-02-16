<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
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
<div class="container">
	<div class="row">
		<div class="col-sm-12"><br><br>
<h3>Tampilkan Data</h3>

<a href="TambahData.php" class="btn btn-primary">Tambah</a>
	<table  class="table">
		<thead>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>TanggalLahir</th>
			<th>Jenis Kelamin</th>
			<th colspan="2">Aksi</th>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";

				// query sql
				$sql = "SELECT * FROM Mahasiswa";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

				$no = 1; // no. urut

				while($data = mysqli_fetch_array($query)){

					$Nim = $data["Nim"];
                    $Nama = $data["Nama"];
                    $Alamat = $data["Alamat"];
                    $Email = $data["Email"];
                    $JenisKelamin = $data["JenisKelamin"];
                    if($JenisKelamin == 1){
                        $JenisKelamin = "Perempuan";
                    }else{
                        $JenisKelamin = "Laki-laki";
                    }
                    $TanggalLahir = $data["TanggalLahir"];

					echo "<tr>
							<td>$no</td>
							<td>$Nim</td>
							<td>$Nama</td>
							<td>$Alamat</td>
							<td>$Email</td>
							<td>$TanggalLahir</td>
							<td>$JenisKelamin</td>
							<td>
								<a class='btn btn-info' href='rubah-data.php?rubah_id=$Nim'>Rubah</a>
								<a class='btn btn-danger' href='hapus.php?hapus_id=$Nim'>Hapus</a>
							</td>
						  </tr>";
					$no++;
				}
			?>

			
		</tbody>
	</table>
			</div>
			</div>
			</div>
</body>
</html>