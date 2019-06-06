<?php

	include 'koneksi.php';

    $id_helpdesk    = $_POST['id_helpdesk'];
    $inbox          = $_POST['inbox'];
    $outbox         = $_POST['outbox'];



	$update 	= "UPDATE tbl_helpdesk SET inbox='$inbox', outbox='$outbox', status='1' WHERE id_helpdesk='$id_helpdesk'";
	$updatehelp	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($updatehelp)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Dibalas!";
    		print
            "<script>
                history.back(-2);
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