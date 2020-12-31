<?php
	require_once('koneksi.php');

	if (!empty($_POST['nama'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$id = $_POST['id'];

		$data[] = $nama;
		$data[] = $alamat;
		$data[] = $tanggal_lahir;
		$data[] = $id;

		$sql = 'UPDATE mahasiswa SET nama=?, alamat=?, tanggal_lahir=? WHERE id=?';
		$row = $koneksi->prepare($sql);
		$row->execute($data);

		echo '<script>alert("Berhasil Edit Data"); window.location="index.php"</script>';
	}

	$id = $_GET['id'];
	$sql = "SELECT * FROM mahasiswa WHERE id= ?";
	$row = $koneksi->prepare($sql);
	$row->execute(array($id));
	$hasil = $row->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data - <?= $hasil['nama'];?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<br/>
		<a href="index.php" class="btn btn-primary btn-md"><span class="fa fa-home"></span>Home</a>
		<br/>
		<br/>
		<h3>Edit Mahasiswa - <?= $hasil['nama'];?></h3>
		<br/>
		<div class="row">
			<div class="col-lg-6">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" placeholder="Masukkan Nama Anda" value="<?= $hasil['nama'];?>" class="form-control" name="nama" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" placeholder="Masukkan Alamat Anda" value="<?= $hasil['alamat'];?>" class="form-control" name="alamat" required>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" value="<?= $hasil['tanggal_lahir'];?>" class="form-control" name="tanggal_lahir" required>
					</div>
					<input type="hidden" value="<?= $hasil['id'];?>" name="id">
					<button class="btn btn-warning btn-md" name="edit"><i class="fa fa-edit"></i>Update</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>