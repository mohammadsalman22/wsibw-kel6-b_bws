<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <?php
    if (isset($_SESSION['alert'])){
        echo $_SESSION['alert'];
        session_unset();
        session_destroy();
    }
    ?>
    <form method="POST" action="proses.php">
    <input type="text" name="nim" placeholder="nim" maxlength="9"><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="date" name="tl" placeholder="tl"><br>
    <input type="text" name="agama" placeholder="agama"><br>
    <input type="email" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>


    <input type="hidden" name="aksi" value="tambah">
    <button type="submit">Simpan</button>
    </form>
</body>
</html>