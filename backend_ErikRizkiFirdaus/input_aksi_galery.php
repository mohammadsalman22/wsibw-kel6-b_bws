<?php
include 'koneksi.php';
$gambar = $_FILES['gambar']['name'];
$dir = "../assets/images/";
$file = $dir.$gambar;
$insert = mysqli_query($connect,"insert into tb_galery values ('','$gambar')");
if(move_uploaded_file($_FILES['gambar']['tmp_name'], $file)){
header("location:galery.php?pesan=input");		
	}
?>