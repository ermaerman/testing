<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_count = $_GET['id_count'];

    $edit    = "SELECT * FROM tbl_count WHERE id_count = '$id_count'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

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
                                        <h2>Solusi / Saran</h2>
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
                              
                              <form class="form-horizontal" method="POST">
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
                                      <th>Hasil Analisis</th>
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
                                                     $sql = "SELECT * FROM tbl_count WHERE id_count='$id_count'";
                                                     $query = $sql;
                                                     $queryJml = $sql;
                                                   } else {
                                                     $query = "SELECT * FROM tbl_count WHERE id_count='$id_count' LIMIT $posisi, $batas ";
                                                     $queryJml = "SELECT * FROM tbl_count WHERE status='0'";
                                                     $no = $posisi + 1;
                                                   }
                                                 } else {
                                                   $query = "SELECT * FROM tbl_count WHERE id_count='$id_count' LIMIT $posisi, $batas ";
                                                   $queryJml = "SELECT * FROM tbl_count WHERE id_count='$id_count'";
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
                                                  <?php
                                                  echo '</td>';
                                                  echo '<td>'.$data['tgl_berangkat'].'';
                                                  ?>
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
                                                  echo '<td>'.$data['jml_seat'].'<br>';
                                                  ?>
                                                    </td>  
                                                  <?php
                                                  echo '<td>'.$data['jml_penumpang'].'<br>';
                                                  ?>
                                                    </td>
                                                  <td> 
                                                    <?php
                                                      if ($data['status']=='1'){
                                                        echo '<a data-toggle="tooltip" data-placement="left" title="Sudah Dianalisis" href="#"><i class="fa fa-check fa-fw"></a></i>';
                                                      }
                                                      else {
                                                        echo '<a data-toggle="tooltip" data-placement="left" title="Belum Dianalisis" href="#"><i class="fa fa-times fa-fw"></a></i>';
                                                      }
                                                    ?>
                                                  </td>
                                                  <td> 
                                                    <?php
                                                      if ($data['hasil_analisis']=='Laris'){
                                                        echo '<font color="green"><b>Laris</b></font>';
                                                      }
                                                      else if ($data['hasil_analisis']=='Tidak Laris'){
                                                        echo '<font color="red"><b>Tidak Laris</b></font>';
                                                      }
                                                    ?>
                                                  </td>
                                                  <?php
                                                  //echo '<td>'.$data['hasil_analisis'].'</td>';
                                                  echo '</tr>';
                                                  $no++;  
                                                }
                                              }
                                        
                                          ?>
                                              
                                  </tbody>
                                </table>
                              </form>
                                 <?php

                                  include '../config/koneksi.php';

                                  $id_count = $_GET['id_count'];

                                  $edit    = "SELECT * FROM tbl_count WHERE id_count = '$id_count'";
                                  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
                                  $data    = mysqli_fetch_array($hasil);

                                  
                                    if ($data['hasil_analisis']=='Laris'){
                                      include 'laris.php';;
                                    }
                                    else if ($data['hasil_analisis']=='Tidak Laris'){
                                      include 'tidak_laris.php';
                                    }
                                  ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->


    