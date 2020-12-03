<?php
    session_start();
    include 'koneksi.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $querySql = mysqli_query($koneksi,"SELECT * FROM tb_user Where email='$email'");
    $data = mysqli_fetch_array($querySql);
    if ($email == $data['email']) {
        if($password == $data['password']){
            header("Location: dashboard.php");
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
    ?>