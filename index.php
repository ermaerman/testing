<?php
  
  //menyambungkan koneksi
  include 'config/koneksi.php';

  if(isset($_GET['content'])) $content = $_GET['content']; 
      else $content = "index";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="" sizes="76x76" href="./assets/img/icon.png">
  <link rel="icon" type="image/png" href="./assets/img/logo3.png">
  <title>DAMRI ‣ Logistics System V 1.0.0</title>
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php" rel="tooltip" title="Takes you everywhere" data-placement="top">
          <span><img width="150" src="./assets/img/logo1.png"></span></a><font color="gray">Logistics System V 1.0.0</font>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>PERUM DAMRI</a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="index.php?content=documentation" class="dropdown-item">
                <i class="tim-icons icon-paper"></i>Documentation
              </a>
              <a href="index.php?content=helpdesk" class="dropdown-item">
                <i class="tim-icons icon-single-02"></i>Helpdesk
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-default d-none d-lg-block" href="" data-toggle="modal" data-target="#myModal2">
              <i class="tim-icons icon-user-run"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
              if ($content=='index')
                include 'home.php';
              else if ($content=='documentation')
                include 'documentation.php';
              else if ($content=='helpdesk')
                include 'helpdesk.php';
  ?>
  </div>
     
   
    <footer class="footer">
      <div class="container" align="right">
          <p style="color: grey; font-size: 13px;">© 2019, Made with <img width="20" src="./assets/img/love.png"> by Erma Noviana for a better DAMRI.</p>
      </div>
    </footer>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>

    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>
</html>