<?php

	include 'koneksi.php';

    $id_helpdesk = $_GET['id_helpdesk'];


	$update 	= "UPDATE tbl_helpdesk SET trash='1' WHERE id_helpdesk='$id_helpdesk'";
	$updateuser	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($updateuser)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Dipindahkan ke Trash!";
    		print
            "<script>
                history.back(-1);
            </script>"; 
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal Dipindahkan!\");
    				history.back(-1);
    			</script>";
    	}
?>