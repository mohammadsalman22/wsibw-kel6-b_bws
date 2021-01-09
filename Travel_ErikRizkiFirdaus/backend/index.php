<?php 
session_start(); 
if(!isset($_SESSION["username"])){
  header("location:login.php");
}
?>
<?php include 'template/head.php'; ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'template/sidebar.php'; ?>
    <!-- End of Sidebar -->
    <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Wisata -->
      <li class="nav-item">
        <a class="nav-link" href="wisata.php">
          <i class="fa fa-map-marker"></i>
          <span>Wisata</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="travel.php">
          <i class="fa fa-bus"></i>
          <span>Travel</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="homestay.php">
          <i class="fa fa-bed"></i>
          <span>Homestay</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="galery.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Galery</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="homepage.php">
          <i class="fa fa-home"></i>
          <span>Homepage</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="user.php">
          <i class="fa fa-users"></i>
          <span>User</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'template/topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Wisata</div>
                      <?php
                        include "koneksi.php";
                        $data_wisata = mysqli_query($connect,"select * from tb_wisata");
                        $jumlah_data_wisata = mysqli_num_rows($data_wisata);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_data_wisata?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-map-marker fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Travel</div>
                      <?php
                        include "koneksi.php";
                        $data_travel = mysqli_query($connect,"select * from tb_travel");
                        $jumlah_data_travel = mysqli_num_rows($data_travel);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_data_travel?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-bus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Homestay</div>
                      <?php
                        include "koneksi.php";
                        $data_homestay = mysqli_query($connect,"select * from tb_homestay");
                        $jumlah_data_homestay = mysqli_num_rows($data_homestay);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_data_homestay?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-bed fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Galery</div>
                      <?php
                        include "koneksi.php";
                        $data_galery = mysqli_query($connect,"select * from tb_galery");
                        $jumlah_data_galery = mysqli_num_rows($data_galery);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_data_galery?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-chart-area fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Data User</div>
                      <?php
                        include "koneksi.php";
                        $data_user = mysqli_query($connect,"select * from user");
                        $jumlah_data_user = mysqli_num_rows($data_user);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_data_user?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Data Pengunjung</div>
                      <?php
                        include "koneksi.php";
                        $data_user = mysqli_query($connect,"select * from visitor");
                        $jumlah_data_user = mysqli_num_rows($data_user);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_data_user?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-eye fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include 'template/logout_modal.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
