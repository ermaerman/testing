<?php

	include "koneksi.php";

	$email  = $_POST["email"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$nama      = $data['nama'];
	$jabatan   = $data['jabatan'];
	$email     = $data['email'];
	$password  = $data['password'];
	$id_level  = $data['id_level'];


if($jlhrecord > 0){

	session_start();
	$_SESSION['id_user']=$id_user;
	$_SESSION['nama']=$nama;
	$_SESSION['jabatan']=$jabatan;
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	$_SESSION['id_level']=$id_level;

	//redirect level
		if($id_level == 1){
			header('Location:../superadmin/index.php?content=index');
		}
		elseif ($id_level == 2){
			header('Location:../admin/index.php?content=index');
		}
		elseif($id_level == 3){
			header('Location:');
		}
}

else{
	echo "<center><img  src='../assets/gif/loading.gif'><strong><center><i>Maaf anda gagal login. Mungkin Email atau Password yang anda masukkan salah.<br>Silahkan masukkan Email atau Password dengan benar!</center>";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}

?>