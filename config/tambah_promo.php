<?php

// error_reporting(0);
    
    include 'koneksi.php';
    date_default_timezone_set('Asia/Jakarta');

    $level              = $_POST['id_level'];
    $id_pnp_promo       = $_POST['id_pnp_promo'];
    $tgl_berangkat      = date('Y-m-d');
    $id_jam             = $_POST['id_jam'];
    $id_armada          = $_POST['id_armada'];
    $id_trayek          = $_POST['id_trayek'];
    $id_layanan         = $_POST['id_layanan'];
    $jml_penumpang      = $_POST['jml_penumpang'];
    $id_promo           = $_POST['id_promo'];

    $insert         = "INSERT INTO tbl_pnp_promo VALUES ('','$tgl_berangkat', '$id_jam', '$id_armada', '$id_trayek', '$id_layanan', '$jml_penumpang', '$id_promo')";

    $simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));

    echo "<br><br><br><br><br><strong><center><i>Data berhasil ditambah!";
    print
            "<script>
                history.back(-1);
            </script>"; 

?>
