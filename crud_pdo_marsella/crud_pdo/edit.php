<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['kd_siswa'])){
    $kd_siswa = $_GET['kd_siswa']; 
    $data_siswa = $lib->get_by_id($kd_siswa);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $kd_siswa = $_POST['kd_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $tgllhr = $_POST['tgllhr'];
    $alamat = $_POST['alamat']; 
    $status_update = $lib->update($kd_siswa,$nama_siswa,$tgllhr,$alamat);
    if($status_update)
    {
        header('Location:index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Siswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="kd_siswa" value="<?php echo $data_siswa['kd_siswa']; ?>"/>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" value="<?php echo $data_siswa['nama_siswa']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgllhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_siswa['tgllhr']; ?>" name="tgllhr" class="form-control" id="tgllhr">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_siswa['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>