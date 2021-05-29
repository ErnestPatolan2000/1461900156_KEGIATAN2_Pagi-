<?php 
session_start();
include "koneksi.php"; //melakukan koneksi database
$platn= $_GET['platnomor'];

?>
<!DOCTYPE html>
<html>
<html>
<head>

    <title>Mobil Keluar</title>
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
     <form method="post" action="update-keluar.php"> 
        <input type="hidden" name="platnomor" value="<?php echo $d['platnomor']; ?>"> <br/>
        
        <input type="submit" value="anda yakin?">
   
        

</form>
 <?php }?>
 
    </table>
 
    <br/>

 
</body>
</html>