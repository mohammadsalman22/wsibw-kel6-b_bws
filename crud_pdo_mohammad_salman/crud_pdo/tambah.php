<?php
	require_once('koneksi.php');

	if (!empty($_POST['nama'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tanggal_lahir = $_POST['tanggal_lahir'];

		$data[] = $nama;
		$data[] = $alamat;
		$data[] = $tanggal_lahir;

		$sql = 'INSERT INTO mahasiswa (nama, alamat, tanggal_lahir) VALUES (?, ?, ?)';
		$row = $koneksi->prepare($sql);
		$row->execute($data);

		echo '<script>alert("Berhasil Tambah Data"); window.location="index.php"</script>';
	}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Baru</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<br/>
		<a href="index.php" class="btn btn-primary btn-md"><span class="fa fa-home"></span>Home</a>
		<br/>
		<br/>
		<h3>Tambah Mahasiswa</h3>
		<br/>
		<div class="row">
			<div class="col-lg-6">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" placeholder="Masukkan Nama Anda" value="" class="form-control" name="nama" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" placeholder="Masukkan Alamat Anda" value="" class="form-control" name="alamat" required>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" value="" class="form-control" name="tanggal_lahir" required>
					</div>
					<button class="btn btn-success btn-md" name="tambah"><i class="fa fa-plus"></i>Tambah</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>