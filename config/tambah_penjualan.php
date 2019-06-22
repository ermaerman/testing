<?php

	// error_reporting(0);
	
	include 'koneksi.php';
    date_default_timezone_set('Asia/Jakarta');

	$level 				= $_POST['id_level'];
	$id_penjualan       = $_POST['id_penjualan'];
    $tgl_berangkat      = date('Y-m-d');
    $id_jam             = $_POST['id_jam'];
    $id_armada          = $_POST['id_armada'];
    $id_trayek          = $_POST['id_trayek'];
    $id_layanan         = $_POST['id_layanan'];
    $jml_penumpang      = $_POST['jml_penumpang'];
    $load_factor        = $_POST['load_factor'];

	$insert			= "INSERT INTO tbl_penjualan VALUES ('','$tgl_berangkat', '$id_jam', '$id_armada', '$id_trayek', '$id_layanan', '$jml_penumpang', '$load_factor')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	if ($simpan)
	{
            if ($level=='1'){

                date_default_timezone_set('Asia/Jakarta');
                $date       = date('Y-m-d');
                var_dump($date);
                if ($tgl_berangkat==$date)
                {
                    // input -> cek di penjualan, apakah jumlah penjualan pada hari ini sudah sama dengan jumlah armada yg ada pada    trayek dan layanan tsb -> jika sudah sesuai, maka akan menjumlahkan jml_penumpang dan jml seat

                    $cek_tbl      = "SELECT COUNT(*) AS cek FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$date' AND id_jam='$id_jam'";
                    $query_cek    = mysqli_query($konek, $cek_tbl)or die(mysqli_error($konek));
                    $result       = mysqli_fetch_assoc($query_cek);
                    $count        = $result['cek'];
                    // var_dump($count);

                    $cek          = "SELECT COUNT(*) AS armada FROM tbl_jadwal WHERE id_jam='$id_jam' AND id_trayek='$id_trayek' AND id_layanan='$id_layanan'";
                    $query        = mysqli_query($konek, $cek)or die(mysqli_error($konek));
                    $result       = mysqli_fetch_assoc($query);
                    $count_armada = $result['armada'];
                    // var_dump($count_armada);

                    if ($count == $count_armada)
                    {
                        $pnmp         = "SELECT SUM(jml_penumpang) AS pnmp FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$date' AND id_jam='$id_jam'";
                        $query        = mysqli_query($konek, $pnmp)or die(mysqli_error($konek));
                        $result       = mysqli_fetch_assoc($query);
                        $sum_pnmp     = $result['pnmp'];

                        // var_dump($sum_pnmp);

                        $lquery   = "SELECT * FROM tbl_layanan WHERE id_layanan=$id_layanan";
                        $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                        $lshow    = mysqli_fetch_array($query);

                        $seat     = $lshow['jml_seat'];
                        // var_dump($seat);

                        $cek          = "SELECT COUNT(id_layanan) AS layanan FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$date' AND id_jam='$id_jam'";
                        $query        = mysqli_query($konek, $cek)or die(mysqli_error($konek));
                        $result       = mysqli_fetch_assoc($query);
                        $count_l      = $result['layanan'];
                        var_dump($count_l);

                        $jml_seat     = $count_l * $seat;

                        // var_dump($jml_seat);

                        $insertcount    = "INSERT INTO tbl_count(tgl_berangkat,id_jam,id_trayek,id_layanan,jml_penumpang,jml_seat)VALUES('$')";
                        $querycount     = mysqli_query($konek, $insert)or die(mysqli_error($konek));   

                        $insert         = "INSERT INTO dataset(jml_penumpang, jml_seat)VALUES('$sum_pnmp','$jml_seat')";

                        $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));   
                    }

                }
                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../superadmin/index.php?content=data_penjualan">';
            }
            elseif ($level=='2') {
                date_default_timezone_set('Asia/Jakarta');
                $date       = date('Y-m-d');
                var_dump($date);
                if ($tgl_berangkat==$date)
                {
                    // input -> cek di penjualan, apakah jumlah penjualan pada hari ini sudah sama dengan jumlah armada yg ada pada    trayek dan layanan tsb -> jika sudah sesuai, maka akan menjumlahkan jml_penumpang dan jml seat

                    $cek_tbl      = "SELECT COUNT(*) AS cek FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$date' AND id_jam='$id_jam'";
                    $query_cek    = mysqli_query($konek, $cek_tbl)or die(mysqli_error($konek));
                    $result       = mysqli_fetch_assoc($query_cek);
                    $count        = $result['cek'];
                    // var_dump($count);

                    $cek          = "SELECT COUNT(*) AS armada FROM tbl_jadwal WHERE id_jam='$id_jam' AND id_trayek='$id_trayek' AND id_layanan='$id_layanan'";
                    $query        = mysqli_query($konek, $cek)or die(mysqli_error($konek));
                    $result       = mysqli_fetch_assoc($query);
                    $count_armada = $result['armada'];
                    var_dump($count_armada);

                    if ($count == $count_armada)
                    {
                        $pnmp         = "SELECT SUM(jml_penumpang) AS pnmp FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$date' AND id_jam='$id_jam'";
                        $query        = mysqli_query($konek, $pnmp)or die(mysqli_error($konek));
                        $result       = mysqli_fetch_assoc($query);
                        $sum_pnmp     = $result['pnmp'];

                        // var_dump($sum_pnmp);

                        $lquery   = "SELECT * FROM tbl_layanan WHERE id_layanan=$id_layanan";
                        $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                        $lshow    = mysqli_fetch_array($query);

                        $seat     = $lshow['jml_seat'];
                        // var_dump($seat);

                        $cek          = "SELECT COUNT(id_layanan) AS layanan FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$date' AND id_jam='$id_jam'";
                        $query        = mysqli_query($konek, $cek)or die(mysqli_error($konek));
                        $result       = mysqli_fetch_assoc($query);
                        $count_l      = $result['layanan'];
                        var_dump($count_l);

                        $jml_seat     = $count_l * $seat;

                        // var_dump($jml_seat);

                        $insert         = "INSERT INTO dataset(jml_penumpang, jml_seat)VALUES('$sum_pnmp','$jml_seat')";

                        $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));   
                    }

                }
                
                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?content=data_penjualan">';
            }
            else {
                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../general_manager/index.php?content=data_penjualan">';
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
