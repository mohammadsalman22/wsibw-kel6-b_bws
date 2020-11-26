<?php
     session_start();
     include"koneksi.php";
     if ($_POST['aksi']=="tambah") {
         $nim=$_POST['nim'];
         $nama=$_POST['nama'];
         $alamat=$_POST['alamat'];
         $tgl=$_POST['tgl'];
         $sql = mysqli_query($con,"INSERT INTO mahasiswa VALUES('".$nim."','".$nama."','".$alamat."','".$tgl."')");
         if ($sql) {
            $_SESSION['alert'] = "Berhasil Di Tambah";
         }else{
             $_SESSION['alert'] = "Gagal Di Tambah";
         } 
         header('location:index.php');
     }
?>     