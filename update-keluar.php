<?php 

include 'koneksi.php'; 
// menyimpan data kedalam variabel 
$plat = $_POST['platnomor']; 


	 
        date_default_timezone_set("Asia/Jakarta");
		$tglk=date("y-m-d H:i:s");
	  

mysqli_query($koneksi, "UPDATE prosesparkir SET tglkeluar='$tglk', status='k', biaya= '5000' where platnomor='$plat'"); 
header("location:mobilkeluar.php"); 

?>
