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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Admin / User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Admin / User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                  $ambil= $koneksi->query("SELECT * FROM admin");
                  $pecah = $ambil->fetch_assoc();
                  ?>

                 <form method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-md-3">
                      <label>Nama Admin</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $pecah ['nama_lengkap']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-3">
                      <label>Email</label>
                    </div>
                    <div class="col-md-7">
                      <input type="email" class="form-control" name="email" value="<?php echo $pecah ['email']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-3">
                      <label>Username</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="username" value="<?php echo $pecah ['username']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-3">
                      <label>Password</label>
                    </div>
                    <div class="col-md-7">
                      <input type="number" class="form-control" name="password" value="<?php echo $pecah ['password']; ?>" required>
                    </div>
                  </div>
                  
                  <button class="btn btn-sm btn-primary" name="simpan"><i class="fa fa-check"></i>&nbsp;Simpan</button>
                </form>

                <?php 
                  if (isset($_POST['simpan'])) 
                  {
                    $koneksi->query("UPDATE admin SET username = '$_POST[username]',password = '$_POST[password]',email = '$_POST[email]',nama_lengkap = '$_POST[nama_lengkap]'");


                    echo "<script>alert('Data Berhasil Diubah');</script>";
                    echo "<script>alert('Silahkan login, menggunakan password & email baru');</script>";
                    echo "<script>location='../home.php';</script>";

                  }
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
