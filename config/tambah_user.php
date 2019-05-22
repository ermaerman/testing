<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_user    = $_POST['id_user'];
    $nik        = $_POST['nik'];
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $no_telp    = $_POST['no_telp'];
    $id_divre   = $_POST['id_divre'];
    $id_cabang  = $_POST['id_cabang'];
    $foto       = $_POST['foto'];
    $alamat     = $_POST['alamat'];
    $id_level   = $_POST['id_level'];

	$insert			= "INSERT INTO tbl_user VALUES ('','$nik', '$nama', '$email', '$password', '$no_telp', '$id_divre', '$id_cabang', '$foto', '$alamat', '$id_level')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	print
        "<script>
            history.back(-1);
        </script>";  

?>
