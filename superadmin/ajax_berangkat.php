<?php

	include "../config/koneksi.php";

	$id_trayek  = $_GET["id_trayek"];
	$id_layanan = $_GET["id_layanan"];

	$query = "SELECT DISTINCT id_jam FROM tbl_jadwal WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' order by id_jam ASC";

	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['id_jam']; ?>">
			<?php 
				if($row['id_jam']=='1'){
					echo "08:00";
				}
				elseif ($row['id_jam']=='2'){
					echo "10:00";
				}
				elseif ($row['id_jam']=='3'){
					echo "14:00";
				}
				elseif ($row['id_jam']=='4'){
					echo "16:00";
				}
				elseif ($row['id_jam']=='5'){
					echo "20:00";
				}
				elseif ($row['id_jam']=='6'){
					echo "22:00";
				}
			?>
		</option>
	<?php
	}
	?>
?>