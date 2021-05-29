<!DOCTYPE html>
<html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/siparkir/css/bootstrap.css">
	<script type="text/javascript" src="/siparkir/js/jquery.js"></script>
	<script type="text/javascript" src="/siparkir/js/bootstrap.js"></script>
</head>
<body>
		<CENTER><h3>DATA MOBIL</h3></CENTER>
	
</body>
</html>

<head>

	<title>Data Mobil</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="form-group">				
				</div>			
				<br/>
				<table class="table table-bordered">			
		<tr>
			<th>Plat Nomor</th>
			<th>Tgl Masuk</th>
			<th>Tgl Keluar</th>
			<th>Status</th>
	
		</tr>
<?php
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from prosesparkir");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
      echo "<tr>";
 	   echo "<th><b>".$r['platnomor']."</b></th>";
       echo "<th><b>".$r['tglmasuk']."</b></th>";
       echo "<th><b>".$r['tglkeluar']."</b></th>";
      echo "<th><b>".$r['status']."</b></th>";		
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