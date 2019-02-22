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
                <small>Login with your email corporate please! <a href="#">Don't have an access?</a></small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="form-check mt-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    Remember me!
                  </label>
                </div>
                <div align="right">
                  <button type="button" class="nav-link btn btn-default d-none d-lg-block">Login</button>
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
              <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <div class="row">
              <center>
              <div class="col-sm-5">
                <img src="./assets/img/logo7.png">
              </div>
            </center>
            </div>
          </div>
          <br>
          <div class="row">
          <center>
          <div class="col-sm-8">
          <div id="welcome">
          <center>
            <h5>
            {{ message }}
          </h5>
          </center>
        </div>
        <script src="vue/index.js"></script>
      </center>
        </div>
        </div>
      </div>
    </div>