<?php
session_start();
include"koneksi.php";
if ($_POST['aksi']=="tambah") {
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $tl=$_POST['tl'];
    $agama=$_POST['agama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = mysqli_query($con,"INSERT INTO dbmahasiswa VALUES('".$nim."','".$nama."','".$tl."','".$agama."','".$username."','".$password."')");
    if ($sql) {
        $_SESSION['alert'] = "Berhasil Ditambahkan!";
    }else{
        $_SESSION['alert'] = "Gagal Ditambahkan!";
    }
    header('location:index.php');
}
?>