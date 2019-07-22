<?php
    include 'koneksi.php';

    $id       = $_POST['id'];
	$result       = $_POST['result'];

	$resp = ($result == 1) ? 'Laris' : 'Tidak Laris';

    $update         = "UPDATE tbl_count SET hasil_analisis='".$resp."' WHERE id_count=".$id." ";
    $updatecount    = mysqli_query($konek, $update)or die(mysqli_error($konek));

    echo "uppdate";
    

?>