<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_user    = $_POST['id_user'];
    $nik        = $_POST['nik'];
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);
    $no_telp    = $_POST['no_telp'];
    $id_divre   = $_POST['id_divre'];
    $id_cabang  = $_POST['id_cabang'];
    $alamat     = $_POST['alamat'];
    $id_level   = $_POST['id_level'];

    //UPLOADS FOTO
    $target_dirfoto = "../assets_be/images";
    $target_foto    = $target_dirfoto . basename($_FILES["fileToUploadFoto"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_foto,PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUploadFoto"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check file size
    if ($_FILES["fileToUploadFoto"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
    && $imageFileType != "GIF" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUploadFoto"]["tmp_name"], $target_foto)) {
            echo "The file ". basename( $_FILES["fileToUploadFoto"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


	$insert			= "INSERT INTO tbl_user VALUES ('','$nik', '$nama', '$email', '$password', '$no_telp', '$id_divre', '$id_cabang', '$target_foto', '$alamat', '$id_level')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	print
        "<script>
            history.back(-1);
        </script>";  

?>
