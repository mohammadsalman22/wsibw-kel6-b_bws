<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

// query SQL untuk insert data
$query="INSERT INTO dosen (nik,nama,jenis_kelamin,jabatan,alamat,visi,misi) values ('$nik','$nama','$jk','$jabatan','$alamat','$visi','$misi')";

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