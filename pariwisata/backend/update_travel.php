<?php
include 'koneksi.php';
$id_travel= $_POST['id_travel'];
$nama_travel = $_POST['nama_travel'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($nama_travel));
$gambar_travel = $_FILES['gambar_travel']['name'];
$alamat_travel = $_POST['alamat_travel'];
$deskripsi_travel = $_POST['deskripsi_travel'];
$harga_travel = $_POST['harga_travel'];
$dir = "../assets/images/";
$file = $dir.$gambar_travel;
if($gambar_travel != null || $gambar_travel != ''){
	$insert = mysqli_query($connect,"update tb_travel set nama_travel='$nama_travel', gambar_travel='$gambar_travel', alamat_travel='$alamat_travel', deskripsi_travel='$deskripsi_travel', harga_travel='$harga_travel', slug='$slug' where id_travel='$id_travel'");
	if(move_uploaded_file($_FILES['gambar_travel']['tmp_name'], $file)){
	header("location:travel.php?pesan=update");	
		}
}
else{
	$insert = mysqli_query($connect,"update tb_travel set nama_travel='$nama_travel', alamat_travel='$alamat_travel', deskripsi_travel='$deskripsi_travel', harga_travel='$harga_travel', slug='$slug' where id_travel='$id_travel'");
	if($insert){
		header("location:travel.php?pesan=update");
	}
}
?>