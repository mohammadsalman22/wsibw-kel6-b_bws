<?php
include 'koneksi.php';
$id_homepage= $_POST['id_homepage'];
$nama_aplikasi = $_POST['nama_aplikasi'];
$logo_aplikasi = $_FILES['logo_aplikasi']['name'];
$deskripsi_homepage = $_POST['deskripsi_homepage'];
$alamat_homepage = $_POST['alamat_homepage'];
$kontak_homepage = $_POST['kontak_homepage'];
$dir = "../assets/images/";
$file = $dir.$logo_aplikasi;
if($logo_aplikasi != null || $logo_aplikasi != ''){
	$insert = mysqli_query($connect,"update tb_homepage set nama_aplikasi='$nama_aplikasi', logo_aplikasi='$logo_aplikasi', deskripsi_homepage='$deskripsi_homepage', alamat_homepage='$alamat_homepage', kontak_homepage='$kontak_homepage' where id_homepage='$id_homepage'");
	if(move_uploaded_file($_FILES['logo_aplikasi']['tmp_name'], $file)){
	header("location:homepage.php?pesan=update");	
	}
	else
		header("location:homepage.php?pesan=gagal");
}
else{
	$insert = mysqli_query($connect,"update tb_homepage set nama_aplikasi='$nama_aplikasi', deskripsi_homepage='$deskripsi_homepage', alamat_homepage='$alamat_homepage', kontak_homepage='$kontak_homepage' where id_homepage='$id_homepage'");
	if($insert){
		header("location:homepage.php?pesan=update");
	}
	else
		header("location:homepage.php?pesan=gagal");
}
?>