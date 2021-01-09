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
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Galery</li>
        </ul>
    </div>
</section>
<!-- home page about section -->
<div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center">Galery</h3>
            <div class="row mt-lg-5 mt-4">
              <?php
                $query_mysql = mysqli_query($connect,"SELECT * FROM tb_galery");
                while ($data = mysqli_fetch_array($query_mysql)) {
              ?>
                <div class="col-lg-4 col-md-6">
                    <div class="grids5-info">
                        <div class="value-img">
                          <img style="height:220px; width: 380px;" id="img-default" src="/pariwisata/assets/images/<?= $data['gambar']; ?>" data-action="zoom" data-original="/pariwisata/assets/images/<?= $data['gambar']; ?>"
                            alt="journey_start_thumbnail" />
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
 <script>
  new Zooming().listen('img')
</script>
</body>

</html>