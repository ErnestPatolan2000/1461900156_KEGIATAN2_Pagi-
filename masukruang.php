<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/siparkir/css/bootstrap.css">
	<script type="text/javascript" src="/siparkir/js/jquery.js"></script>
	<script type="text/javascript" src="/siparkir/js/bootstrap.js"></script>
</head>
<body>
		<CENTER><h4>MOBIL MASUK RUANG</h4></CENTER>
				<table class="table table-bordered">			
		<tr>
			<th><h4>Plat Nomor</h4></th>
			<th><h4>Aksi</h4></th>
			</tr>

<?php
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from prosesparkir where status='m'");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
        echo "<tr>";
 	    echo "<th><b>".$r['platnomor']."</b></th>";
       
?>
	<td>
	<a class="btn btn-warning btn-sm" href="masuk-ruang.php?platnomor=<?php echo $r['platnomor'];?>">Masuk Ruang</a>
	</td>
    </tr>
	
	
	<?php } ?>
				</table>
 
			
				<br/>
		</div>
	</div>
	
 
</body>
</html>