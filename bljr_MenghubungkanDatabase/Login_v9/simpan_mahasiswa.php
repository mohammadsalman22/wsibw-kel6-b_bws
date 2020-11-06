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
$pesan = $_POST['pesan'];

// query SQL untuk insert data
$query="INSERT INTO mahasiswa (nim,nama,tgllahir,jenis_kelamin,prodi,alamat,hobi,pesan) values ('$nim','$nama','$tgllahir','$jk','$prodi','$alamat','$hobi','$pesan')";

// mysqli_query($koneksi, $query);

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  
?>