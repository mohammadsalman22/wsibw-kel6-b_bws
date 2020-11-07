<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM dosen ORDER BY nip DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script language="javascript" type="text/javascript"> 
  var maxAmount = 18;
  function textCounter(textField, showCountField) {
    if (textField.value.length > maxAmount) {
      textField.value = textField.value.substring(0, maxAmount);
    } else { 
      showCountField.value = maxAmount - textField.value.length;
    }
  }

  function huruf(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32) {
          return false;
      }
      return true;
  }
</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include "./sidebar.php"?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mohammad Salman</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow anipated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
      
      <center>

  <h1>Form Data Dosen</h1>
  <form action="simpand.php" method="POST">
    <table>
      <tr>
        <td>NIP</td>
        <td>:</td>
        <td><input type="text" name="ta" placeholder="nip" onKeyDown="textCounter(this.form.ta,this.form.countDisplay);" onKeyUp="textCounter(this.form.ta,this.form.countDisplay);"></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="nama" onkeypress="return huruf(event)" onkeydown="return namafungsi(event)"></td>
      </tr>
      <tr>
        <td>TANGGAL LAHIR</td>
        <td>:</td>
        <td><input type="date" name="tgl_lahir"></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><select class="custom-select" name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>USERNAME</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
        <td>PASSWORD</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="pass"></td>
      </tr>
    </table>
    <center><input type="submit" name="" value="KIRIM"></center>

    <h3 style="margin-top: 30px;">Tabel Dosen</h3>
    <table width='80%' border=1>

    <tr>
       <th>No</th> <th>NIP</th> <th>Nama</th> <th>Tanggal Lahir</th> <th>Agama</th> <th>Username</th> <th>Password</th>
    </tr>
    <?php  
    $no=1;
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nip']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['tanggal_lahir']."</td>";
        echo "<td>".$user_data['agama']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";            
    }
    ?>
    </table>

  </form>

  <form>
    <div style="margin-top: 30px;">
    <form method="GET">
      <select name="nip">
        <option value=""></option>
          <?php 
            $result = mysqli_query($mysqli,"SELECT * FROM dosen");
            while($user_data = mysqli_fetch_array($result)){
              ?>
                <option value="<?=$user_data['nip']?>"><?=$user_data['nip']." - ".$user_data['nama']?></option>
          <?php
        }
       ?>
      </select>
      <input type="submit" value="Cari">
    </form>
    <?php 
      if (isset($_GET['nip'])) {
        if ($_GET['nip']!="") {
          $result = mysqli_query($mysqli,"SELECT * FROM dosen WHERE nip='".$_GET['nip']."'");
          $user_data = mysqli_fetch_assoc($result);
          ?>
          <form>
          <h3>Data Dosen</h3>
            <input type="text" name="nip" placeholder="nip" disabled value="<?=$user_data['nip']?>"><br>
            <input type="text" name="nama" placeholder="nama" disabled value="<?=$user_data['nama']?>"><br>  
            <input type="date" name="tgl_lahir" placeholder="tgl" disabled value="<?=$user_data['tanggal_lahir']?>"><br>
            <input type="text" name="agama" placeholder="agama" disabled value="<?=$user_data['agama']?>"><br>
            <input type="text" name="username" placeholder="username" disabled value="<?=$user_data['username']?>"><br>
            <input type="text" name="password" placeholder="alamat" disabled value="<?=$user_data['password']?>"><br>
          </form>
          <?php
        }else{
          echo "Oops nip harus di isi";
        }
      }
     ?>
  </div>

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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

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
