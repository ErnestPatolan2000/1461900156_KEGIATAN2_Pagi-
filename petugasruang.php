 <!DOCTYPE html>
 <?php
	SESSION_start();
	include('koneksi.php');
	?>
<head>
	<title>Halaman admin</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<div id="site-name"><img src="images/logo-parkir2.png"></div>
</head>
<body>
<div id="header" class="header">
		<div id="search">	
</div>	  

		<ul id="nav">
		<li class="first"><a  href="ruang.php" target="_blank">Data Ruang</a></li>
		<li class="first"><a  href="datamobil.php" target="_blank">Data Mobil</a></li>
		<li class="first"><a  href="masukruang.php">Masuk Ruang</a></li>
        <li class="first"><a  href="keluarruang.php">Keluar Ruangan</a></li>
		<li class="first"><a  href="logout.php">Logout</a></li>

</body>