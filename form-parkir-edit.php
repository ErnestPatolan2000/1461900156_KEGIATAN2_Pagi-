<?php 
include 'koneksi.php'; 
$platnomor = $_REQUEST['platnomor'];
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title>Aplikasi Parkir</title> 
    </head>
<div id="header" class="header">
		<div id="site-name"><img src="images/download.jpg"></div>
		<div id="search">	     
   	</div>
	
    <body> 
        <form method="post" action="update-parkir.php"> 
        
<tr><td>Plat Nomor</td><td><input type="text" value="<?php echo $plat_nomor;?>" name="plat_nomor"></td></tr> 
<form method="post" action="">
<select name="ruang_parkir">    
<?php 
            
 $q ="SELECT * from ruangparkir order by ruangparkir asc";
 $h = mysql_query($q);               //melakukan query ke database
	  while ($row = mysql_fetch_array($h)) { //mengambil data array hasil dari database dan menampung dalam variabel $r
	  if ($row['status']=="") {
      echo "<option value=$row[ruangparkir]>$row[ruangparkir]</option>";
      } 
	  }		   			  
?>
</select> 
      <tr><td colspan="2"><button type="submit" value="simpan">Simpan</button> 
      <a href="mobilruang.php">Kembali</a></td></tr> 
      </table> 
      </form> 

    <body>             
</html>	
</body> 
</html> 