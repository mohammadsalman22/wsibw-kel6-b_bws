<?php
$con=mysqli_connect("localhost","root","","dbmahasiswa");

//check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connnect_error();
}
?>