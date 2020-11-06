<?php
    $login =  [
        [
            'username' => "marsella",
            'password' => "mdf",
            'level' => "1"
        ],
        [
            'username' => "sella",
            'password' => "123",
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: dashboard.php");
                die();
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
?>