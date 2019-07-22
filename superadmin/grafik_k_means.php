<?php

$query   = mysqli_query($konek,"SELECT * FROM tbl_count WHERE hasil_analisis = 'Laris' ") or die(mysqli_error($konek));
$set1    = mysqli_num_rows($query);

$query1  = mysqli_query($konek,"SELECT * FROM tbl_count WHERE hasil_analisis = 'Tidak Laris' ") or die(mysqli_error($konek));
$set2    = mysqli_num_rows($query1);

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
                                        <h2>Grafik Analisis</h2>
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

    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-10">
                        <div class="panel-body">
                          <center>
                          <h4><b>Laris : <?php echo $set1; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tidak Laris : <?php 
                          $cal = $set2 - $set3;
                          echo $cal; ?> </b></h4><h4><b></b></h4><br>
                          <canvas id="piechart" width="400" height="400"></canvas>
                          </center><br>
                          <table align="right">
                            <tr>
                                 <th>Keterangan : </th>
                             </tr>
                             <tr>
                                <td><button class="btn btn-primary btn-sm"></button></td><td>:</td><td>&nbsp;Jumlah Trayek Penjualan E-Ticketing Laris</td>
                             </tr>   
                              <tr> 
                               <td><button class="btn btn-warning btn-sm"></button></td><td>:</td><td>&nbsp;Jumlah Trayek Penjualan E-Ticketing Tidak Laris</td>
                             </tr>
                          </table>     

                       </div>
                </div>
            </div></div></div>
        </div>

 <script type="text/javascript" src="../assets_be/node_modules/chart.js/dist/Chart.js"></script>
 <script type="text/javascript" src="../assets_be/node_modules/chart.js/dist/Chart.min.js"></script>
 <script type="text/javascript" src="../assets_be/node_modules/chart.js/dist/Chart.bundle.js"></script>
 <script type="text/javascript" src="../assets_be/node_modules/chart.js/src/core/core.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
 
 
<script type="text/javascript">
    var ctx = document.getElementById("piechart").getContext("2d");
    var pieData = [
      {
          value: <?php echo $set1; ?>,
          color: "#0b3e8f",
          highlight: "#2758a8",
          label: "Laris"
      },
      {
          value : <?php echo $cal; ?>,
          color: "#f2790f",
          highlight:"#ff9436", 
          label: "Tidak Laris"
      }
      
    ];
    var options = {
      animateScale: true
    };

    var myNewChart = new Chart(ctx).Pie(pieData,options);

 </script>
 