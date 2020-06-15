<?php 
$databaeHost = 'localhost';
$databaseName = 'pmb';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaeHost, $databaseUsername, $databasePassword, $databaseName);
if($conn -> connect_errno){
	echo die("Gagal menghubungkan ke data base".$conn->connect_errno);
}
 ?>
