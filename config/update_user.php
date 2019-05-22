<?php

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



	$update 	= "UPDATE tbl_user SET nik='$nik', nama='$nama', email='$email', password='$password', no_telp='$no_telp', id_divre='$id_divre', id_cabang='$id_cabang', foto='$foto', alamat='$alamat', id_level='$id_level' WHERE id_user='$id_user'";
	$updateuser	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($updateuser)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		print
            "<script>
                history.back(-1);
            </script>"; 
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>