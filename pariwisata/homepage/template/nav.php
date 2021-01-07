<?php 
  $query_mysql = mysqli_query($connect,"select * from tb_homepage");
  while ($data = mysqli_fetch_array($query_mysql)) {
?>
<nav class="navbar navbar-expand-lg stroke px-0">
  <a class="navbar-brand" href="/pariwisata/index.php">
      <img src="/pariwisata/assets/images/<?= $data['logo_aplikasi']; ?>" style="height:100px;" />
  </a>
          <h1> <a class="navbar-brand" href="/pariwisata/index.php">
                  <span></span><?= $data['nama_aplikasi']; ?>
              </a></h1>
  
  <?php } ?>
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <?php $url = substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/"));?>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item <?php echo($url === '/index.php')? "active":""; ?>">
                      <a class="nav-link" href="/pariwisata/index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item <?php echo($url === '/wisata.php')? "active":""; ?>">
                      <a class="nav-link" href="/pariwisata/wisata.php">Wisata</a>
                  </li>
                  <li class="nav-item <?php echo($url === '/travel.php')? "active":""; ?>">
                      <a class="nav-link" href="/pariwisata/travel.php">Travel</a>
                  </li>
                  <li class="nav-item <?php echo($url === '/homestay.php')? "active":""; ?>">
                      <a class="nav-link" href="/pariwisata/homestay.php">Homestay</a>
                  </li>
                  <li class="nav-item <?php echo($url === '/galery.php')? "active":""; ?>">
                      <a class="nav-link" href="/pariwisata/galery.php">Galery</a>
                  </li>
                  <!--/search-right-->
                  <div class="search mr-3">
                      <input class="search_box" type="checkbox" id="search_box">
                      <label class="fa fa-search" for="search_box"></label>
                      <div class="search_form">
                          <form action="result.php" method="GET">
                              <input name="s" type="text" placeholder="Cari Wisata"><input type="submit" value="search">
                          </form>
                      </div>
                  </div>
                  <!--//search-right-->
              </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>