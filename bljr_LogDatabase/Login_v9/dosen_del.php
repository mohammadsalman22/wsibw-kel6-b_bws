<?php
include 'koneksi.php';

// menyimpan data id kedalam variabel
$nik   = $_GET['nik'];

// query SQL untuk insert data
$query="DELETE from dosen where nik='$nik'";
$hasil=mysqli_query($koneksi, $query);


//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data berhasil dihapus!');
	document.location.href = 'dashboard.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Gagal menghapus data!');history.go(-1);</script>";
	exit;
}  
?>