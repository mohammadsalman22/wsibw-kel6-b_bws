<?php
include 'koneksi.php';
$id_gambar = $_POST['id_gambar'];
$gambar = $_FILES['gambar']['name'];
$dir = "../assets/images/";
$file = $dir.$gambar;
if($gambar != null || $gambar != ''){
	$insert = mysqli_query($connect,"update tb_galery set gambar='$gambar' where id_gambar='$id_gambar'");
	if(move_uploaded_file($_FILES['gambar']['tmp_name'], $file)){
	header("location:galery.php?pesan=update");	
		}
}
else{
		header("location:galery.php?pesan=update");
}
?>