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
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
          <?php
            $query_mysql = mysqli_query($connect,"SELECT * FROM tb_wisata ORDER BY RAND() LIMIT 3");
            while ($data = mysqli_fetch_array($query_mysql)) {
            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($data['nama_wisata']));
          ?>
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5><?= $data['nama_wisata']; ?></h5>
                                        <p class="mt-md-4 mt-3"><?php
                                          if (strlen($data['deskripsi_wisata'])<100) {
                                            echo $data['deskripsi_wisata'];
                                          } else {
                                            echo substr($data['deskripsi_wisata'],0,100).'...';
                                          }
                                          ?>
                                        </p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="detail_wisata.php/<?= $slug?>"> Tinjau</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img style="height:215px; width: 400px;" src="./assets/images/<?php echo $data['gambar_wisata']; ?>" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
          <?php } ?>
        </div>
    </div>
</section>
<!-- /main-slider -->
<!-- home page block1 -->
<section id="about" class="home-services pt-lg-0">
    <div class="container">
        <div class="row">
          <?php
            $query_mysql = mysqli_query($connect,"SELECT * FROM tb_travel ORDER BY RAND() LIMIT 3");
            while ($data = mysqli_fetch_array($query_mysql)) {
            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($data['nama_travel']));
          ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                             <img src="/pariwisata/assets/images/<?= $data['gambar_travel']; ?>" style="height:35px;" />
                        </div>
                        <div class="info">
                            <h5><?= $data['nama_travel']; ?></h5>
                        </div>
                    </div>
                    <p class="mt-4">
                      <?php
                        if (strlen($data['deskripsi_travel'])<100) {
                          echo $data['deskripsi_travel'];
                        } else {
                          echo substr($data['deskripsi_travel'],0,100).'...';
                        }
                      ?>  
                    </p>
                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="detail_travel.php/<?= $slug?>"> Tinjau</a>
                </div>
            </div>
          <?php } ?>
        </div>
    </div>
</section>
<!-- //home page block1 -->
<div class="w3l-ordercard py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <h3 class="title-big mb-5 text-center">Homestay</h3>
        <div class="row text-center">
          <?php
            $query_mysql = mysqli_query($connect,"SELECT * FROM tb_homestay ORDER BY RAND() LIMIT 3");
            while ($data = mysqli_fetch_array($query_mysql)) {
            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($data['nama_homestay']));
          ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-grids">
                    <div class="icon">
                        <img src="/pariwisata/assets/images/<?= $data['gambar_homestay']; ?>" style="height:35px;" />
                    </div>
                    <div class="content">
                        <h4 class="title"><?= $data['nama_homestay']; ?></h4>
                        <p class="desc">
                          <?php
                            if (strlen($data['deskripsi_homestay'])<100) {
                              echo $data['deskripsi_homestay'];
                            } else {
                              echo substr($data['deskripsi_homestay'],0,100).'...';
                            }
                          ?>  
                        </p>
                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="detail_homestay.php/<?= $slug?>"> Tinjau</a>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
    </div>
</div>
<!--  News section -->
<div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center">Galery</h3>
            <div class="row mt-lg-5 mt-4">
              <?php
                $query_mysql = mysqli_query($connect,"SELECT * FROM tb_galery ORDER BY RAND() LIMIT 3");
                while ($data = mysqli_fetch_array($query_mysql)) {
              ?>
                <div class="col-lg-4 col-md-6">
                    <div class="grids5-info">
                        <div class="value-img">
                          <img style="height:220px; width: 380px;" id="img-default" src="/pariwisata/assets/images/<?= $data['gambar']; ?>" data-action="zoom" data-original="/pariwisata/assets/images/<?= $data['gambar']; ?>"
                            alt="journey_start_thumbnail" />
                        </div>
                    </div>
                </div>
              <?php } ?>
             </div>
        </div>
    </section>
</div>
 <?php include 'template/footer.php'; ?>
 <script>
  new Zooming().listen('img')
</script>
</body>

</html>