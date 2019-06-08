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
                                        <h2>Data User</h2>
                                        <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="index.php?content=tambah_user"><button data-toggle="tooltip" data-placement="left" title="Tambah Data User" class="btn"><i class="notika-icon notika-plus-symbol"></i></button></a>
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
                                <a href="index.php?content=data_user"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
                              </div>
                            </form>
                              <br><br>
                              <form class="form-horizontal" method="POST">
                                <table class="table table-striped" id="data-table-basic">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>NIK</th>
                                      <th>Nama</th>
                                      <th>Email</th>
                                      <th>No. Telp</th>
                                      <th>Divre</th>
                                      <th>Cabang</th>
                                      <th>Foto</th>
                                      <th>Alamat</th>
                                      <th>ID Level</th>
                                      <th colspan="2"><center>Action</center></th>
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
                                                     $sql = "SELECT id_user, nik, nama, email, password, no_telp, id_divre, id_cabang, foto, alamat, id_level FROM tbl_user WHERE nik LIKE '%$pencarian%' OR nama LIKE '%$pencarian%' OR email LIKE '%$pencarian%' OR no_telp LIKE '%$pencarian%' OR id_divre LIKE '%$pencarian%' OR id_cabang LIKE '%$pencarian%' OR foto LIKE '%$pencarian%' OR alamat LIKE '%$pencarian%' OR id_level LIKE '%$pencarian%'";
                                                     $query = $sql;
                                                     $queryJml = $sql;
                                                   } else {
                                                     $query = "SELECT id_user, nik, nama, email, password, no_telp, id_divre, id_cabang, foto, alamat, id_level FROM tbl_user LIMIT $posisi, $batas ";
                                                     $queryJml = "SELECT id_user, nik, nama, email, password, no_telp, id_divre, id_cabang, foto, alamat, id_level FROM tbl_user";
                                                     $no = $posisi + 1;
                                                   }
                                                 } else {
                                                   $query = "SELECT id_user, nik, nama, email, password, no_telp, id_divre, id_cabang, foto, alamat, id_level FROM tbl_user LIMIT $posisi, $batas ";
                                                   $queryJml = "SELECT id_user, nik, nama, email, password, no_telp, id_divre, id_cabang, foto, alamat, id_level FROM tbl_user";
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
                                                  echo '<td>'.$no.'</td>';
                                                  echo '<td>'.$data['nik'].'</td>';
                                                  echo '<td>'.$data['nama'].'</td>';
                                                  echo '<td>'.$data['email'].'</td>';
                                                  echo '<td>'.$data['no_telp'].'</td>';
                                                  ?>
                                                   <!-- echo '<td>'.$data['id_divre'].'</td>'; -->
                                                   <!-- echo '<td>'.$data['id_cabang'].'</td>'; -->
                                                  <td>
                                                    <?php
                                                      $divre  = $data['id_divre'];
                                                      $dquery = "SELECT * FROM tbl_divre WHERE id_divre=$divre";
                                                      $query  = mysqli_query($konek,$dquery)or die(mysqli_error($konek));
                                                      $dshow  = mysqli_fetch_array($query);

                                                      echo $dshow['nama'];
                                                      // echo $divre;
                                                    ?>  
                                                  </td>
                                                  <td>
                                                    <?php
                                                      $cabang   = $data['id_cabang'];
                                                      $cquery   = "SELECT * FROM tbl_cabang WHERE id_cabang=$cabang";
                                                      $query    = mysqli_query($konek,$cquery)or die(mysqli_error($konek));
                                                      $cshow    = mysqli_fetch_array($query);


                                                      echo $cshow['nama'];
                                                    ?>  
                                                  </td>
                                                  <td><i><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['foto'] ?>" target="_blank"><?php echo $data['foto'] ?></a></i></td>
                                                  <?php
                                                  echo '<td>'.$data['alamat'].'</td>';
                                                  ?>
                                                  <td>
                                                    <?php
                                                      $level   = $data['id_level'];

                                                      $uquery   = "SELECT * FROM tbl_level WHERE id_level=$level";
                                                      $query    = mysqli_query($konek,$uquery)or die(mysqli_error($konek));
                                                      $ushow    = mysqli_fetch_array($query);


                                                      echo $ushow['level'];
                                                    ?>  
                                                  </td>
                                                   <!-- echo '<td>'.$data['id_level'].'</td>'; -->
                                                  <?php
                                                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_user&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                                                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete_user.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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
                                          echo "<li><a href=\"index.php?content=data_user&&hal=$i\">$i</a></li>";
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

