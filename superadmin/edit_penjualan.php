<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_penjualan = $_GET['id_penjualan'];

    $edit    = "SELECT id_penjualan, tgl_berangkat, jam_berangkat, jam_sampai, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor, status FROM tbl_penjualan WHERE id_penjualan = '$id_penjualan'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Edit Data Penjualan</h2>
                                        <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="../config/update_penjualan.php" method="POST">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="row">
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                     <input type="hidden" class="form-control" name="id_penjualan" value="<?php echo $data['id_penjualan']; ?>" required>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="tgl_berangkat" data-mask="99/99/9999" placeholder="Tanggal Keberangkatan" value="<?php echo $data['tgl_berangkat']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="jam_berangkat" placeholder="Jam Berangkat" value="<?php echo $data['jam_berangkat']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="jam_sampai" placeholder="Jam Sampai" value="<?php echo $data['jam_sampai']; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                         <input type="text" class="form-control" name="id_armada" placeholder="Armada" value="<?php echo $data['id_armada']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                         <input type="text" class="form-control" name="id_trayek" placeholder="Trayek" value="<?php echo $data['id_trayek']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                         <input type="text" class="form-control" name="id_layanan" placeholder="Layanan" value="<?php echo $data['id_layanan']; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                         <input type="text" class="form-control" name="jml_penumpang" placeholder="Jumlah Penumpang" value="<?php echo $data['jml_penumpang']; ?>" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                         <input type="text" class="form-control" name="load_factor" placeholder="Load Factor" value="<?php echo $data['load_factor']; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button type="submit" data-toggle="tooltip" data-placement="left" title="Edit Penjualan" class="btn"><i class="notika-icon notika-checked"></i> Edit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->