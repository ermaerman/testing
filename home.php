 <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
 <!-- Form Modal -->
      <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center"></div>
            <div class="modal-body">
              <div class="text-center">
                <img width="250" src="./assets/img/logo1.png">
              </div>
              <div class="text-center text-muted mb-4 mt-3">
                <small>Silahkan login menggunakan email corporate! <a href="index.php?content=helpdesk">Tidak mempunyai akses?</a></small>
              </div>
              <form role="form" action="config/proses_login.php" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" required>
                  </div>
                </div>
                <!-- <div class="form-check mt-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    Remember me!
                  </label>
                </div> -->
                <div align="right">
                  <button type="submit" class="nav-link btn btn-default d-none d-lg-block">Masuk</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->
  <div class="wrapper">
    <div class="page-header header-filter">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">

        <div id="images">
            <div class="row">
              <center>
              <div class="col-sm-5">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <img src="./assets/img/logo7.png">
              </div>
            </center>
            </div>
          </div>
          <br>
          <div class="row">
          <center>
          <div class="col-sm-8">
          <center>
            <h5>
            Selamat datang di <a href="index.php">analysis.damri.co.id</a>,
        pada aplikasi ini anda dapat melakukan analisis terhadap penjualan e-ticketing bus DAMRI segmen antar kota Cabang Bandar Lampung.
        Anda dapat mengakses halaman tersebut setelah login menggunakan email corporate DAMRI yang telah valid. Terimakasih!
          </h5>
          </center>
        </div>
        </div>
      </div>
    </div>