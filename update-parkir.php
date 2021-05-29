<?php 

include 'koneksi.php'; 
// menyimpan data kedalam variabel 
$plat = $_POST['platnomor']; 
$lantai = $_POST['lantai']; 
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from prosesparkir where platnomor='$plat'");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
          $tglm= $r['tglmasuk'];
	      } 

 mysqli_query($koneksi, "UPDATE ruangparkir SET platnomor='$plat' where lantai='$lantai'"); 
mysqli_query($koneksi, "UPDATE prosesparkir SET status='r' , tglmasuk='$tglm' where platnomor='$plat' and status='m'"); 
header("location:masukruang.php"); 

?>
