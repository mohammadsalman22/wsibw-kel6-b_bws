<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$insert = mysqli_query($connect,"insert into user values ('','$username','$password')");

header("location:user.php?pesan=input");		

?>