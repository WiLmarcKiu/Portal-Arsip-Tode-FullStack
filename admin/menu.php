<?php 
session_start();
include '../koneksi.php';
 ?>

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="100" width="100">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Admin</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="instansi.php" class="nav-link">Instansi</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | TodeKisar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="logo.png" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><b>Welcome ! <?php echo $_SESSION['username'];?></b></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Kependudukan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php 
                  $data_penduduk = mysqli_query($koneksi, "SELECT * FROM penduduk");
                  $jumlah_penduduk = mysqli_num_rows($data_penduduk);
                 ?>
                <a href="penduduk.php" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Penduduk&nbsp;<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo "$jumlah_penduduk"; ?></span></p>
                  
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="keluarga.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Keluarga</p>
                </a>
              </li> -->
            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Data Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_sk_belum_menikah.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Belum Menikah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_domisili.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_kelahiran.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_kelakuan_baik.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Kelakuan Baik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_kematian.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Kematian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_pindah.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Pindah Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_tidak_mampu.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Tidak Mampu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_sk_usaha.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>SK Usaha</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Data Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_kegiatan.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>Data Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_berita.php" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>Data Berita</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
       
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>