<?php
    $login =  [
        [
            'username' => "tegarar",
            'password' => "tegar",
            'level' => "1"
        ],
        [
            'username' => "polije",
            'password' => "432",
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                echo "Username :".$_POST['user']."<br>";
                echo "Password :".$_POST['pass']. "<br>2";
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: dashboard.php");
                die();
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
?>