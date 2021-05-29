<?php
include "koneksi.php"; //melakukan koneksi database        	
?>
	
<!DOCTYPE html>

<html>
<body background="images/download1.jpg">

<table border="2" align="left" width="500" cellpadding="5" 
cellspacing= "7" id="box-table-a">
    <!--menampilkan data dalam bentuk tabel-->
              
    <tr bgcolor="#faebd7">
	<th><h3>K I R I</h3></th>
	<th bgcolor="#adff2f">
	<a href="data_parkir3.php">REFRESH</a></th>
  <th bgcolor="#adff2f">
    <a href="index.php">Back</a></th>
  </tr >
	<tr bgcolor="#faebd7">
    <th scope="col">Ruang parkir</th>
    <th scope="col">Plat Nomor</th>
    </tr>
<?php
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from ruangparkir order by lantai desc");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
         if (substr($r['lantai'],0,1)=='3') {            	   
        if ($r['posisi']=='kiri') {
        if ($r['platnomor']==" ") { 
           $warna="#adff2f";
	       } else {
             $warna="#ff0000";
	         } 
     	   echo "<tr bgcolor=\"".$warna."\">";
           echo "<th><b>".$r['lantai']."</b></th>";
           echo "<th><b>".$r['platnomor']."</b></th>";
     	}
		}
	 }
?>
<table border="2" align="center" width="500" cellpadding="5" cellspacing="7" id="box-table-a">
<!--menampilkan data dalam bentuk tabel-->
    <tr bgcolor="#ffd700">
    <th><h3>K A N A N</h3></th>
	</tr>
	<tr bgcolor="#ffd700">
    <th scope="col">Ruang parkir</th>
    <th scope="col">Plat Nomor</th>
    </tr>     
        
<?php
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from ruangparkir order by lantai desc");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
         if (substr($r['lantai'],0,1)=='3') {            	   
        if ($r['posisi']=='kanan') {
        if ($r['platnomor']==" ") { 
           $warna="#adff2f";
	       } else {
             $warna="#ff0000";
	         } 
     	   echo "<tr bgcolor=\"".$warna."\">";
           echo "<th><b>".$r['lantai']."</b></th>";
           echo "<th><b>".$r['platnomor']."</b></th>";
     	}
		}
	 }
?>

	    
  