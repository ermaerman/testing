<?php

	include 'koneksi.php';

	$id_user = $_GET ['id_user'];

	$hapus 	 = "DELETE FROM tbl_user WHERE id_user='$id_user'";
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