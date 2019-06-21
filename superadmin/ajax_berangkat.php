<?php

	include "../config/koneksi.php";

	$id_layanan = $_GET["id_layanan"];
	$id_trayek  = $_GET["id_trayek"];

	$query = "SELECT DISTINCT id_jam FROM tbl_jadwal WHERE id_layanan='$id_layanan' AND id_trayek='$id_trayek' order by id_jam ASC;";
	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['id_jam']; ?>"><?php echo $row["id_jam"]; ?></option>
	<?php
	}
	?>
?>