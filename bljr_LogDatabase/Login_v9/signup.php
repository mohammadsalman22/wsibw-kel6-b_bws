<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

// query SQL untuk insert data
$query="INSERT INTO tb_user (nama,email,password) values ('$nama','$email','$password')";

// mysqli_query($koneksi, $query);

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data Berhasil di Insert!');
	document.location.href = 'index.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Data Gagal di Insert!');history.go(-1);</script>";
	exit;
}  
?>