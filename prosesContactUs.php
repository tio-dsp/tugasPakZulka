<?php  
require_once "koneksi.php";
$nama = $_POST['namaUser'];
$email = $_POST['emailUser'];
$pesan = $_POST['pesanUser'];

$sql = "INSERT INTO tb_contact_us VALUES(null,'$nama','$email','$pesan')";

if ($conn->query($sql) === TRUE){
	echo "<script>alert('Pesan Berhasil Dikirim! Terimakasih')</script>";
	echo "<script>window.location.assign('index.php')</script>";
}else{
	echo "<script>alert('Pesan Gagal Dikirim $conn->error')</script>";
	echo "<script>window.location.assign('index.php')</script>";
}

?>