<?php

	include "../config/koneksi.php";

	$id_trayek  = $_GET["id_trayek"];
	$id_layanan = $_GET["id_layanan"];
	$id_jam     = $_GET["id_jam"];

	$query = "SELECT DISTINCT id_armada FROM tbl_jadwal WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND id_jam='$id_jam' order by id_armada ASC";

	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['id_armada']; ?>">
			<?php
				$nmrarmada    = $row['id_armada'];
				$query  	  = "SELECT * FROM tbl_armada WHERE id_armada='$nmrarmada'";
                $armada 	  = mysqli_query($konek, $query)or die(mysqli_error($konek));
				$tampilArmada = mysqli_fetch_array($armada);

				echo $tampilArmada['armada'];
			?>
			<!-- <?php echo $row["id_armada"]; ?> -->
		</option>
	<?php
	}
	?>
?>