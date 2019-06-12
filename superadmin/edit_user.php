<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $level   = $_SESSION['id_level'];
    // var_dump($level);

    $id_user = $_GET['id_user'];

    $edit    = "SELECT id_user, nik, nama, email, password, no_telp, id_divre, id_cabang, foto, alamat, id_level FROM tbl_user WHERE id_user = '$id_user'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);


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
                                        <h2>Edit Data User</h2>
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

     <div class="form-example-area">
        <div class="container">
            <div class="row">
                <form action="../config/update_user.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="form-example-int form-horizental mg-t-10">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <p align="center"><img width="150" height="250" src="<?php echo $data['foto']; ?>"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                     <input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>" required>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">NIK</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?php echo $data['nik']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="level" value="<?php echo $level ?>">
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nama</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Email</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                             <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $data['email']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Password</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data['password']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">No. Telp</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" value="<?php echo $data['no_telp']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Divre</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                           <select name="id_divre" class="form-control">
                                                <!-- <option><?php echo $data['id_divre'] ?></option> -->
                                                <?php
                                                    $query  = "SELECT * FROM tbl_divre";
                                                    $divre = mysqli_query($konek,$query)or die(mysqli_error($konek));
                                                    while ($tampil = mysqli_fetch_array($divre)) {
                                                ?>
                                                    <option value="<?php echo $tampil['id_divre']; ?>" <?php if ($data['id_divre'] == $tampil['id_divre']) { echo 'selected'; } ?> ><?php echo $tampil['nama']; ?></option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Cabang</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="id_cabang" class="form-control">
                                                 <?php
                                                     $query  = "SELECT * FROM tbl_cabang";
                                                     $Cabang = mysqli_query($konek,$query)or die(mysqli_error($konek));
                                                     while ($tampil = mysqli_fetch_array($Cabang)) {
                                                 ?>
                                                     <option value="<?php echo $tampil['id_cabang']; ?>" <?php if ($data['id_cabang'] == $tampil['id_cabang']) { echo 'selected'; } ?> ><?php echo $tampil['nama']; ?></option>
                                                 <?php 
                                                     }
                                                 ?>
                                             </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Foto</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st"> -->
                                               <input type="hidden" class="form-control" name="foto" placeholder="Foto" value="<?php echo $data['foto']; ?>" required>
                                       <!--  </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Foto</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                              <input type="file" name="fileToUploadFoto" id="fileToUploadFoto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Alamat</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                               <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            if ($_SESSION['id_level']==1){
                            ?>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Level</label>
                                            </div>
                                            <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <select name="id_level" class="form-control">
                                                         <?php
                                                             $query  = "SELECT * FROM tbl_level";
                                                             $level = mysqli_query($konek,$query)or die(mysqli_error($konek));
                                                             while ($tampil = mysqli_fetch_array($level)) {
                                                         ?>
                                                             <option value="<?php echo $tampil['id_level']; ?>" <?php if ($data['id_level'] == $tampil['id_level']) { echo 'selected'; } ?> ><?php echo $tampil['level']; ?></option>
                                                         <?php 
                                                             }
                                                         ?>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            else {
                            ?>
                                <input type='hidden' name="id_level" value='<?php echo $data['id_level']; ?>'>
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button type="submit" data-toggle="tooltip" data-placement="left" title="Edit User" class="btn"><i class="notika-icon notika-checked"></i> Edit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>