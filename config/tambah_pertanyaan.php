<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_helpdesk    = $_POST['id_helpdesk'];
    $nama           = $_POST['nama'];
    $email          = $_POST['email'];
    $inbox          = $_POST['inbox'];
    $tanggal        = $_POST['tanggal'];

	$insert			= "INSERT INTO tbl_helpdesk VALUES ('', '$nama', '$email', '$inbox', '0', '$tanggal', '0', '0')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><br><br><strong><center><i>Pertanyaan berhasil ditambah!";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT = '2;url=../index.php?content=helpdesk'>";

?>
