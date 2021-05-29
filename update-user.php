<?php 

include 'koneksi.php'; 
// menyimpan data kedalam variabel 
$user = $_POST['username']; 
$pass = $_POST['password']; 
$nama = $_POST['namalengkap']; 
$level = $_POST['level']; 
// query SQL untuk update data 
mysqli_query($koneksi, "UPDATE user SET password='$pass', namalengkap='$nama', level='$level' where username='$user'"); 


header("location:user.php"); 
?>
