<?php

	include "../config/koneksi.php";

	$id_trayek  = $_GET["id_trayek"];
	$id_layanan = $_GET["id_layanan"];
	$penumpang 	= $_GET["penumpang"];

	$query = "SELECT * FROM tbl_jadwal WHERE id_trayek = '$id_trayek' AND id_layanan = '$id_layanan'";
	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));
	$row = mysqli_fetch_array($sql);

	$pendapatan =  $penumpang * $row["harga"];

	echo $pendapatan;
?>