<?php

	include "../config/koneksi.php";

	$id_trayek = $_GET["id_trayek"];

	$query = "SELECT DISTINCT id_layanan FROM tbl_jadwal WHERE id_trayek='$id_trayek' order by id_layanan ASC";
	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['id_layanan']; ?>">
			<?php 
				if($row['id_layanan']=='1'){
					echo "Royal";
				}
				elseif ($row['id_layanan']=='2'){
					echo "Eksekutif";
				}
				else {
					echo "Bisnis";
				}
			?>
		</option>
	<?php
	}
	?>
?>