<?php
include 'koneksi.php'; 

?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Aplikasi Parkir</title> 
    </head> 
<div id="header" class="header">
		<div id="site-name"><img src="images/mobilbiru3.jpg"></div>
		<div id="search">
   	</div>
	 
    <body> 
	    <td colspan="1"><input type="button" value="Tutup halaman" onclick="self.close()"/></td>
    
            <table border="1" align= "left" width="400" cellpadding="5" id="box-table-a">
                <tr bgcolor="#adff2f">
                <th>NO</th><th>PLAT NOMOR</th><th>ACTION</th></tr> 
            <?php 
      
            $q="SELECT * from tbmobil";
			
            $no = 1; 
            $h  = mysql_query($q);               //melakukan query ke database
	        while ($row = mysql_fetch_array($h)) { //mengambil data array hasil dari database dan menampung dalam variabel $r
	        if ($row['status']=="m") {
            echo "<tr> 
            <td><center>$no</td> 
            <td><center>" . $row['plat_nomor'] . "</td> 
            <td><a href='form-parkir-edit.php?plat_nomor=$row[plat_nomor]'>MASUK</a>
              </tr>"; 
                $no++; 
            } 
	        }		   			  
            ?> 
        </table> 
   
             <table border="1" align= "center" width="400" cellpadding="5" id="box-table-a">
             <tr bgcolor="#ff0000">
             <th>NO</th><th>RUANG PARKIR</th><th>PLAT NOMOR</th><th>ACTION</th></tr> 
            <?php 
      
            $q="SELECT * from tbparkir";
			
            $no = 1; 
            $h  = mysql_query($q);               //melakukan query ke database
	        while ($row = mysql_fetch_array($h)) { //mengambil data array hasil dari database dan menampung dalam variabel $r
	        if ($row['status']=="1") {
            echo "<tr> 
            <td><center>$no</td> 
			<td><center>" . $row['ruang_parkir'] . "</td> 
            <td><center>" . $row['plat_nomor'] . "</td> 
            <td><a href='form-parkir-editkeluar.php?ruang_parkir=$row[ruang_parkir]'>KELUAR</a>
              </tr>"; 
                $no++; 
            } 
	        }		   			  
            ?> 
        </table> 

   </body> 
</html>



