<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_count = $_GET['id_count'];

    $edit    = "SELECT * FROM tbl_count WHERE id_count = '$id_count'";
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
                                        <h2>Analisis / Predict Data</h2>
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
                <form id="form-predict" class="form-horizontal" method="POST">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row"><!-- 
                                    <input type="hidden" class="form-control" name="id_penjualan" value="<?php echo $data['id_penjualan']; ?>" required> -->
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Jam Berangkat</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                           <input type="text" class="form-control" name="id_jam" placeholder="Jam Berangkat" value="<?php echo $data['id_jam']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Trayek</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="id_trayek" placeholder="Trayek" value="<?php echo $data['id_trayek']; ?>" readonly>
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
                                             <input type="text" class="form-control" name="id_layanan" placeholder="Layanan" value="<?php echo $data['id_layanan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Jumlah Seat</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="jml_seat" placeholder="Jumlah Seat" value="<?php echo $data['jml_seat']; ?>" readonly>
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
                                            <input type="text" class="form-control" name="jml_penumpang" placeholder="Jumlah Penumpang" value="<?php echo $data['jml_penumpang']; ?>" readonly>
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
                                    <button type="submit" data-toggle="tooltip" data-placement="left" title="Lakukan Analisis" class="btn"><i class="fa fa-rocket fa-fw"></i> Predict</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Modal -->
          <div class="modal fade" id="modal-hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <center><h4><strong>Analisis Penjualan <i>E-ticketing</i> Bus DAMRI Segmen Antar Kota Cabang Bandar Lampung</strong></h4></center>
                  <h4 class="form-wording" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                  <span id="result" style="display: block; font-weight: bold; text-align: center;"></span>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- End Modals-->

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script> 
    <script type="text/javascript">
                    
          $("#form-predict").submit(function(e) {
            var url = "http://127.0.0.1:8000/api/v1/result"; 
            //var xhr = new XMLHttpRequest({mozSystem: true});
            var data = $("#form-predict").serialize();
            console.log("data", data)
            $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {
                          console.log("predict "+data.response.predict)
                          $('#modal-hasil').modal('show');
                          if (data.response.predict == 0) {
                            // var id_jam = data.response.id_jam;
                            // var id_trayek = data.response.id_trayek;
                            // var id_layanan = data.response.id_layanan;
                            // var jml_seat = data.response.jml_seat;
                            // var jml_penumpang = data.response.jml_penumpang;

                            $('#result').html("Laris");

                           /* if (angkatan == '2010') {
                                var pembagiSMT = 14;
                            } else if (angkatan == '2011') {
                                var pembagiSMT = 12;
                            } else if (angkatan == '2012') {
                                var pembagiSMT = 10;
                            } else if (angkatan == '2013') {
                                var pembagiSMT = 8;
                            } else if (angkatan == '2014') {
                                var pembagiSMT = 6;
                            } else if (angkatan == '2015') {
                                var pembagiSMT = 4;
                            }
                            
                            normalizedIPK = ipk / 4;
                            normalizedPenghasilan = penghasilan / 8;
                            normalizedJarak = 1 - (jarak / 42);
                            normalizedSMT = semester / pembagiSMT;

                            if (normalizedIPK < normalizedSMT && normalizedIPK < normalizedPenghasilan && normalizedIPK < normalizedJarak) {
                              if(beasiswa == 1){
                                var alasan = 'IPK rendah';
                                var dampak = 'Beasiswa yang didapat akan dicabut';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.dampak').html("Dampak: " + dampak);
                              }else{
                                var alasan = 'IPK rendah';
                                var solusi = 'Untuk diberikan binaan agar IPK naik';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.solusi').html("Solusi: " + solusi);
                              }
                            } else if (normalizedPenghasilan < normalizedIPK && normalizedPenghasilan < normalizedJarak && normalizedPenghasilan < normalizedSMT) {
                               if(beasiswa == 1){
                                 $('.status').html("Tidak Mengundurkan Diri");
                                }else{ 
                                var alasan = 'Penghasilan Orang Tua Rendah';
                                var solusi = 'Disarankan mengajukan beasiswa';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.solusi').html("Solusi: " + solusi);
                              }
                            } else if (normalizedJarak < normalizedIPK && normalizedJarak < normalizedPenghasilan && normalizedJarak < normalizedSMT) {
                              var alasan = 'Jarak menuju kampus jauh';
                              var solusi = 'Disarankan untuk sewa kos didekat kampus';
                              $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                              $('.alasan').html("Alasan: " + alasan);
                              $('.solusi').html("Solusi: " + solusi);
                            }else if(normalizedSMT < normalizedIPK && normalizedSMT < normalizedPenghasilan && normalizedSMT < normalizedJarak){
                              if(beasiswa == 1){
                                var alasan = 'Semester yang ditempuh kurang';
                                var dampak = 'Beasiswa yang didapat akan dicabut';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.dampak').html("Dampak: " + dampak);
                              }else{
                                var alasan = 'Semester yang ditempuh kurang';
                                var solusi = 'Disarankan agar tidak mengajukan cuti akademik';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.solusi').html("Solusi: " + solusi);
                              }
                            }else{
                              if(beasiswa == 1){
                                var alasan = 'Semester yang ditempuh kurang';
                                var dampak = 'Beasiswa yang didapat akan dicabut';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.dampak').html("Dampak: " + dampak);
                              }else{
                                var alasan = 'Semester yang ditempuh kurang';
                                var solusi = 'Disarankan agar tidak mengajukan cuti akademik';
                                $('.status').html("<font color=red>Mengundurkan Diri</font>"); 
                                $('.alasan').html("Alasan: " + alasan);
                                $('.solusi').html("Solusi: " + solusi);
                              }
                            }

                            console.log("normalized ipk", normalizedIPK);
                            console.log("normalized semester", normalizedSMT);
                            console.log("normalized penghasilan", normalizedPenghasilan);
                            console.log("normalized jarak", normalizedJarak);
                            console.log("alasan", alasan);
                              */

                          }else{
                            $('#result').html("Tidak Laris");
                          }  
                      },
                      error: function (request, status, error) {
                          alert(request.responseText);
                      }
                     });

          
            e.preventDefault(); // avoid to execute the actual submit of the form.
          });
          </script>    

