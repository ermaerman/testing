<?php

    include 'koneksi.php';

    date_default_timezone_set('Asia/Jakarta');

    $level 				= $_POST['id_level'];
    $id_jam				= $_POST['id_jam'];
    $id_armada			= $_POST['id_armada'];
    $id_trayek			= $_POST['id_trayek'];
    $id_layanan         = $_POST['id_layanan'];
    $jml_penumpang		= $_POST['jml_penumpang'];
    $load_factor		= $_POST['load_factor'];
    $tgl_berangkat      = date('Y-m-d');    

    $insert			= "INSERT INTO tbl_penjualan(tgl_berangkat, id_jam, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor)VALUES('$tgl_berangkat', '$id_jam', '$id_armada', '$id_trayek', '$id_layanan', '$jml_penumpang', '$load_factor')";

    $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
    // var_dump($simpan);
    
	if ($simpan=='true')
	{
            if ($level=='1'){
                // input -> cek di penjualan, apakah jumlah penjualan pada hari ini sudah sama dengan jumlah armada yg ada pada    trayek dan layanan tsb -> jika sudah sesuai, maka akan menjumlahkan jml_penumpang dan jml seat
                $querycek           = "SELECT COUNT(*) AS cek_penjualan FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$tgl_berangkat' AND id_jam='$id_jam'";
                $query              = mysqli_query($konek, $querycek)or die(mysqli_error($konek));
                $result             = mysqli_fetch_assoc($query);
                $record_penjualan   = $result['cek_penjualan'];

                $jadwal_cek         = "SELECT COUNT(*) AS cek_jadwal FROM tbl_jadwal WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND id_jam='$id_jam'";
                $query              = mysqli_query($konek, $jadwal_cek)or die(mysqli_error($konek));
                $result             = mysqli_fetch_assoc($query);
                $record_jadwal      = $result['cek_jadwal'];
                // var_dump($record_penjualan);
                // var_dump($record_jadwal);

                if($record_penjualan===$record_jadwal){
                    $sum_penumpang  = "SELECT SUM(jml_penumpang) AS pnmp FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$tgl_berangkat' AND id_jam='$id_jam'";
                    $query          = mysqli_query($konek, $sum_penumpang)or die(mysqli_error($konek));
                    $result         = mysqli_fetch_assoc($query);
                    $sum_pnmp       = $result['pnmp'];

                    var_dump($sum_pnmp);

                    $lquery   = "SELECT * FROM tbl_layanan WHERE id_layanan=$id_layanan";
                    $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                    $lshow    = mysqli_fetch_array($query);

                    $seat     = $lshow['jml_seat'];
                    // var_dump($seat);

                    $cek          = "SELECT COUNT(id_layanan) AS layanan FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$tgl_berangkat' AND id_jam='$id_jam'";
                    $query        = mysqli_query($konek, $cek)or die(mysqli_error($konek));
                    $result       = mysqli_fetch_assoc($query);
                    $count_l      = $result['layanan'];
                    // var_dump($count_l);

                    $jml_seat     = $count_l * $seat;
                    var_dump($jml_seat);

                    $insertcount    = "INSERT INTO tbl_count(tgl_berangkat,id_jam,id_trayek,id_layanan,jml_penumpang,jml_seat)VALUES('$tgl_berangkat', '$id_jam', '$id_trayek', '$id_layanan','$sum_pnmp', '$jml_seat')";
                    $querycount     = mysqli_query($konek, $insertcount)or die(mysqli_error($konek));

                }

                if($id_layanan==1){
                    $insert         = "INSERT INTO dataset(id_jam, id_trayek, id_layanan, jml_seat, jml_penumpang)VALUES('$id_jam','$id_trayek','$id_layanan','23','$jml_penumpang')";

                    $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));
                }
                elseif($id_layanan==2){
                    $insert         = "INSERT INTO dataset(id_jam, id_trayek, id_layanan, jml_seat, jml_penumpang)VALUES('$id_jam','$id_trayek','$id_layanan','30','$jml_penumpang')";

                    $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));
                }
                elseif($id_layanan==3){
                    $insert         = "INSERT INTO dataset(id_jam, id_trayek, id_layanan, jml_seat, jml_penumpang)VALUES('$id_jam','$id_trayek','$id_layanan','40','$jml_penumpang')";

                    $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));
                }

                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../superadmin/index.php?content=data_penjualan">';
            }
            elseif ($level=='2') {
            // input -> cek di penjualan, apakah jumlah penjualan pada hari ini sudah sama dengan jumlah armada yg ada pada    trayek dan layanan tsb -> jika sudah sesuai, maka akan menjumlahkan jml_penumpang dan jml seat
                $querycek           = "SELECT COUNT(*) AS cek_penjualan FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$tgl_berangkat' AND id_jam='$id_jam'";
                $query              = mysqli_query($konek, $querycek)or die(mysqli_error($konek));
                $result             = mysqli_fetch_assoc($query);
                $record_penjualan   = $result['cek_penjualan'];

                $jadwal_cek         = "SELECT COUNT(*) AS cek_jadwal FROM tbl_jadwal WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND id_jam='$id_jam'";
                $query              = mysqli_query($konek, $jadwal_cek)or die(mysqli_error($konek));
                $result             = mysqli_fetch_assoc($query);
                $record_jadwal      = $result['cek_jadwal'];
                // var_dump($record_penjualan);
                // var_dump($record_jadwal);

                if($record_penjualan===$record_jadwal){
                    $sum_penumpang  = "SELECT SUM(jml_penumpang) AS pnmp FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$tgl_berangkat' AND id_jam='$id_jam'";
                    $query          = mysqli_query($konek, $sum_penumpang)or die(mysqli_error($konek));
                    $result         = mysqli_fetch_assoc($query);
                    $sum_pnmp       = $result['pnmp'];

                    var_dump($sum_pnmp);

                    $lquery   = "SELECT * FROM tbl_layanan WHERE id_layanan=$id_layanan";
                    $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                    $lshow    = mysqli_fetch_array($query);

                    $seat     = $lshow['jml_seat'];
                    // var_dump($seat);

                    $cek          = "SELECT COUNT(id_layanan) AS layanan FROM tbl_penjualan WHERE id_trayek='$id_trayek' AND id_layanan='$id_layanan' AND tgl_berangkat='$tgl_berangkat' AND id_jam='$id_jam'";
                    $query        = mysqli_query($konek, $cek)or die(mysqli_error($konek));
                    $result       = mysqli_fetch_assoc($query);
                    $count_l      = $result['layanan'];
                    // var_dump($count_l);

                    $jml_seat     = $count_l * $seat;
                    var_dump($jml_seat);

                    $insertcount    = "INSERT INTO tbl_count(tgl_berangkat,id_jam,id_trayek,id_layanan,jml_penumpang,jml_seat)VALUES('$tgl_berangkat', '$id_jam', '$id_trayek', '$id_layanan','$sum_pnmp', '$jml_seat')";
                    $querycount     = mysqli_query($konek, $insertcount)or die(mysqli_error($konek));

                }

                if($id_layanan==1){
                    $insert         = "INSERT INTO dataset(id_jam, id_trayek, id_layanan, jml_seat, jml_penumpang)VALUES('$id_jam','$id_trayek','$id_layanan','23','$jml_penumpang')";

                    $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));
                }
                elseif($id_layanan==2){
                    $insert         = "INSERT INTO dataset(id_jam, id_trayek, id_layanan, jml_seat, jml_penumpang)VALUES('$id_jam','$id_trayek','$id_layanan','30','$jml_penumpang')";

                    $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));
                }
                elseif($id_layanan==3){
                    $insert         = "INSERT INTO dataset(id_jam, id_trayek, id_layanan, jml_seat, jml_penumpang)VALUES('$id_jam','$id_trayek','$id_layanan','40','$jml_penumpang')";

                    $query          = mysqli_query($konek, $insert)or die(mysqli_error($konek));
                }

                echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../superadmin/index.php?content=data_penjualan">';
    }

	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>
