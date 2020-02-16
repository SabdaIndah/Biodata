<?php
	include "koneksi.php";

	$idh = $_GET["hapus_id"];

	// query sql
	$sql = "DELETE FROM `mahasiswa` WHERE `Nim`='$idh'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		header("Location: tampil-data.php");
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);
?>