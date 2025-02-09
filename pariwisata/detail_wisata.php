<?php 
    include './backend/koneksi.php';
    $url = explode('/', $_SERVER["PHP_SELF"]);
    $data_wisata = mysqli_query($connect, "SELECT * FROM tb_wisata WHERE slug = '$url[3]'");
    while ($item_wisata = mysqli_fetch_array($data_wisata)) {
            
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <?php include 'template/head.php'; ?>
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <?php include 'template/nav.php'; ?>
  </div>
</header>
<!--/header-->
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/pariwisata/index.php">Home</a></li>
            <li><a href="/pariwisata/wisata.php"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Wisata</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> <?= $item_wisata['nama_wisata']; ?></li>
        </ul>
    </div>
</section>
<!-- home page about section -->
<section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row mb-4">
                <div class="col col-lg-2"></div>
                <div class="col col-lg-8">
                    <img src="/pariwisata/assets/images/<?php echo $item_wisata['gambar_wisata']; ?>" class="radius-image img-fluid w-100 h-100">
                </div>
                <div class="col col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-lg-0 mt-md-5 mt-4 align-self">
                    <h3 class="title-big mx-0"><?= $item_wisata['nama_wisata']; ?></h3>
                    <p class="mt-md-4 mt-3 text-justify"><?= $item_wisata['deskripsi_wisata']; ?></p><br>
                    <p class="mb-3"></span> <h5 class="title-big mx-0">Harga : Rp.<?php echo number_format($item_wisata['harga_wisata'],2) ; ?></h5></p><br>
                    
                    <div class="row">
                        <div class="col">
                            <?= $item_wisata['alamat_wisata']; ?>    
                        </div>
                        <div class="col">
                            <p class="mt-3">
                                <span class="fa fa-map-marker"></span>&nbsp <?= $item_wisata['nama_wisata']; ?>
                            </p>
                         </div>
                    </div>
                    
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- footer -->
  <?php include 'template/footer.php'; ?>
</body>

</html>
        <?php } ?>