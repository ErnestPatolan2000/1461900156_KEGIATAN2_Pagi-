<!DOCTYPE html>
<html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/siparkir/css/bootstrap.css">
	<script type="text/javascript" src="/siparkir/js/jquery.js"></script>
	<script type="text/javascript" src="/siparkir/js/bootstrap.js"></script>
</head>
<body>
		
</body>
</html>

<head>

	<title>Bootstrap Part 1 : Pengertian dan Cara Menggunakan Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<CENTER><h3>DATA RUANG</h3></CENTER>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="form-group">				
				</div>			
				<br/>
				<table class="table table-bordered">			
		<tr>
			<th>Nama Ruang</th>
			<th>Posisi</th>
	
		</tr>
<?php
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from ruangparkir  order by lantai asc ");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
       echo "<tr>";
 	   echo "<th><b>".$r['lantai']."</b></th>";
       echo "<th><b>".$r['posisi']."</b></th>";
     
?>
					</tr>
	 <?php } ?>	
				</table>
 
				</table>
 
				<br/>
		</div>
	</div>
 
 
</body>
</html>