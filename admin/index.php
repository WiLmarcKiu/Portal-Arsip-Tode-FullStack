<?php 

include 'menu.php';
include '../koneksi.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Tode Kisar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 <?php 
  if ($_SESSION['status']!= "login") {
    echo "<script>alert('Anda belum login!');</script>";
    echo "<script>location='../index.php';</script>";
  }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12 small-box bg-dark pt-3">
            <?php 
                  $ambil= $koneksi->query("SELECT * FROM instansi");
                  $pecah = $ambil->fetch_assoc();
            ?>
            <center><img src="logo.png" width="100" height="90"></center>
            <h5 class="text-center"><?php echo $pecah ['nama_instansi']; ?></h5>
            <p class="text-center"><?php echo $pecah ['alamat']; ?></p>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  $data_sk_usaha = mysqli_query($koneksi, "SELECT * FROM sk_usaha");
                  $jumlah_sk_usaha = mysqli_num_rows($data_sk_usaha);
                 ?>
                <h3><?php echo "$jumlah_sk_usaha"; ?></h3>

                <p>SK Usaha</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="penduduk.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $data_sk_belum_menikah = mysqli_query($koneksi, "SELECT * FROM sk_belum_menikah");
                  $jumlah_sk_belum_menikah = mysqli_num_rows($data_sk_belum_menikah);
                 ?>
                <h3><?php echo "$jumlah_sk_belum_menikah"; ?></h3>

                <p>SK Belum Menikah</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_belum_menikah.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  $data_sk_domisili = mysqli_query($koneksi, "SELECT * FROM sk_domisili");
                  $jumlah_sk_domisili = mysqli_num_rows($data_sk_domisili);
                 ?>
                <h3><?php echo "$jumlah_sk_domisili"; ?></h3>

                <p>SK Domisili</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_domisili.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  $data_sk_kelahiran = mysqli_query($koneksi, "SELECT * FROM sk_kelahiran");
                  $jumlah_sk_kelahiran = mysqli_num_rows($data_sk_kelahiran);
                 ?>
                <h3><?php echo "$jumlah_sk_kelahiran"; ?></h3>

                <p>SK Kelahiran</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_kelahiran.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  $data_sk_kelakuan_baik = mysqli_query($koneksi, "SELECT * FROM sk_kelakuan_baik");
                  $jumlah_sk_kelakuan_baik = mysqli_num_rows($data_sk_kelakuan_baik);
                 ?>
                <h3><?php echo "$jumlah_sk_kelakuan_baik"; ?></h3>

                <p>SK Kelakuan Baik</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_kelakuan_baik.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $data_sk_kematian = mysqli_query($koneksi, "SELECT * FROM sk_kematian");
                  $jumlah_sk_kematian = mysqli_num_rows($data_sk_kematian);
                 ?>
                <h3><?php echo "$jumlah_sk_kematian"; ?></h3>

                <p>SK Kematian</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_kematian.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  $data_sk_pindah = mysqli_query($koneksi, "SELECT * FROM sk_pindah");
                  $jumlah_sk_pindah = mysqli_num_rows($data_sk_pindah);
                 ?>
                <h3><?php echo "$jumlah_sk_pindah"; ?></h3>

                <p>SK Pindah Penduduk</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_pindah.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  $data_sk_tidak_mampu = mysqli_query($koneksi, "SELECT * FROM sk_tidak_mampu");
                  $jumlah_sk_tidak_mampu = mysqli_num_rows($data_sk_tidak_mampu);
                 ?>
                <h3><?php echo "$jumlah_sk_tidak_mampu"; ?></h3>

                <p>SK Tidak Mampu</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <a href="data_sk_tidak_mampu.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>STIKOM UYELINDO KUPANG</b>
    </div>
    <strong>Copyright &copy; 2021 | Wilmarc Maynard Kiu</strong>
  </footer>
  </div>
<!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
