<?php
$host="localhost";
$user="root";
$pass="";
$db_name="juju";
$koneksi=mysqli_connect("localhost","root","","juju");	// melakukan koneksi berdasarkan host, user, dan password yang ditentukan
if(mysqli_connect_errno()){
	echo "Tidak dapat terkoneksi ke database";
}

?>
