<?php
	include './config.php';

	$nip = $_POST['ta'];
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl_lahir'];
	$agama = $_POST['agama'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$i = mysqli_query($mysqli, "insert into dosen values('$nip','$nama','$tgl','$agama','$username','$password')");
	if ($i) {
		echo '<script type="text/javascript">
				alert("DATA BERHASIL DI TAMBAH");
				</script>'; 
		header("location:dosen.php");
	} else {
		echo '<script type="text/javascript">
				alert("DATA GAGAL DI TAMBAH");
				</script>';
	}
?>