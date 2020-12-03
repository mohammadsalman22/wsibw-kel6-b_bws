<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgllahir = $_POST['tgllahir'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$hobi = $_POST['hobi'];

// query SQL untuk insert data
$query="INSERT INTO mahasiswa (nim,nama,tgllahir,jenis_kelamin,prodi,alamat,hobi) values ('$nim','$nama','$tgllahir','$jk','$prodi','$alamat','$hobi')";

// mysqli_query($koneksi, $query);

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data Berhasil di Insert!');
	document.location.href = 'dashboard.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Data Gagal di Insert!');history.go(-1);</script>";
	exit;
}  

?>