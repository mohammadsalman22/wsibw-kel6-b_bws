<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"delete from user where id='$id'");

header("location:user.php?pesan=hapus");
?>