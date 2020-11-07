<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_kampus";

$connect = mysqli_connect($host, $user, $pass, $db);
$select = mysql_select_db($db, $connect);

if ($select) {
	echo '';
} else {
	echo 'Gagal Koneksi ke Database';
}

?>