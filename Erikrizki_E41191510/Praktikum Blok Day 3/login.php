<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <!-- <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
        <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?> -->


    </div>
    <?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        echo "Anda Berhasil Login $username";
        // header("Location: admin.php"); 
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p><h2>Username Atau Password Tidak Benar</h2></p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
        <div class="outter-form-login">
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Form Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                
                <input type="submit" name="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <div class="text-center forget">
                    <p>Lupa Sandi?</p>
                </div>
            </form>
        </div>
<?php } ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php

