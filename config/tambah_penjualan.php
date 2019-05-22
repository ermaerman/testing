<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_penjualan       = $_POST['id_penjualan'];
    $tgl_berangkat      = $_POST['tgl_berangkat'];
    $jam_berangkat      = $_POST['jam_berangkat'];
    $jam_sampai         = $_POST['jam_sampai'];
    $id_armada          = $_POST['id_armada'];
    $id_trayek          = $_POST['id_trayek'];
    $id_layanan         = $_POST['id_layanan'];
    $jml_penumpang      = $_POST['jml_penumpang'];
    $load_factor        = $_POST['load_factor'];
	$status    	        = $_POST['status'];
	$hasil_analisis    	= $_POST['hasil_analisis'];

	$insert			= "INSERT INTO tbl_penjualan VALUES ('','$tgl_berangkat', '$jam_berangkat', '$jam_sampai', '$id_armada', '$id_trayek', '$id_layanan', '$jml_penumpang', '$load_factor', 0, '-')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	print
		"<script>
    		history.back(-1);
    	</script>";  

?>
