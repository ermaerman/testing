<?php

	include 'koneksi.php';

    $id_count                 = $_POST['id_count'];



	$update 	= "UPDATE tbl_count SET status='1' WHERE id_count='$id_count'";
	$updatecount	= mysqli_query($konek, $update)or die(mysqli_error($konek));
?>
