<?php

	include "../config/koneksi.php";

	$layanan	= $_GET["layanan"];
	$penumpang 	= $_GET["penumpang"];

	$query = "SELECT * FROM tbl_layanan WHERE id_layanan = '$layanan'";
	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));
	$row = mysqli_fetch_array($sql);

	$load_factor =  $penumpang / $row["jml_seat"] * (100/100);

	echo $load_factor;
	
?>