<?php
include 'koneksi.php';
$nama_wisata = $_POST['nama_wisata'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($nama_wisata));
$alamat_wisata = $_POST['alamat_wisata'];
$gambar_wisata = $_FILES['gambar_wisata']['name'];
$deskripsi_wisata = $_POST['deskripsi_wisata'];
$harga_wisata = $_POST['harga_wisata'];
$dir = "../assets/images/";
$file = $dir.$gambar_wisata;
$insert = mysqli_query($connect,"insert into tb_wisata values ('','$nama_wisata','$alamat_wisata','$gambar_wisata','$deskripsi_wisata','$harga_wisata','$slug')");
if(move_uploaded_file($_FILES['gambar_wisata']['tmp_name'], $file)){
header("location:wisata.php?pesan=input");		
	}

?>