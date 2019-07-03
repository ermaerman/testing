 <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../assets/img/logo3.png">
    <title>DAMRI ‣ Analysis System V 1.0.0</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets_be/css/owl.theme.css">
    <link rel="stylesheet" href="../assets_be/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/notika-custom-icon.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../assets_be/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../assets_be/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        .header-top-area, .footer-copyright-area{
            background:#111535;
        }
        .logo-area{
            padding:14px 0px;
        }
        .nav.navbar-nav.notika-top-nav{
            float: right;
        }
        .nav.notika-top-nav .open>a, .nav.notika-top-nav .open>a:focus, .nav.notika-top-nav .open>a:hover {
            background: #111535;
            border-color: 0px solid #111535;
            
        }
        .nav.notika-top-nav>li>a:focus, .nav.notika-top-nav>li>a:hover {
            text-decoration: none;
            background-color: #111535;
        }
        .navbar-nav>li>a{
            color:#fff;
            padding: 20px 0px 20px 30px;
        }
        .rtl-layout .navbar-nav>li>a{
            padding: 20px 30px 20px 0px;
        }
        .nav.navbar-nav.notika-top-nav li a{
            font-size:20px;
            position:relative;
        }
        .header-top-menu .nav.notika-top-nav li .search-dd {
            position: absolute;
            top: -1px;
            left: -890px;
            width: 1140px;
            border: none;
        }
        .default-sidebar-tp .header-top-menu .nav.notika-top-nav li .search-dd, .sm-ltd-sd .header-top-menu .nav.notika-top-nav
         li .search-dd, .lg-sd-tp .header-top-menu .nav.notika-top-nav li .search-dd, .mini-std-tp .header-top-menu .nav.notika-top-nav li .search-dd, .lg-tp-ld .header-top-menu .nav.notika-top-nav li .search-dd, .offcanvas .header-top-menu .nav.notika-top-nav li .search-dd, .hd-fd-tp .header-top-menu .nav.notika-top-nav li .search-dd, .dark-header .header-top-menu .nav.notika-top-nav li .search-dd, .dark-sidebar-tp .header-top-menu .nav.notika-top-nav li .search-dd, .fullscreen .header-top-menu .nav.notika-top-nav li .search-dd {
            left: -930px;
        }
        .box-layout .header-top-menu .nav.notika-top-nav li .search-dd {
            left: -865px;
            width: 1130px;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd {
            position: absolute;
            top: 100%;
            left: -100px;
            width: 300px;
            border: none;
            padding: 20px 0px;
            z-index:9999;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd .hd-mg-tt h2{
           font-size: 16px;
            color: #333;
            font-weight: 400;
            margin: 0;
            text-align: center;
            margin-bottom: 20px;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd a{
            display:block;
        }
        .header-top-menu .nav.notika-top-nav li .search-dd .search-input{
          margin: 7px 300px;
          position: relative;
        }
        .header-top-menu .nav.notika-top-nav li .search-dd .search-input input[type="text"]{
            height: 40px;
            width: 100%;
            background: #111535;
            border: none;
            outline:none;
            padding: 5px 60px;
        }
        .header-top-menu .nav.notika-top-nav li .search-dd .search-input i{
            position: absolute;
            top: 0;
            left: 0;
            font-size: 20px;
            width: 50px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }
        .hd-message-sn{
            display: flex;
            padding: 10px 15px;
        }
        .hd-mg-ctn h3{
            font-size:14px;
            color:#333;
            margin-bottom:5px;
        }
        .hd-mg-ctn p{
            font-size:14px;
            color:#333;
            margin:0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .hd-message-img {
            width: 100px;
            margin-right: 15px;
        }
        .hd-mg-ctn {
            width: 210px;
            margin-top: 5px;
        }
        .hd-message-info a:hover{
            background:#F6F8FA;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd .hd-mg-va a{
            font-size: 14px;
            color: #333;
            text-align: center;
            margin-top: 15px;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd .hd-mg-va a:hover{
            color: #1f367f;
        }
        .hd-task-info {
            overflow: hidden;
            margin: 0px 15px;
        }
        .hd-task-info .skill .progress {
            margin: 28px 0px 50px 0px;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd.notification-dd{
            left:-150px;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd.task-dd{
            left:-200px;
        }
        .header-top-menu .nav.notika-top-nav li .message-dd.chat-dd{
            left:-250px;
        }
    </style>
</head>

<body onload="window.print()">
 <div class="data-table-area">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                          <p align="right"><img width="300" height="100" src="../assets/img/logo11.png"></p>
                          <br>
                          <b><h4 align="center">LAPORAN PENDAPATAN<br><i>E-TICKETING</i> BUS DAMRI SEGMEN ANTAR KOTA<br>CABANG BANDAR LAMPUNG</h4></b>
                          <hr>
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
                                // error_reporting(0);

                                include '../config/koneksi.php';

                                $query = mysqli_query($konek, "SELECT tbl_penjualan.tgl_berangkat,tbl_penjualan.pendapatan,tbl_penjualan.id_jam,tbl_penjualan.id_armada, tbl_penjualan.id_trayek,tbl_penjualan.id_layanan,tbl_penjualan.jml_penumpang, tbl_jadwal.harga FROM tbl_penjualan INNER JOIN tbl_jadwal ON tbl_penjualan.id_trayek=tbl_jadwal.id_trayek AND tbl_penjualan.id_armada=tbl_jadwal.id_armada AND tbl_penjualan.id_layanan=tbl_jadwal.id_layanan AND tbl_penjualan.id_jam=tbl_jadwal.id_jam")or die(mysqli_error($konek));
                                        if(mysqli_num_rows($query) == 0){
                                          echo '<tr><td colspan="10" align="center"><i>Tidak ada data!</i></td></tr>';
                                        }
                                          else
                                        {
                                          $no = 1;
                                          while($data = mysqli_fetch_array($query)){
                                                  echo '<tr>';
                                                  echo '<td>'.$no.'</td>';
                                                  echo '<td>'.$data['tgl_berangkat'].'</td>';
                                                  echo '<td>'.$data['id_jam'].'</td>';
                                                  echo '<td>'.$data['id_armada'].'</td>';
                                                  echo '<td>'.$data['id_trayek'].'</td>';
                                                  echo '<td>'.$data['id_layanan'].'</td>';
                                                  echo '<td>'.$data['jml_penumpang'].'</td>';
                                                  echo '<td>Rp. '.$data['harga'].',-</td>';
                                                  echo '<td>Rp. '.$data['pendapatan'].',-</td>';
                                                  echo '</tr>';
                                            $no++;
                                          }
                                        }
                                                    ?>
                                        </tbody>
                                  </table>
                                  <p align="left">
                                    <font color="darkblue" style="font-family: arial"><b>
                                    Kantor DAMRI Cabang Bandar Lampung<br>
                                    Email : humas@damri.co.id<br>
                                    Web : www.damri.co.id<br>
                                    Telp : 021 - 8583131<br></b>
                                    </font>
                                  </p>
    </body>
    </html>