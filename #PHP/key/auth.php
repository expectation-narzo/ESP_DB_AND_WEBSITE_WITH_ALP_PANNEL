<?php 

$dbhost = 'localhost';
$dbuser = 'plexusc2_lieshooter';
$dbpass = '***';
$db = 'plexusc2_lieshooter';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 

date_default_timezone_set('Asia/Jakarta');

if (mysqli_connect_error()){
	echo "Koneksi database gagal :". mysqli_connect_error();
}

?>