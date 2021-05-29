<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/siparkir/css/bootstrap.css">
	<script type="text/javascript" src="/siparkir/js/jquery.js"></script>
	<script type="text/javascript" src="/siparkir/js/bootstrap.js"></script>
</head>
<body>
		<CENTER><h4>DATA USER</h4></CENTER>
				<table class="table table-bordered">			
		<tr>
			<th><h4>Username</h4></th>
			<th><h4>Nama Lengkap</h4></th>
			<th><h4>Level</h4></th>
			<th><h4>Aksi</h4></th>
			</tr>
<?php
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from user");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
      echo "<tr>";
 	   echo "<th><b>".$r['username']."</b></th>";
       echo "<th><b>".$r['namalengkap']."</b></th>";
       echo "<th><b>".$r['level']."</b></th>";	
?>	 
	  <td>
		<a class="btn btn-warning btn-sm" href="edit-user.php?username=<?php echo $r['username'];?>">Edit</a>
		<a class="btn btn-danger btn-sm" href="hapus-user.php?username=<?php echo $r['username'];?>">Hapus</a>
						</td>
					</tr>
	 <?php } ?>	
				</table>
 
				</table>
 
				<br/>
		</div>
	</div>
 
 
</body>
</html>