<?php  
require_once "koneksi.php";
$nama = $_POST['namaUser'];
$email = $_POST['emailUser'];
$password = md5($_POST['passwordUser']);

$sql = "INSERT INTO tb_user VALUES(null,'$nama','$email','$password')";

if ($conn->query($sql) === TRUE){
	echo "<script>alert('Pendaftaran Berhasil!')</script>";
	echo "<script>window.location.assign('index.php')</script>";
}else{
	echo "<script>alert('Pendaftaran Gagal $conn->error')</script>";
	echo "<script>window.location.assign('index.php')</script>";
}

?>