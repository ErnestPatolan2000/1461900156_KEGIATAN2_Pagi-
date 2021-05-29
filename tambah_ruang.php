<?php
SESSION_start();

include 'koneksi.php';

$ruang = $_POST['ruang'];
$posisi = $_POST['pos'];

$login = mysqli_query($koneksi,"select * from ruangparkir where lantai='$ruang'");
	$cek = mysqli_num_rows($login);
	//cek data yang dikirim, apakah kosong atau tidak
	if ($cek > 0) {
	echo "Sudah ada yang menempati Ruang tsb";
	} else {

	

mysqli_query($koneksi,"insert into ruangparkir values('$ruang',' ','$posisi')");
header ("location:tambah-ruang.php");
	}
?>