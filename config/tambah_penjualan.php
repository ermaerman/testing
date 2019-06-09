<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$level 				= $_POST['id_level'];
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

	if ($simpan)
	{
            if ($level=='1'){
                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../superadmin/index.php?content=data_penjualan">';
            }
            elseif ($level=='2') {
                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=data_penjualan">';
            }
            else {
                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../general_manager/index.php?content=data_penjualan">';
            }
    	}

	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>
