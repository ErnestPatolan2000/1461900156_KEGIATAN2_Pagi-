<!DOCTYPE html>
<head>
<title>APLIKASI PERPARKIRAN SURABAYA</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<div id="site-name"><img src="images/logo-parkir2.png"></div>
</head>
<?php
	SESSION_start();
	include('koneksi.php');	
		
	//Ambil data dari form login
      $username = $_POST['username'];
      $password = $_POST['password'];
	

	$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);
	if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin

		header("location:admin.php");
		
		

	// cek jika user login sebagai mobmasuk
	}else if($data['level']=="mobmasuk"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "mobmasuk";
		// alihkan ke halaman mobilmasuk
		header("location:petugasmobmasuk.php");

	// cek jika user login sebagai mobkeluar
	}else if($data['level']=="mobkel"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "mobkel";
		// alihkan ke halaman dashboard mobkel
		header("location:petugasmobkeluar.php");

		}else if($data['level']=="ruang"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "ruang";
		// alihkan ke halaman dashboard pengurus
		header("location:petugasruang.php");

	}
	}else{
		header("location:login_salah.php");
	}
?>