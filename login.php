<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login Admin</title>
	<link rel="stylesheet" type="text/css" href="style0.css">
	</head>        
<body>
	<?php
		//ini digunakan untuk mengecek apakah session login username ada
		session_start();
		if (!empty($_SESSION['username'])) {
			//jika ada redirect ke halaman index 
			header('location:index.php');
		}	
	?>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		<center>
				<a class="link" href="index.php">Kembali</a>
			</center>
	</div>
</body>
</html>
