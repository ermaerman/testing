<?php
  
  
  //menyambungkan koneksi
  include '../config/koneksi.php';
  session_start();

  if(isset($_GET['content'])) $content = $_GET['content']; 
      else $content = "index";

?>

<!doctype html>
<html class="no-js" lang="">

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
        .default-sidebar-tp .header-top-menu .nav.notika-top-nav li .search-dd, .sm-ltd-sd .header-top-menu .nav.notika-top-nav li .search-dd, .lg-sd-tp .header-top-menu .nav.notika-top-nav li .search-dd, .mini-std-tp .header-top-menu .nav.notika-top-nav li .search-dd, .lg-tp-ld .header-top-menu .nav.notika-top-nav li .search-dd, .offcanvas .header-top-menu .nav.notika-top-nav li .search-dd, .hd-fd-tp .header-top-menu .nav.notika-top-nav li .search-dd, .dark-header .header-top-menu .nav.notika-top-nav li .search-dd, .dark-sidebar-tp .header-top-menu .nav.notika-top-nav li .search-dd, .fullscreen .header-top-menu .nav.notika-top-nav li .search-dd {
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

<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="index.php?content=index"><img width="200" src="../assets/img/logo1.png"></span></a><font color="gray">Analysis System V 1.0.0</font>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Bantuan</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notifikasi</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Akun Pengguna</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <a href="index.php?content=account"><img src="../assets/img/icon.png" alt="" /></a>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>
                                                        <?php echo "<b>".$_SESSION['nama']."</b>"?>
                                                    </h3>
                                                    <!-- <p>You are login as superadmin <?php echo "".$_SESSION['id_level'].""?> now. </p> -->
                                                    <?php
                                                        $level      = $_SESSION['id_level'];
                                                        $qlevel     = "SELECT * FROM tbl_level WHERE id_level='$level'";
                                                        $record     = mysqli_query($konek, $qlevel)or die(mysqli_error($konek));
                                                        $show       = mysqli_fetch_array($record);
                                                    
                                                    ?>
                                                    <p>Anda login sebagai <?php echo $show['level']; ?>. </p>
                                                </div>
                                            </div>
                                        </a>
                                         <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Last Login</h3>
                                                    <p><?php
                                                date_default_timezone_set('Asia/Jakarta');
                                                echo "Hari ini " . date("d/m/Y | h:i:s");
                                                ?></p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr>
                                         <a href="../config/proses_logout.php">
                                            <div class="" align="right">
                                                <div class="hd-mg-ctn">
                                                     <button class="btn notika-btn-indigo btn-reco-mg btn-button-mg">Keluar</button> &nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Bantuan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Analisis</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Grafik</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Laporan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> Pengaturan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Manajemen User</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.php?content=index">Dashboard</a>
                                </li>
                                <li><a href="index.php?content=info">Info</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">List Masuk</a>
                                </li>
                                <li><a href="view-email.html">List Pertanyaan</a>
                                </li>
                                <!-- <li><a href="compose-email.html">Compose Email</a>
                                </li> -->
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="animations.html">Animations</a>
                                </li>
                                <li><a href="google-map.html">Google Map</a>
                                </li>
                                <li><a href="data-map.html">Data Maps</a>
                                </li>
                                <li><a href="code-editor.html">Code Editor</a>
                                </li>
                                <li><a href="image-cropper.html">Images Cropper</a>
                                </li>
                                <li><a href="wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="flot-charts.html">Flot Charts</a>
                                </li>
                                <li><a href="bar-charts.html">Bar Charts</a>
                                </li>
                                <li><a href="line-charts.html">Line Charts</a>
                                </li>
                                <li><a href="area-charts.html">Area Charts</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-components.html">Form Components</a>
                                </li>
                                <li><a href="form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="notification.html">Notifications</a>
                                </li>
                                <li><a href="alert.html">Alerts</a>
                                </li>
                                <li><a href="modals.html">Modals</a>
                                </li>
                                <li><a href="buttons.html">Buttons</a>
                                </li>
                                <li><a href="tabs.html">Tabs</a>
                                </li>
                                <li><a href="accordion.html">Accordion</a>
                                </li>
                                <li><a href="dialog.html">Dialogs</a>
                                </li>
                                <li><a href="popovers.html">Popovers</a>
                                </li>
                                <li><a href="tooltips.html">Tooltips</a>
                                </li>
                                <li><a href="dropdown.html">Dropdowns</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Contact</a>
                                </li>
                                <li><a href="invoice.html">Invoice</a>
                                </li>
                                <li><a href="typography.html">Typography</a>
                                </li>
                                <li><a href="color.html">Color</a>
                                </li>
                                <li><a href="login-register.html">Login Register</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

        <?php
                    if ($content=='index')
                      include 'home.php';
                    elseif ($content=='account')
                      include 'account.php';
        ?>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                         <p style="color: grey; font-size: 13px;">© 2019, Made with <img width="20" src="../assets/img/love1.png"> by Erma Noviana
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
    <script src="../assets_be/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="../assets_be/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="../assets_be/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="../assets_be/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="../assets_be/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="../assets_be/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="../assets_be/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="../assets_be/js/counterup/jquery.counterup.min.js"></script>
    <script src="../assets_be/js/counterup/waypoints.min.js"></script>
    <script src="../assets_be/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="../assets_be/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="../assets_be/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets_be/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets_be/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="../assets_be/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets_be/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="../assets_be/js/flot/jquery.flot.js"></script>
    <script src="../assets_be/js/flot/jquery.flot.resize.js"></script>
    <script src="../assets_be/js/flot/curvedLines.js"></script>
    <script src="../assets_be/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="../assets_be/js/knob/jquery.knob.js"></script>
    <script src="../assets_be/js/knob/jquery.appear.js"></script>
    <script src="../assets_be/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="../assets_be/js/wave/waves.min.js"></script>
    <script src="../assets_be/js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="../assets_be/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="../assets_be/js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="../assets_be/js/chat/moment.min.js"></script>
    <script src="../assets_be/js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="../assets_be/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    
</body>

</html>
