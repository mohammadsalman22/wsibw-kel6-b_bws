<?php
include 'koneksi.php';
$id= $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert = mysqli_query($connect,"update user set username='$username', password='$password' where id='$id'");

header("location:user.php?pesan=update");

?>