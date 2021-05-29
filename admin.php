<!DOCTYPE html>
 <?php
	SESSION_start();
	include('koneksi.php');
	?>
<head>
	<title>Halaman admin</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<div id="site-name"><img src="images/judul3.jpg"></div>
</head>
<body>
<div id="header" class="header">
		<div id="search">	
</div>	  

		<ul id="nav">
		<li class="first"><a href="user.php" target="_blank">Data User</a></li>
		<li class="first"><a href="tambahuser.php">Tambah User</a></li>
		<li class="first"><a href="ruang.php" target="_blank">Data Ruang</a></li>
		<li class="first"><a href="tambah-ruang.php">Tambah Ruang</a></li>
		<li class="first"><a href="mobilmasuk.php">Mobil Masuk</a></li>
		<li class="first"><a href="datamobil.php" target="_blank">Data Mobil</a></li>
		<li class="first"><a href="mobilkeluar.php" target="_blank">Mobil Keluar</a></li>
		<li class="first"><a href="masukruang.php">Masuk Ruang</a></li>
        <li class="first"><a href="keluarruang.php">Keluar Ruangan</a></li>
		<li class="first"><a href="logout.php">Logout</a></li>

</body>
