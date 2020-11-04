<?php
session_start();
 /*daftar disini*/
 $akun = [
  'admin'=>[
   'nama'=>'mohammad',
   'sandi'=>'abc',
   'login'=>'admin',
   ],
  'user'=>[
   'nama'=>'salman',
   'sandi'=>'cba',
   'login'=>'user',
   ]
  ];
 
  /*jikalau tombol login di klik*/
  if (isset($_POST['login'])) {
   $nama = $_POST['user'];
   $sandi = $_POST['pass'];
 
   $user = 0;
   $pass = 0;
   foreach ($akun as $key => $value) {
    if ($nama==$value['nama']) {
      echo $nama;
      echo $sandi;
      $level = $value['login'];
     $user = 1;
    }
 
    if ($sandi==$value['sandi']) {
     $pass = 1;
    }
   }
 
   /*Proses cek input / validasi*/
   if (empty($nama) || empty($sandi)) {
     $_SESSION['user_input'] = $nama;
     $_SESSION['pass_input'] = $sandi;
     $msg = "nama atau sandi kosong ";
     $_SESSION['alert'] = "<div class='alert'>".$msg."</div>";     
     // header('location: index.php');
   }else{
 
    if (!$user==1) {
     $msg = "nama tak Terdaftar ";
     $_SESSION['alert_user'] = "<div class='alert'>".$msg."</div>";
     header('location: index.php');
    }
     
    if (!$pass==1) {
     $msg = "sandi tak Terdaftar ";
     $_SESSION['alert_pass'] = "<div class='alert'>".$msg."</div>";
     header('location: index.php');
    }
 
    if ($user==1 && $pass==1) {
      $_SESSION['nama'] = $nama;
      $_SESSION['sandi'] = $sandi;
      $_SESSION['login'] = $level;
 
     header('location: home.php');
    }
   }
 
  
  }
    
?>