<?php

	include 'koneksi.php';

	$id_penjualan = $_GET ['id_penjualan'];

	$hapus 	 = "DELETE FROM tbl_penjualan WHERE id_penjualan='$id_penjualan'";
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