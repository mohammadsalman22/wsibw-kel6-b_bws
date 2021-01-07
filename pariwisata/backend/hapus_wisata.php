<?php
include 'koneksi.php';
$id_wisata = $_GET['id'];
mysqli_query($connect,"delete from tb_wisata where id_wisata='$id_wisata'");

header("location:wisata.php?pesan=hapus");
?>