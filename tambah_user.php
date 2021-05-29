<?php
SESSION_start();

include 'koneksi.php';

$user = $_POST['usr'];
$passwd = $_POST['pass'];
$nama = $_POST['nama'];
$level = $_POST['level'];

$login = mysqli_query($koneksi,"select * from user where username='$user'");
	$cek = mysqli_num_rows($login);
	//cek data yang dikirim, apakah kosong atau tidak
	if ($cek > 0) {
	echo "Sudah ada User tsb";
	} else {
		echo "Anda gagal";
	

mysqli_query($koneksi,"insert into user values('$user','$passwd','$nama','$level')");
header ("location:admin.php");
	}
?>