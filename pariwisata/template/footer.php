<!-- footer -->
<?php 
  $query_mysql = mysqli_query($connect,"select * from tb_homepage");
  while ($data = mysqli_fetch_array($query_mysql)) {
?>
 <section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pr-lg-5">
          <div class="footer-logo mb-4">
            <a class="navbar-brand" href="/pariwisata/index.html">
              <img src="/pariwisata/assets/images/<?= $data['logo_aplikasi']; ?>" style="height:100px;" />
              <a class="navbar-brand" href="/pariwisata/index.php">
                <?= $data['nama_aplikasi']; ?>
                
            </a>
          </div>
          <p><?= $data['deskripsi_homepage']; ?></p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-5 col-5 footer-list-29 footer-2 mt-md-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Tautan Cepat</h6>
            <li><a href="/pariwisata/wisata.php">Wisata</a></li>
            <li><a href="/pariwisata/travel.php">Travel</a></li>
            <li><a href="/pariwisata/homestay.php">Homestay</a></li>
            <li><a href="/pariwisata/galery.php">Galery</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-7 col-7 footer-list-29 footer-3 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Pusat</h6>
          <p class="mb-2"><span class="fa fa-phone"></span> <a href="tel:<?= $data['kontak_homepage']; ?>"><?= $data['kontak_homepage']; ?></a></p><br>
          <?= $data['alamat_homepage']; ?>
          
        </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">© 2020 Bank Cards. All rights reserved.</p>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
</section>
<!-- //footer -->

<!--  javascripts file here -->
<script src="/pariwisata/assets/js/jquery-3.3.1.min.js"></script>

<script src="/pariwisata/assets/js/theme-change.js"></script> <!-- //light and dark mode switch js -->

<script src="/pariwisata/assets/js/circles.js"></script>

<!-- stats number counter-->
<script src="/pariwisata/assets/js/jquery.waypoints.min.js"></script>
<script src="/pariwisata/assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owl carousel -->
<script src="/pariwisata/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo2").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="/pariwisata/assets/js/zooming.min.js"></script>

<script src="/pariwisata/assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->