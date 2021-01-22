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
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Travel</li>
        </ul>
    </div>
</section>
<!-- home page about section -->
<div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center">Travel</h3>
            <div class="row mt-lg-5 mt-4">
              <?php
                $query_mysql = mysqli_query($connect,"SELECT * FROM tb_travel");
                while ($data = mysqli_fetch_array($query_mysql)) {
                $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($data['nama_travel']));
              ?>
                <div class="col-lg-4 col-md-6">
                    <div class="grids5-info">
                        <a href="detail_travel.php/<?= $slug?>" class="d-block zoom"><img style="height:215px; width: 400px;" src="./assets/images/<?php echo $data['gambar_travel']; ?>" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <h4><a href="detail_travel.php/<?= $slug?>"><?= $data['nama_travel']; ?></a></h4>
                            <p class="mb-3"><span class="fa fa-money"></span> Rp.<?php echo number_format($data['harga_travel'],2) ; ?></p>
                            <p>
                              <?php
                                if (strlen($data['deskripsi_travel'])<100) {
                                  echo $data['deskripsi_travel'];
                                } else {
                                  echo substr($data['deskripsi_travel'],0,100).'...';
                                }
                              ?>            
                            </p>
                        </div>
                    </div><br>
                </div>
              <?php } ?>
            </div>
        </div>
    </section>
</div>
<!-- //testimonials -->
 <!-- footer -->
 <?php include 'template/footer.php'; ?>
</body>

</html>