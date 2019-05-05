<body class="landing-page">
  <div class="wrapper">
    <div class="page-header">
      <img src="assets/img/blob.png" class="path">
      <div class="content-center">
        <div class="row row-grid justify-content-between align-items-center text-left">
          <div class="col-lg-6 col-md-6">
            <h1 class="text-white">Bantuan —
            </h1>
            <p class="text-white mb-3">Jl. Matraman Raya No. 25 Jakarta Timur 13140
            	<br>Telp : (021)8583131 (Hunting) Fax : (021)8583732, 8504876<br>
					Contact Center Hello DAMRI 1500825
					<br><a href="https://www.damri.co.id">https://www.damri.co.id</a></p>
            <div class="btn-wrapper mb-3">
              <p class="text-success d-inline">Silahkan gulir kebawah</p>
              <a href="#blk" class="btn btn-success btn-link btn-sm"><i class="tim-icons icon-minimal-down"></i></a>
            </div>
            <div class="btn-wrapper">
              <div class="button-container">
                <button href="#" class="btn btn-icon btn-simple btn-round btn-neutral">
                </button>
                <button href="#" class="btn btn-icon btn-simple btn-round btn-neutral">
                </button>
                <button href="#" class="btn btn-icon btn-simple btn-round btn-neutral">
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <img src="assets/img/etherum2.png" alt="Circle image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-tabs">
        <div class="container">
          <div class="title">
            <h3 class="mb-3">Bantuan Tabs</h3>
             <a class="nav-link btn btn-default d-none d-lg-block" href="" data-toggle="modal" data-target="#myModal3">
              <i class="tim-icons icon-pin"></i> Masukan Pertanyaan
            </a>
          </div>
          <div class="row">
            <div class="col-md-12 ml-auto col-xl-12 mr-auto">
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">Frequently Answer Question</small>
              </div>
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                        <i class="tim-icons icon-paper"></i> Pertanyaan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                        <i class="tim-icons icon-pencil"></i> Jawaban
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="link1">
                      <p>&nbsp;&nbsp;&nbsp;Saya tidak memiliki akses untuk masuk atau login, apa yang harus saya lakukan?</p>
                    </div>
                    <div class="tab-pane" id="link2">
                      <p>&nbsp;&nbsp;&nbsp;Silahkan hubungi IT DAMRI Pusat.</p>
                    </div>        
                  </div>
                </div>
              </div>
            </div>
           </div>
      </div>
      <!-- End Section Tabs -->
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

      <!-- Form Modal -->
      <div class="modal fade modal-black" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center"></div>
            <div class="modal-body">
              <div class="text-center">
                <img width="250" src="./assets/img/logo1.png">
              </div>
              <div class="text-center text-muted mb-4 mt-3">
                <small>Silahkan tulis pertanyaan pada form dibawah ini.</small>
              </div>
              <form role="form" action="config/tambah_pertanyaan.php" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-planet"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Nama" type="text" name="nama" required>
                  </div>
                </div>
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
                        <i class="tim-icons icon-pin"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Pertanyaan" type="text" name="pertanyaan" required>
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
                  <button type="submit" class="nav-link btn btn-default d-none d-lg-block">Tambah</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->