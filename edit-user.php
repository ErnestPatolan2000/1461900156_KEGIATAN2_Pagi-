<?php 
session_start();
include "koneksi.php"; //melakukan koneksi database
$user= $_GET['username'];
?>
<head>


	<title>Aplikasi Perparkiran</title>
	
</head>
<title>Ruang Parkir</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

<body>

	<h3>Edit User</h3>
	<br/>
<?php		
$link = new mysqli("localhost","root","","juju");
$q = $link->query("select * from user where username='$user'");  
	 while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
    
	 ?>
<form action="update-user.php" method="post">
	
		Username <?php echo $r['username']; ?>
		<input type="hidden" name="username" value="<?php echo $r['username']; ?>"> <br/>
		Password <input type="text" required="required" name="password" value="<?php echo $r['password']; ?>"> <br/>
		Nama Lengkap <input type="text" name="namalengkap" value="<?php echo $r['namalengkap']; ?>"> <br/>
		Level <input type="text" required="required" name="level" value="<?php echo $r['level']; ?>"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	 <?php } ?>