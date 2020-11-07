<?php 
	session_start();
	include"proses.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Arial';
		}
		form{
			width: 50%;
			margin:10px auto;
		}
		form > input , select{
			width: 100%;
			display: block;
			margin:5px 0;
			padding:10px;
		}
	</style>
</head>
<body>
	<?php 
		if (isset($_SESSION['alert'])) {
			echo $_SESSION['alert'];
			session_unset();
			session_destroy();
		}
	 ?>
	<form method="POST" action="proses.php">
		<input type="text" name="nim" placeholder="nim">
		<input type="text" name="nama" placeholder="nama">
		<input type="text" name="alamat" placeholder="alamat">
		<input type="date" name="tgl" placeholder="tgl">

		<input type="hidden" name="aksi" value="tambah">
		<input type="submit" value="Simpan">
	</form>
	<table style="margin:10px auto; width: 50%; text-align: center;">
		<thead>
			<tr>
				<th>No</th><th>NIM</th><th>Nama</th><th>Alamat</th><th>Tanggal Lahir</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no = 1;
				$sql = mysqli_query($con,"SELECT * FROM mahasiswa");
				while($data = mysqli_fetch_array($sql)){
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$data['nim']?></td>
						<td><?=$data['nama']?></td>
						<td><?=$data['alamat']?></td>
						<td><?=$data['tgllahir']?></td>
					</tr>
					<?php
				}
			 ?>
		</tbody>
	</table>
	<div style="margin-top: 20px;">
		<form method="GET">
			<select name="nim">
				<option value="">--||--</option>
			<?php 
				$sql = mysqli_query($con,"SELECT * FROM mahasiswa");
				while($data = mysqli_fetch_array($sql)){
					?>
						<option value="<?=$data['nim']?>" <?=($data['nim']==$_GET['nim'])?'selected':'';?>><?=$data['nim']." - ".$data['nama']?></option>
					<?php
				}
			 ?>
			</select>
			<input type="submit" value="Cari">
		</form>
		<?php 
			if (isset($_GET['nim'])) {
				if ($_GET['nim']!="") {
					$mysqli = mysqli_query($con,"SELECT * FROM mahasiswa WHERE nim='".$_GET['nim']."'");
					$data = mysqli_fetch_assoc($mysqli);
					?>
					<form>
					<h3>Data Mahasiswa</h3>
						<input type="text" name="nim" placeholder="nim" value="<?=$data['nim']?>">
						<input type="text" name="nama" placeholder="nama" value="<?=$data['nama']?>">
						<input type="text" name="alamat" placeholder="alamat" value="<?=$data['alamat']?>">
						<input type="date" name="tgl" placeholder="tgl" value="<?=$data['tgllahir']?>">
					</form>
					<?php
				}else{
					echo "Oops Nim harus di isi";
				}
			}
		 ?>
	</div>
</body>
</html>