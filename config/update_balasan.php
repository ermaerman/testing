<?php

	include 'koneksi.php';

    $id_helpdesk    = $_POST['id_helpdesk'];
    $inbox          = $_POST['inbox'];
    $outbox         = $_POST['outbox'];



	$update 	= "UPDATE tbl_helpdesk SET inbox='$inbox', outbox='$outbox', status='1' WHERE id_helpdesk='$id_helpdesk'";
	$updatehelp	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($updatehelp)
    	{
    		 if ($_SESSION['id_level']==1){
                echo "<br><br><br><strong><center><i>Berhasil menambahkan balasan!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../superadmin/index.php?content=sudah_dibalas">';
            }
            else {
                echo "<br><br><br><strong><center><i>Berhasil menambahkan balasan!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=sudah_dibalas">';
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