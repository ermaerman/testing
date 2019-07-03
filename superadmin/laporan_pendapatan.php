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
                    <h2>Laporan Pendapatan</h2>
                    <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                  <div class="breadcomb-report">
                      <a target="_blank" href="cetak_laporan_pendapatan.php"><button data-toggle="tooltip" data-placement="left" title="Cetak Laporan Pendapatan" class="btn"><i class="notika-icon notika-print"></i></button></a>
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
                                    <!-- <div class="nk-int-st">
                                        <input size="34px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                                    </div> -->
                                </div>
                                
                                <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
                                <a href="index.php?content=laporan_penjualan"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a> -->
                              </div>
                            </form>
                              <form class="form-horizontal" method="POST">
                                <table class="table table-striped" id="data-table-basic">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Berangkat</th>
                                      <th>Armada</th>
                                      <th>Trayek</th>
                                      <th>Layanan</th>
                                      <th>Jumlah Penumpang</th>
                                      <th>Harga</th>
                                      <th>Pendapatan</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php

                                      include '../config/koneksi.php';
                                                 error_reporting(0);

                                                 $batas  = 10;
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
                                                     $sql = "SELECT tbl_penjualan.tgl_berangkat,tbl_penjualan.pendapatan,tbl_penjualan.id_jam,tbl_penjualan.id_armada, tbl_penjualan.id_trayek,tbl_penjualan.id_layanan,tbl_penjualan.jml_penumpang, tbl_jadwal.harga FROM tbl_penjualan INNER JOIN tbl_jadwal ON tbl_penjualan.id_trayek=tbl_jadwal.id_trayek AND tbl_penjualan.id_armada=tbl_jadwal.id_armada AND tbl_penjualan.id_layanan=tbl_jadwal.id_layanan AND tbl_penjualan.id_jam=tbl_jadwal.id_jam";
                                                     $query = $sql;
                                                     $queryJml = $sql;
                                                   } else {
                                                     $query = "SELECT tbl_penjualan.tgl_berangkat,tbl_penjualan.pendapatan,tbl_penjualan.id_jam,tbl_penjualan.id_armada, tbl_penjualan.id_trayek,tbl_penjualan.id_layanan,tbl_penjualan.jml_penumpang, tbl_jadwal.harga FROM tbl_penjualan INNER JOIN tbl_jadwal ON tbl_penjualan.id_trayek=tbl_jadwal.id_trayek AND tbl_penjualan.id_armada=tbl_jadwal.id_armada AND tbl_penjualan.id_layanan=tbl_jadwal.id_layanan AND tbl_penjualan.id_jam=tbl_jadwal.id_jam LIMIT $posisi, $batas ";
                                                     $queryJml = "SELECT tbl_penjualan.tgl_berangkat,tbl_penjualan.pendapatan,tbl_penjualan.id_jam,tbl_penjualan.id_armada, tbl_penjualan.id_trayek,tbl_penjualan.id_layanan,tbl_penjualan.jml_penumpang, tbl_jadwal.harga FROM tbl_penjualan INNER JOIN tbl_jadwal ON tbl_penjualan.id_trayek=tbl_jadwal.id_trayek AND tbl_penjualan.id_armada=tbl_jadwal.id_armada AND tbl_penjualan.id_layanan=tbl_jadwal.id_layanan AND tbl_penjualan.id_jam=tbl_jadwal.id_jam";
                                                     $no = $posisi + 1;
                                                   }
                                                 } else {
                                                   $query = "SELECT tbl_penjualan.tgl_berangkat,tbl_penjualan.pendapatan,tbl_penjualan.id_jam,tbl_penjualan.id_armada, tbl_penjualan.id_trayek,tbl_penjualan.id_layanan,tbl_penjualan.jml_penumpang, tbl_jadwal.harga FROM tbl_penjualan INNER JOIN tbl_jadwal ON tbl_penjualan.id_trayek=tbl_jadwal.id_trayek AND tbl_penjualan.id_armada=tbl_jadwal.id_armada AND tbl_penjualan.id_layanan=tbl_jadwal.id_layanan AND tbl_penjualan.id_jam=tbl_jadwal.id_jam LIMIT $posisi, $batas ";
                                                   $queryJml = "SELECT tbl_penjualan.tgl_berangkat,tbl_penjualan.pendapatan,tbl_penjualan.id_jam,tbl_penjualan.id_armada, tbl_penjualan.id_trayek,tbl_penjualan.id_layanan,tbl_penjualan.jml_penumpang, tbl_jadwal.harga FROM tbl_penjualan INNER JOIN tbl_jadwal ON tbl_penjualan.id_trayek=tbl_jadwal.id_trayek AND tbl_penjualan.id_armada=tbl_jadwal.id_armada AND tbl_penjualan.id_layanan=tbl_jadwal.id_layanan AND tbl_penjualan.id_jam=tbl_jadwal.id_jam;";
                                                   $no = $posisi + 1;
                                                 }

                                      $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                                              if(mysqli_num_rows($querydata) == 0){ 
                                                echo '<tr><td colspan="7" align="center">Tidak ada data!</td></tr>';    
                                              }
                                                else
                                              { 
                                                $no = 1;        
                                                while($data = mysqli_fetch_array($querydata)){  
                                                  echo '<tr>';
                                                  echo '<td>'.$no.'</td>';
                                                  echo '<td>'.$data['tgl_berangkat'].'</td>';
                                                  ?>
                                                  <td>
                                                    <?php
                                                      $jam   = $data['id_jam'];
                                                      $jmquery   = "SELECT * FROM tbl_jam WHERE id_jam=$jam";
                                                      $query    = mysqli_query($konek,$jmquery)or die(mysqli_error($konek));
                                                      $jmshow    = mysqli_fetch_array($query);

                                                      echo $jmshow['jam'];
                                                    ?>  
                                                  </td>
                                                  <td>
                                                    <?php
                                                      $armada   = $data['id_armada'];
                                                      $aquery   = "SELECT * FROM tbl_armada WHERE id_armada=$armada";
                                                      $query    = mysqli_query($konek,$aquery)or die(mysqli_error($konek));
                                                      $ashow    = mysqli_fetch_array($query);


                                                      echo $ashow['armada'];
                                                    ?>  
                                                  </td>
                                                   <td>
                                                    <?php
                                                      $trayek   = $data['id_trayek'];

                                                      $tquery   = "SELECT * FROM tbl_trayek WHERE id_trayek=$trayek";
                                                      $query    = mysqli_query($konek,$tquery)or die(mysqli_error($konek));
                                                      $tshow    = mysqli_fetch_array($query);


                                                      echo $tshow['jurusan'];
                                                    ?>  
                                                  </td>
                                                  <td>
                                                    <?php
                                                      $layanan   = $data['id_layanan'];

                                                      $lquery   = "SELECT * FROM tbl_layanan WHERE id_layanan=$layanan";
                                                      $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                                                      $lshow    = mysqli_fetch_array($query);


                                                      echo $lshow['jenis_layanan'];
                                                    ?>  
                                                  </td>
                                                  <?php
                                                      echo '<td>'.$data['jml_penumpang'].'</td>';
                                                      $harga = "Rp " . number_format($data['harga'],2,',','.');
                                                      echo '<td>'.$harga.',-</td>';
                                                      $pendapatan = "Rp " . number_format($data['pendapatan'],2,',','.');
                                                      echo '<td>'.$pendapatan.'</td>';
                                                      echo '</tr>';

                                                  $no++;  
                                                }
                                              }
                                            
                                          ?>
                                            <tr>
                                              <td colspan="7"><b>Total Pendapatan</b></td>
                                              <td colspan="2" align="right">
                                              <b><?php 
                                                $lquery   = "SELECT SUM(pendapatan) AS pendapatan FROM tbl_penjualan";
                                                $query    = mysqli_query($konek,$lquery)or die(mysqli_error($konek));
                                                $lshow    = mysqli_fetch_array($query);
                                                $pendapatan = "Rp " . number_format($lshow['pendapatan'],2,',','.');
                                                echo $pendapatan; echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                               ?>
                                              </b> 
                                              </td>
                                            </tr> 
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
                                          echo "<li><a href=\"index.php?content=laporan_penjualan&&hal=$i\">$i</a></li>";
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

<!--     <script>
      function tambah() {
          var harga = document.getElementById('').value;
          var hargamenu  = document.getElementById('hargamenu').value;
          var jumlah = document.getElementById('jumlah').value;
          
          var result = (parseInt(harga) + (parseInt(hargamenu) * parseInt(jumlah))) ;
          if (!isNaN(result)) {
             document.getElementById('total').value = result;
          }
    }
    </script> -->