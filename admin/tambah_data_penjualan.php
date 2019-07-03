
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
                                        <h2>Tambah Data Penjualan</h2>
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
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <form action="../config/tambah_penjualan.php" class="form-horizontal" method="POST">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="form-example-int form-horizental mg-t-15">
                            <?php
                                $level = $_SESSION['id_level'];
                            ?>
                            <input type="hidden" name="id_level" value="<?php echo $level?>">
                            <!-- <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Tanggal Keberangkatan</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="date" name="tgl_berangkat" class="form-control input-sm" placeholder="Tanggal Keberangkatan" required>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Trayek</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="id_trayek" id="trayek" class="form-control">
                                                <option>-- Pilih Trayek --</option>
                                                <?php 
                                                    $query  = "SELECT * FROM tbl_trayek";
                                                    $trayek = mysqli_query($konek, $query);
                                                    while ($tampilTrayek = mysqli_fetch_array($trayek)){
                                                ?>
                                                    <option value="<?php echo $tampilTrayek['id_trayek'] ?>"><?php echo $tampilTrayek['asal']." - ".$tampilTrayek['tujuan'] ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm">Jenis Layanan</label>
                                </div>
                                <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <select name="id_layanan" id="layanan" class="form-control">
                                            <option>-- Pilih Jenis Layanan --</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <!-- <label class="hrzn-fm">Jenis Layanan</label> -->
                                </div>
                                <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <!-- <input type="text" name="jml_seat" id="seat"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Jam Berangkat</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                           <select name="id_jam" id="jam" class="form-control">
                                                <option>-- Pilih Jam Berangkat --</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Armada</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="id_armada" id="armada" class="form-control">
                                                <option>-- Pilih Armada --</option>
                                                <!-- <?php
                                                    $query  = "SELECT * FROM tbl_armada";
                                                    $armada = mysqli_query($konek,$query);
                                                    while ($tampil = mysqli_fetch_array($armada)) {
                                                ?>
                                                    <option value="<?php echo $tampil['id_armada'] ?>"><?php echo $tampil['armada'] ?></option>
                                                <?php 
                                                    }
                                                ?> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Jumlah Penumpang</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="jml_penumpang" id="penumpang" class="form-control input-sm" placeholder="Jumlah Penumpang" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Pendapatan (Rp.)</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="pendapatan" id="pendapatan" class="form-control input-sm" placeholder="Pendapatan" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Load Factor</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="load_factor" id="load_factor" class="form-control input-sm" placeholder="Load Factor" readonly>
                                        </div>
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
                                    <button type="submit" data-toggle="tooltip" data-placement="left" title="Tambah Penjualan" class="btn"><i class="notika-icon notika-checked"></i> Tambah</button>
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
   
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
   <script type="text/javascript">
        $( "#trayek" ).change(function() {
          var id_trayek = $("#trayek").val();
          console.log(id_trayek);
          $.ajax({
            url: "./ajax_layanan.php?id_trayek=" + id_trayek,
            success: function(result){
              $("#layanan").html(result);
            }
          });
        });

        $( "#layanan" ).change(function() {
            var id_layanan = $("#layanan").val();
            var id_trayek  = $("#trayek").val(); 
            console.log(id_layanan);
            $.ajax({
                url: './ajax_berangkat.php?id_trayek=' + id_trayek + '&id_layanan=' + id_layanan,
                success: function(result){
                  $("#jam").html(result);
                }           
            });
        });


        $( "#jam" ).change(function() {
            var id_layanan = $("#layanan").val();
            var id_trayek  = $("#trayek").val(); 
            var id_jam     = $("#jam").val(); 
            console.log(id_jam);
            $.ajax({
                url: './ajax_armada.php?id_trayek=' + id_trayek + '&id_layanan=' + id_layanan + '&id_jam=' + id_jam,
                success: function(result){
                  $("#armada").html(result);
                }           
            });
        });

        $( "#penumpang" ).change(function() {
          var id_layanan = $("#layanan").val();
          var penumpang = $("#penumpang").val();
          console.log(penumpang);
          $.ajax({
            url: "ajax_loadfactor.php?id_layanan=" + id_layanan + "&penumpang=" + penumpang,
            success: function(result){
                console.log(result);
              $("#load_factor").val(result);
            }
          });
        });

        $( "#penumpang" ).change(function() {
          var id_trayek  = $("#trayek").val(); 
          var id_layanan = $("#layanan").val();
          var penumpang = $("#penumpang").val();
          console.log(penumpang);
          $.ajax({
            url: "./ajax_pendapatan.php?id_layanan=" + id_layanan + "&penumpang=" + penumpang + '&id_trayek=' + id_trayek,
            success: function(result){
                console.log(result);
              $("#pendapatan").val(result);
            }
          });
        });
   </script>