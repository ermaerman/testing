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
                                        <h2>Grafik Analisis</h2>
                                        <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="index.php?content=edit_user&&id_user=<?php echo $data['id_user'] ?>"><button data-toggle="tooltip" data-placement="left" title="Edit Akun" class="btn"><i class="notika-icon notika-edit"></i></button></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->

     <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-10">
                        <div id="container4" style="min-width: 310px; height: 380px; margin: 0 auto"></div>
                        <script type="text/javascript">
                        var chart1; // globally available
                       $(document).ready(function() {
                             chart1 = new Highcharts.Chart({
                                chart: {
                                   renderTo: 'container4',
                                   type: 'column'
                                },   
                                title: {
                                   text: 'Grafik Analisis Penjualan <i>E-Ticketing</i> Bus DAMRI<br> Segmen Antar Kota Cabang Bandar Lampung'
                                },
                                xAxis: {
                                   categories: ['Tanggal']
                                },
                                yAxis: {
                                   title: {
                                      text: 'Jumlah terjual'
                                   }
                                },
                                     series:             
                                   [
                                   <?php 
                                include '../config/koneksi.php';
                                    $sql   = "SELECT DISTINCT tgl_berangkat FROM tbl_penjualan";
                                     $query = mysqli_query($konek, $sql )  or die(mysql_error($konek));
                                     while( $ret = mysqli_fetch_array( $query ) ){
                                       $tgl_berangkat=$ret['tgl_berangkat'];                     
                                          $sql_jumlah   = "SELECT SUM(jml_penumpang) AS jml_penumpang FROM tbl_penjualan WHERE tgl_berangkat='$tgl_berangkat'";        
                                          $query_jumlah = mysqli_query($konek,$sql_jumlah ) or die(mysql_error($konek));
                                          while( $data = mysqli_fetch_array( $query_jumlah ) ){
                                             $jumlah = $data['jml_penumpang'];               
                                         }             
                                         ?>
                                         {
                                             name: '<?php echo $tgl_berangkat; ?>',
                                        data: [<?php echo $jumlah; ?>]
                                         },
                                         <?php } ?>
                                   ]
                             });
                          }); 
                      </script>
                    </div>
                </div>
            </div>
        </div>