<?php
include 'koneksi.php';
$id_homestay= $_POST['id_homestay'];
$nama_homestay = $_POST['nama_homestay'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($nama_homestay));
$gambar_homestay = $_FILES['gambar_homestay']['name'];
$harga_homestay = $_POST['harga_homestay'];
$alamat_homestay = $_POST['alamat_homestay'];
$deskripsi_homestay = $_POST['deskripsi_homestay'];
$dir = "../assets/images/";
$file = $dir.$gambar_homestay;
if($gambar_homestay != null || $gambar_homestay != ''){
	$insert = mysqli_query($connect,"update tb_homestay set nama_homestay='$nama_homestay', gambar_homestay='$gambar_homestay', harga_homestay='$harga_homestay', alamat_homestay='$alamat_homestay', deskripsi_homestay='$deskripsi_homestay', slug='$slug' where id_homestay='$id_homestay'");
	if(move_uploaded_file($_FILES['gambar_homestay']['tmp_name'], $file)){
	header("location:homestay.php?pesan=update");	
		}
}
else{
	$insert = mysqli_query($connect,"update tb_homestay set nama_homestay='$nama_homestay', harga_homestay='$harga_homestay', alamat_homestay='$alamat_homestay', deskripsi_homestay='$deskripsi_homestay', slug='$slug' where id_homestay='$id_homestay'");
	if($insert){
		header("location:homestay.php?pesan=update");
	}
}
?>