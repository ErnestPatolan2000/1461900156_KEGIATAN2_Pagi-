<?php 
	include "koneksi.php"; //melakukan koneksi database
 	
    $hitung = mysqli_query($koneksi,"select * from ruangparkir where platnomor=' '");
	$jumlah = mysqli_num_rows($hitung);
	echo "Jumlah Ruang Parkir yang ada = " ;
	echo $jumlah;
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/siparkir/css/bootstrap.css">
	<script type="text/javascript" src="/siparkir/js/jquery.js"></script>
	<script type="text/javascript" src="/siparkir/js/bootstrap.js"></script>
</head>
<body>		
	<h3>Mobil Masuk</h3>
 	<br/>
	<br/>
 
	<form action="mobil_masuk.php" method="post">
	
		Plat Nomor <input type="text" name="masuk" required="required"> <br/>
		<input type="submit" value="Simpan Data">
		<button onclick="document.location='admin.php'">Kembali</button>
	</form>
 
</body>
</html>

