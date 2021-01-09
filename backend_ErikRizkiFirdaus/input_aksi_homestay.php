<?php
include 'koneksi.php';
$nama_homestay = $_POST['nama_homestay'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($nama_homestay));
$gambar_homestay = $_FILES['gambar_homestay']['name'];
$harga_homestay = $_POST['harga_homestay'];
$alamat_homestay = $_POST['alamat_homestay'];
$deskripsi_homestay = $_POST['deskripsi_homestay'];
$dir = "../assets/images/";
$file = $dir.$gambar_homestay;
$insert = mysqli_query($connect,"insert into tb_homestay values ('','$nama_homestay','$gambar_homestay','$harga_homestay','$alamat_homestay','$deskripsi_homestay','$slug')");
if(move_uploaded_file($_FILES['gambar_homestay']['tmp_name'], $file)){
header("location:homestay.php?pesan=input");		
	}
?>