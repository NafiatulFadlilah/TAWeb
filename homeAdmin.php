<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>THREE GALLERY - ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
      

      <?php
        if(isset($_SESSION["username"])){
          $nama = $_SESSION["username"];
        }else{
          header("Location:signIn.php");
        }
      ?>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          </i><h3 style="color: #A760FF"><i class="mdi mdi-palette"></i>THREE GALLERY</h3>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <?php include "connection.php";
                      $query = "SELECT gambar FROM user where username = '$nama'";
                      $result = mysqli_query($connect, $query);
                  ?>
                  <?php while ($row = $result->fetch_assoc()) echo "<img src='img/$row[gambar]'/>" ?>
                </div>
                <div class="nav-profile-text">
                  <?php include "connection.php";
                      $query = "SELECT nama_user FROM user where username = '$nama'";
                      $result = mysqli_query($connect, $query);
                  ?>
                  <p class="mb-1 text-black"><?php while ($row = $result->fetch_assoc()) echo $row['nama_user'] ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logout.php" onclick="return confirm('Are you sure to log out?')">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="homeAdmin.php">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksiAdmin.php">
                <span class="menu-title">Transaksi</span>
                <i class="mdi mdi-clipboard-text menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eventAdmin.php">
                <span class="menu-title">Event</span>
                <i class="mdi mdi-presentation menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="karyaAdmin.php">
                <span class="menu-title">Karya</span>
                <i class="mdi mdi-palette-advanced menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure to log out?')">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>
            </ul>
        </nav>
        <!-- partial -->
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <?php include "connection.php";
                          $query = "SELECT nama_user FROM user where username = '$nama'";
                          $result = mysqli_query($connect, $query);
                      ?>
                      <h3>Selamat datang <?php while ($row = $result->fetch_assoc()) echo $row['nama_user'] ?>!</h3>
                    <div class="row mt-3">
                      <div class="col-30 pe-1">
                        <img src="img/gal.png" class="mb-2 mw-100 w-100 rounded" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright &copy; <strong>Three Gallery </strong> 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js1/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js1/off-canvas.js"></script>
    <script src="assets/js1/hoverable-collapse.js"></script>
    <script src="assets/js1/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js1/dashboard.js"></script>
    <script src="assets/js1/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>