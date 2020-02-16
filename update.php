<?php
	include "koneksi.php";

	$Nim = $_POST["Nim"];
    $Nama = $_POST["Nama"];
    $Alamat = $_POST["Alamat"];
    $Email = $_POST["Email"];
    $JenisKelamin = $_POST["JenisKelamin"];
    $TanggalLahir = $_POST["TanggalLahir"];

	// query sql
	$sql = "UPDATE `mahasiswa` SET `Nama`='$Nama',`Alamat`='$Alamat',`Email`='$Email',`JenisKelamin`='$JenisKelamin',`TanggalLahir`='$TanggalLahir' WHERE `Nim`='$Nim'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		header("Location: tampil-data.php");
	} else {
		echo "Error".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);

?>