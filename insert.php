<?php
	include "koneksi.php";

	$Nim = $_POST["Nim"];
    $Nama = $_POST["Nama"];
    $Alamat = $_POST["Alamat"];
    $Email = $_POST["Email"];
    $JenisKelamin = $_POST["JenisKelamin"];
    $TanggalLahir = $_POST["TanggalLahir"];

    echo $_POST["Nim"];

	// date_default_timezone_set("Asia/Jakarta");

	// $tgl = date("Y:m:d");

	// query sql
	$sql = "INSERT INTO `Mahasiswa`(`Nim`, `Nama`, `Alamat`, `Email`, `JenisKelamin`, `TanggalLahir`)
	 VALUES ('$Nim','$Nama','$Alamat','$Email','$JenisKelamin','$TanggalLahir')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		header("Location: tampil-data.php");
            
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	// mysqli_close($koneksi);

?>