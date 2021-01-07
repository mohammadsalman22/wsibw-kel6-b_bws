<?php
include 'koneksi.php';
$nama_travel = $_POST['nama_travel'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($nama_travel));
$gambar_travel = $_FILES['gambar_travel']['name'];
$alamat_travel = $_POST['alamat_travel'];
$deskripsi_travel = $_POST['deskripsi_travel'];
$harga_travel = $_POST['harga_travel'];
$dir = "../assets/images/";
$file = $dir.$gambar_travel;
$insert = mysqli_query($connect,"insert into tb_travel values ('','$nama_travel','$gambar_travel','$alamat_travel','$deskripsi_travel','$harga_travel','$slug')");
if(move_uploaded_file($_FILES['gambar_travel']['tmp_name'], $file)){
header("location:travel.php?pesan=input");		
	}
?>