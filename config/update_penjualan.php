<?php

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
    $status             = $_POST['status'];
	$hasil_analisis    	= $_POST['hasil_analisis'];



	$update 	= "UPDATE tbl_penjualan SET tgl_berangkat='$tgl_berangkat', jam_berangkat='$jam_berangkat', jam_sampai='$jam_sampai', id_armada='$id_armada', id_trayek='$id_trayek', id_layanan='$id_layanan', jml_penumpang='$jml_penumpang', load_factor='$load_factor', status='$status', hasil_analisis='$hasil_analisis' WHERE id_penjualan='$id_penjualan'";
	$updatepenjualan	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($updatepenjualan)
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