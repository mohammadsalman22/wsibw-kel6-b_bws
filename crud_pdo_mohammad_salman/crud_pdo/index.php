<?php
	require_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP PDO CRUD Mahasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<br/>
				<a href="tambah.php" class="btn btn-success btn-md"><span class="fa fa-plus"></span>Tambah</a>
				<table class="table table-hover table-bordered" style="margin-top: 10px">
					<tr class="success">
						<th width="50px">No.</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
						<th style="text-align: center;">Aksi</th>
					</tr>
						<?php  
							$sql = "SELECT * FROM mahasiswa";
							$row = $koneksi->prepare($sql);
							$row->execute();
							$hasil = $row->fetchAll();
							$a = 1;
							foreach ($hasil as $isi) {
						?>	
					<tr>
						<td><?= $a ?></td>
						<td><?= $isi['nama']; ?></td>
						<td><?= $isi['tanggal_lahir']; ?></td>
						<td><?= $isi['alamat']; ?></td>
						<td style="text-align: center;">
							<a href="edit.php?id=<?= $isi['id'];?>" class="btn btn-warning btn-md">
							<span class="fa fa-edit"></span></a>
							<a onclick="return confirm('Apakah yakin data akan di hapus ?')" href="hapus.php?id=<?= $isi['id'];?>" class="btn btn-danger btn-md">
							<span class="fa fa-trash"></span></a>
						</td>
					</tr>	
						<?php 
							$a++;
							}
						?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>