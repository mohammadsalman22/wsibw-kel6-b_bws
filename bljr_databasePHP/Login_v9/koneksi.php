<?php

$host="localhost";
$user="root";
$password="";
$db="bljrlogin";

$koneksi = mysqli_connect($host,$user,$password);
if ($koneksi){
	echo "Database <b>berhasil</b> dikoneksikan<br>";
}else {
	echo"Database <b>gagal</b> dikoneksikan<br>";
}

$hasil=mysqli_select_db($koneksi,$db);
if ($hasil){
	echo "Database $db berhasil dipilih";
}else {
	echo "Database $db gagal dipilih";
}


?>