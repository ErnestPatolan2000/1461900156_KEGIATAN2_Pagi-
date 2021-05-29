<?php 
session_start();
include "koneksi.php"; //melakukan koneksi database
$platn= $_GET['platnomor'];

?>
<!DOCTYPE html>
<html>
<html>
<head>

	<title>Mobil Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
  
      				
<?php		
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from prosesparkir where platnomor='$platn' and status='m'");  
	 while ($d = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
          echo "Plat Nomor = ".$d['platnomor'];
	 
	 ?>
	 <form method="post" action="update-parkir.php"> 
		<input type="hidden" name="platnomor" value="<?php echo $d['platnomor']; ?>"> <br/>
		
<select name="lantai">
<?php 

 $link1 = new mysqli("localhost","root","","juju");
$q1 = $link1->query("select * from ruangparkir where platnomor=' '");  
	 while ($r1 = $q1->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
     
	?>
	<option  value="<?php echo $r1['lantai'];?>"><?php echo $r1['lantai'];?></option>";
	 
	  <?php } ?>
	    
</select>
		<input type="submit" value="Simpan Data">
   
		

</form>
 <?php }?>
 
	</table>
 
	<br/>

 
</body>
</html>