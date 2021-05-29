<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Parkir</title>
	<style type="text/css">
				body{
	font-family: arial;
	font-size: 14px;
}
#canvas{
	width: 450px;
	margin: 0 auto;
	border: 1px solid silver;
}

#header{
	font-size: 20px;
	padding: 20px;
}

#menu{
	background-color: #336666;
}
#menu ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
#menu ul li.utama{
	display: inline-table;
}
#menu ul li:hover{
	background-color: #0033cc;
}
#menu li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}
.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}
.utama:hover ul{
	display: block;
}
.utama ul li{
	display: block;
	background-color: #6cf;
	width: 160px;
}

#isi{
	min-height: 400px;
	padding: 20px;
}
	</style>
	<!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->
  <link rel="shortcut icon" href="asset/img/logo.png">
	</head>
	<?php
	session_start();
  include "koneksi.php";

  date_default_timezone_set("Asia/Jakarta");
  $waktu = date('H:i');
  $tanggal = date('D, d M Y');
 ?>
<bodyclass= "bg-teal" style="overflow-y: hidden;">
<body background="images/download.jpg">
<div class="panel container col-lg-4 col-md-6 col-sm-6 col-xs-12" style="position: relative; margin: auto; box-shadow: 0 7px 16px #00655b, 0 4px 5px #006f64;">
          <div class="panel-body">
            <div style="float: left; margin-left:20px;">
              <img src="asset/img/logo.png" width="100px" class="animated fadeInDown">
            </div>
            <div style="float: left;">
              <h1 class="animated fadeInLeft" id="jam" style="margin-left: 40px; font-size: 62pt"><?= $waktu ?></h1>
              <p class="animated fadeInRight" style="margin-left: 85px; font-size: 14pt;"><?= $tanggal;?></p>
            </div>
          </div>
	<div id="canvas">
		<div id="header">
			SIMPAR
		</div>
		<div id="menu">
			<ul>
				<li class="utama"><a href="menu.php">Beranda</a></li>
				<li class="utama"><a href="">Lihat Ruang Parkir</a>
					<ul>
						<li><a href="data_parkir1.php">Lantai 1</a></li>
						<li><a href="data_parkir2.php">lantai 2</a></li>
						<li><a href="data_parkir3.php">lantai 3</a></li>
					</ul>
				</li>
				<li class="utama" style="float: right;"><a href="logout.php">Login</a>
				</li>
			</ul>
		</div>
		<div id="isi">
			SELAMAT DATANG DI SISTEM INFORMASI PARKIR
		</div>
	</div>
</body>