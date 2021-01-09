<?php
include 'koneksi.php';
$id_travel = $_GET['id'];
mysqli_query($connect,"delete from tb_travel where id_travel='$id_travel'");

header("location:travel.php?pesan=hapus");
?>