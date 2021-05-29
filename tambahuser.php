
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/siparkir/css/bootstrap.css">
	<script type="text/javascript" src="/siparkir/js/jquery.js"></script>
	<script type="text/javascript" src="/siparkir/js/bootstrap.js"></script>
</head>
<body>
	
	<h3>Tambah User</h3>
 	<br/>
	<br/>
 
	<form action="tambah_user.php" method="post">
	
		Username <input type="text" name="usr" required="required"> <br/>
		Password <input type="text" name="pass" required="required"> <br/>
		Nama Lengkap <input type="text" name="nama" required="required"> <br/>
		Level<input type="text" name="level" required="required"> <br/>
		<input type="submit" value="Simpan Data">
		<button onclick="document.location='admin.php'">Kembali</button>
	</form>
 
</body>
</html>

