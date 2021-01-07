<?php
include 'koneksi.php';
$id_wisata= $_POST['id_wisata'];
$nama_wisata = $_POST['nama_wisata'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($nama_wisata));
$alamat_wisata = $_POST['alamat_wisata'];
$gambar_wisata = $_FILES['gambar_wisata']['name'];
$deskripsi_wisata = $_POST['deskripsi_wisata'];
$harga_wisata = $_POST['harga_wisata'];
$dir = "../assets/images/";
$file = $dir.$gambar_wisata;
if($gambar_wisata != null || $gambar_wisata != ''){
	$insert = mysqli_query($connect,"update tb_wisata set nama_wisata='$nama_wisata', alamat_wisata='$alamat_wisata', gambar_wisata='$gambar_wisata', deskripsi_wisata='$deskripsi_wisata', harga_wisata='$harga_wisata', slug='$slug' where id_wisata='$id_wisata'");
	if(move_uploaded_file($_FILES['gambar_wisata']['tmp_name'], $file)){
	header("location:wisata.php?pesan=update");	
		}
}
else{
	$insert = mysqli_query($connect,"update tb_wisata set nama_wisata='$nama_wisata', alamat_wisata='$alamat_wisata', deskripsi_wisata='$deskripsi_wisata', harga_wisata='$harga_wisata', slug='$slug' where id_wisata='$id_wisata'");
	if($insert){
		header("location:wisata.php?pesan=update");
	}
}
?>