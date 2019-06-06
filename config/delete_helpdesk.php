<?php

	include 'koneksi.php';

	$id_helpdesk = $_GET ['id_helpdesk'];

	$hapus 	 = "DELETE FROM tbl_helpdesk WHERE id_helpdesk='$id_helpdesk'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
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