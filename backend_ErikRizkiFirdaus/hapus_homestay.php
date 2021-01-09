<?php
include 'koneksi.php';
$id_homestay = $_GET['id'];
mysqli_query($connect,"delete from tb_homestay where id_homestay='$id_homestay'");

header("location:homestay.php?pesan=hapus");
?>