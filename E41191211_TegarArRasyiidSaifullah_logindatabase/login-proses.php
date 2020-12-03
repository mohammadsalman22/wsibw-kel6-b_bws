<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$data = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
if ($email == $data['email']) {
    if ($password == $data['password']) {
        header("location:index.php?pesan=berhasil");
    }else{
        header("location:login.php?pesan=passwordsalah");
    }
  }else{
      header("location:login.php?pesan=emailsalah");
  }
  ?>             