<?php
include 'koneksi.php';
$id_gambar = $_GET['id'];
mysqli_query($connect,"delete from tb_galery where id_gambar='$id_gambar'");

header("location:galery.php?pesan=hapus");
?>