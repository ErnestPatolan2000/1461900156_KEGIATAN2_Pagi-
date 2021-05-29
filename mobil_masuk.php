<?php 
SESSION_start();
	include "koneksi.php"; //melakukan koneksi database
 	$platn = $_POST['masuk'];
    $login = mysqli_query($koneksi,"select * from prosesparkir where platnomor='$platn' and (status='m' or status='r' or status='k')");
	$cek = mysqli_num_rows($login);
	//cek data yang dikirim, apakah kosong atau tidak
	if ($cek > 0) {
	echo "Sudah ada Plat nomor tsb";
	} else {

   	    date_default_timezone_set("Asia/Jakarta");
		    $tgl=date("y-m-d H:i:s");
		    $plat=strtoupper($platn);
        	mysqli_query($koneksi,"insert into prosesparkir values('$plat','$tgl',' ','m',' ',' ')");
header ("location:mobilmasuk.php");
	}
?>
