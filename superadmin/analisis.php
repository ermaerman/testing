    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Analisis</h2>
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
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                             <form class="form-inline" action="" method="POST">
                              <div class="form-group" style="float: right;">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <input size="34px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
                                <a href="index.php?content=analisis"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
                              </div>
                            </form>

                              <br><br>
                              
                              <form id="form-predict" class="form-horizontal" method="POST">
                                <table class="table table-striped" id="data-table-basic">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Jam Berangkat</th>
                                      <th>Trayek</th>
                                      <th>Layanan</th>
                                      <th>Jumlah Seat</th>
                                      <th>Jumlah Penumpang</th>
                                      <th>Status Analisis</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php

                                      include '../config/koneksi.php';
                                                 //error_reporting(0);

                                                 $batas  = 8;
                                                 $hal    = @$_GET['hal'];
                                                 if (empty($hal)) {
                                                   $posisi = 0;
                                                   $hal    = 1;
                                                 } else {
                                                   $posisi = ($hal - 1) * $batas;
                                                 }
                                                 if($_SERVER['REQUEST_METHOD'] == "POST") {
                                                   $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
                                                   if ($pencarian != '') {
                                                     $sql = "SELECT * FROM tbl_count WHERE status='0' AND tgl_berangkat LIKE '%$pencarian%' OR jml_penumpang LIKE '%$pencarian%' OR jml_seat LIKE '%$pencarian%' OR status LIKE '%$pencarian%' OR hasil_analisis LIKE '%$pencarian%'";
                                                     $query = $sql;
                                                     $queryJml = $sql;
                                                   } else {
                                                     $query = "SELECT * FROM tbl_count WHERE status='0' LIMIT $posisi, $batas ";
                                                     $queryJml = "SELECT * FROM tbl_count WHERE status='0'";
                                                     $no = $posisi + 1;
                                                   }
                                                 } else {
                                                   $query = "SELECT * FROM tbl_count WHERE status='0' LIMIT $posisi, $batas ";
                                                   $queryJml = "SELECT * FROM tbl_count WHERE status='0'";
                                                   $no = $posisi + 1;
                                                 }

                                      $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                                              if(mysqli_num_rows($querydata) == 0){ 
                                                echo '<tr><td colspan="10" align="center">Tidak ada data!</td></tr>';    
                                              }
                                                else
                                              { 
                                                $no = 1;        
                                                while($data = mysqli_fetch_array($querydata)){  
                                                  echo '<tr>';
                                                  echo '<td>'.$no.'';
                                                  ?>
                                                  <br>
                                                 <!--  <input type="hidden" name="id_count" value="<?php echo $data['id_count']; ?>" > -->
                                                  <?php
                                                  echo '</td>';
                                                  echo '<td>'.$data['tgl_berangkat'].'';
                                                  ?>
                                                  <br>
                                                 <!--  <input type="hidden" name="tgl_berangkat" value="<?php echo $data['tgl_berangkat']; ?>" > -->
                                                  <?php
                                                  echo '</td>';
                                                  ?>
                                                  <td>
                                                    <?php
                                                      $jam   = $data['id_jam'];
                                                      $jmquery   = "SELECT * FROM tbl_jam WHERE id_jam=$jam";
                                                      $query    = mysqli_query($konek,$jmquery)or die(mysqli_error($konek));
                                                      $jmshow    = mysqli_fetch_array($query);

                                                      echo $jmshow['jam'];
                                                    ?>
                                                    <br>
                                                    <input type="hidden" name="id_jam" value="<?php echo $data['id_jam']; ?>" >  
                                                  </td>
                                                   <td>
                                                    <?php
                                                      $trayek   = $data['id_trayek'];

                                                      $tquery   = "SELECT * FROM tbl_trayek WHERE id_trayek=$trayek";
                                                      $query    = mysqli_query($konek,$tquery)or die(mysqli_error($konek));
                                                      $tshow    = mysqli_fetch_array($query);


                                                      echo $tshow['jurusan'];
                                                    ?>  
                                                    <br>
                                                    <input type="hidden" name="id_trayek" value="<?php echo $data['id_trayek']; ?>" >  
                                                  </td>
                                                  <td>
                                                    <?php
                                                      $layanan   = $data['id_layanan'];

                                                      $lquery   = "SELECT * FROM tbl_layanan WHERE id_layanan=$layanan";
                                                      $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                                                      $lshow    = mysqli_fetch_array($query);


                                                      echo $lshow['jenis_layanan'];
                                                    ?>  
                                                    <br>
                                                    <input type="hidden" name="id_layanan" value="<?php echo $data['id_layanan']; ?>" >  
                                                  </td>
                                                  <!-- echo '<td>'.$data['id_armada'].'</td>';
                                                  echo '<td>'.$data['id_trayek'].'</td>';
                                                  echo '<td>'.$data['id_layanan'].'</td>'; -->
                                                  <?php
                                                  echo '<td>'.$data['jml_seat'].'<br>';
                                                  ?>
                                                    <input type="hidden" name="jml_seat" value="<?php echo $data['jml_seat']; ?>" >
                                                    </td>  
                                                  <?php
                                                  echo '<td>'.$data['jml_penumpang'].'<br>';
                                                  ?>
                                                  <input type="hidden" name="jml_penumpang" value="<?php echo $data['jml_penumpang']; ?>" >
                                                    </td>
                                                  <td> 
                                                    <?php
                                                      if ($data['status']=='1'){
                                                        echo '<font color="green">Sudah dianalisis</font>';
                                                      }
                                                      else {
                                                        echo '<font color="red">Belum dianalisis</font>';
                                                      }
                                                    ?>
                                                  </td>
                                                  <!-- echo '<td>'.$data['status'].'</td>'; -->
                                                  <?php
                                                  /*echo '<td>'.$data['hasil_analisis'].'</td>';*/
                                                  //================================================================
                                                  //belum arahin ke py
                                                  echo '<td><button type="submit" data-toggle="tooltip" data-placement="left" title="Lakukan Analisis" class="btn btn-primary"><i class="fa fa-rocket fa-fw"></i> Predict</button></td>';
                                                  //================================================================
                                                  echo '</tr>';
                                                  $no++;  
                                                }
                                              }
                                        
                                          ?>
                                              
                                  </tbody>
                                </table>
                              </form>
                              <?php
                               if($_SERVER['REQUEST_METHOD'] == "POST") {
                                      $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
                                  echo "<div style=\"float:left;\">";
                                  $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
                                  echo "Data Hasil Pencarian: <b>$jml</b>";
                                  echo "</div>";
                                } else { ?>
                                  <div style="float:left;">
                                    <?php
                                    $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
                                    echo "Jumlah Data: <b>$jml</b>";
                                    ?>
                                  </div>
                                  <div style="float:right;">
                                    <ul class="pagination pagination-sm" style="margin: 0">
                                      <?php
                                      $jml_hal = ceil($jml / $batas);
                                      for ($i=1; $i <= $jml_hal; $i++) {
                                        if ($i != $hal) {
                                          echo "<li><a href=\"index.php?content=analisis&&hal=$i\">$i</a></li>";
                                        } else {
                                          echo "<li class=\"active\"><a>$i</a></li>";
                                        }
                                      }
                                    }
                                      ?>  
                                    </ul>
                                  </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

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
            var url = "http://0.0.0.0:5000/api/v1.0/predict"; 
            var xhr = new XMLHttpRequest({mozSystem: true});
            var data = $("#form-predict").serialize()
            console.log("data", data)
            $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {

                          $('#modal-hasil').modal('show');
                          $('.percentage_do').html((data.response.percentage_do)*100);   
                          $('.percentage_not_do').html((data.response.percentage_not_do)*100);
                          if (data.response.status == 1) {
                            var id_jam = data.response.id_jam;
                            var id_trayek = data.response.id_trayek;
                            var id_layanan = data.response.id_layanan;
                            var jml_seat = data.response.jml_seat;
                            var jml_penumpang = data.response.jml_penumpang;

                            $('.status').html("Laku");

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
                            $('.status').html("Tidak Laku");
                          }  
                      },
                      error: function (request, status, error) {
                          alert(request.responseText);
                      }
                     });

          
            e.preventDefault(); // avoid to execute the actual submit of the form.
          });
          </script>    

