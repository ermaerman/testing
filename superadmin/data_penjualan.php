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
										<h2>Data Penjualan</h2>
                    <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
									</div>
								</div>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="index.php?content=tambah_data_penjualan"><button data-toggle="tooltip" data-placement="left" title="Tambah Data Penjualan" class="btn"><i class="notika-icon notika-plus-symbol"></i></button></a>
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
                                <a href="index.php?content=data_penjualan"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
                              </div>
                            </form>
                              <br><br>
                              <form class="form-horizontal" method="POST">
                                <table class="table table-striped" id="data-table-basic">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Berangkat</th>
                                      <th>Sampai</th>
                                      <th>Armada</th>
                                      <th>Trayek</th>
                                      <th>Layanan</th>
                                      <th>Jumlah Penumpang</th>
                                      <th>Load Factor</th>
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
                                                     $sql = "SELECT id_penjualan, tgl_berangkat, jam_berangkat, jam_sampai, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor FROM tbl_penjualan WHERE tgl_berangkat LIKE '%$pencarian%' OR jam_berangkat LIKE '%$pencarian%' OR jam_sampai LIKE '%$pencarian%' OR jml_penumpang LIKE '%$pencarian%' OR load_factor LIKE '%$pencarian%'";
                                                     $query = $sql;
                                                     $queryJml = $sql;
                                                   } else {
                                                     $query = "SELECT id_penjualan, tgl_berangkat, jam_berangkat, jam_sampai, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor FROM tbl_penjualan LIMIT $posisi, $batas ";
                                                     $queryJml = "SELECT id_penjualan, tgl_berangkat, jam_berangkat, jam_sampai, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor FROM tbl_penjualan";
                                                     $no = $posisi + 1;
                                                   }
                                                 } else {
                                                   $query = "SELECT id_penjualan, tgl_berangkat, jam_berangkat, jam_sampai, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor, status FROM tbl_penjualan LIMIT $posisi, $batas ";
                                                   $queryJml = "SELECT id_penjualan, tgl_berangkat, jam_berangkat, jam_sampai, id_armada, id_trayek, id_layanan, jml_penumpang, load_factor FROM tbl_penjualan";
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
                                                  echo '<td>'.$data['tgl_berangkat'].'</td>';
                                                  echo '<td>'.$data['jam_berangkat'].'</td>';
                                                  echo '<td>'.$data['jam_sampai'].'</td>';
                                                  echo '<td>'.$data['id_armada'].'</td>';
                                                  echo '<td>'.$data['id_trayek'].'</td>';
                                                  echo '<td>'.$data['id_layanan'].'</td>';
                                                  echo '<td>'.$data['jml_penumpang'].'</td>';
                                                  echo '<td>'.$data['load_factor'].'</td>';
                                                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?content=edit_penjualan&&id_penjualan='.$data['id_penjualan'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                                                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete_penjualan.php?id_penjualan='.$data['id_penjualan'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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
                                          echo "<li><a href=\"index.php?content=data_penjualan&&hal=$i\">$i</a></li>";
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

