<?php  

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "db_toko_tio";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error){
	die("Koneksi gagal");
}
?>