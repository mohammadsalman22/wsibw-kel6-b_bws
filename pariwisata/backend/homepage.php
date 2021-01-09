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

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
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
      <li class="nav-item active">
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
    <!-- End of Sidebar -->

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
            <h1 class="h3 mb-0 text-gray-800">Homepage</h1>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Master Homepage</h6>
                </div>
                <div class="card-body">
                  <?php
                    if (isset($_GET['pesan'])) {
                      $pesan = $_GET['pesan'];
                      if ($pesan == "input") {?>
                        <div class="alert alert-success" role="alert">
                          Data berhasil di input
                        </div>
                        <?php
                      } elseif ($pesan == "update") {?>
                        <div class="alert alert-warning" role="alert">
                          Data berhasil di update
                        </div>
                        <?php
                      } 
                    }
                  ?>
                <?php
                  include "koneksi.php";
                  $query_mysql = mysqli_query($connect,"SELECT * FROM `tb_homepage` ORDER BY id_homepage ASC LIMIT 1 ");
                  $nomor = 1;
                  while ($data = mysqli_fetch_array($query_mysql)) {
                  ?>
                  <form action="update_homepage.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_aplikasi">Nama Aplikasi</label>
                        <input type="hidden" name="id_homepage" value="<?php echo $data['id_homepage'] ?>">
                        <input required type="text" class="form-control" id="nama_aplikasi" value="<?php echo $data['nama_aplikasi'] ?>" name="nama_aplikasi">
                      </div>
                      <div class="form-group">
                        <label for="logo_aplikasi">Logo Aplikasi</label>
                        <input type="file" class="form-control-file" id="logo_aplikasi" name="logo_aplikasi" value="<?php echo $data['logo_aplikasi'] ?>"><br>
                        <img width="100px" height="100px" src="../assets/images/<?php echo $data['logo_aplikasi']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="deskripsi_homepage">Deskripsi Homepage</label>
                        <textarea required type="text" class="form-control" id="deskripsi_homepage" name="deskripsi_homepage"><?php echo $data['deskripsi_homepage'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="alamat_homepage">Alamat Homepage</label>
                        <textarea required type="text" class="form-control" id="alamat_homepage" name="alamat_homepage"><?php echo $data['alamat_homepage'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="kontak_homepage">Kontak Homepage</label>
                        <input required type="text" class="form-control" id="kontak_homepage" name="kontak_homepage" value="<?php echo $data['kontak_homepage'] ?>">
                      </div>
                     <input type="submit" value="simpan" class="btn btn-primary"></td>
                  </form>
                  <?php } ?>
  
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
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
