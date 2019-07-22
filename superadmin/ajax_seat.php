<?php

	include "../config/koneksi.php";

	$id_layanan = $_GET["id_layanan"];

	$query = "SELECT * FROM tbl_layanan WHERE id_layanan='$id_layanan'";

	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));
    $hasil = mysqli_fetch_array($sql);

    $seat = $hasil['jml_seat'];
    dd($seat);
    // echo $hasil['jml_seat'];

   
?>