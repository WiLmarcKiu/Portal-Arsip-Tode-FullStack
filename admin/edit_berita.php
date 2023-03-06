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
            <h1>Edit Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Berita</li>
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
                  $ambil= $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
                  $pecah = $ambil->fetch_assoc();
                  ?>

                 <form method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Judul</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="judul" value="<?php echo $pecah ['judul']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Isi</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="isi" value="<?php echo $pecah ['isi']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Tanggal</label>
                    </div>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="tanggal" value="<?php echo $pecah ['tanggal']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label></label>
                    </div>
                    <div class="col-md-4">
                      <img src="../berita/<?php echo $pecah ['gambar'] ?>" width="200">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Foto</label>
                    </div>
                    <div class="col-md-4">
                      <input type="file" class="form-control" name="gambar">
                    </div>
                  </div>
                  
                  <button class="btn btn-sm btn-primary" name="ubah"><i class="fa fa-check"></i>&nbsp;Edit</button>
                </form>

                <?php 
                  if (isset($_POST['ubah'])) 
                  {
                    $namafoto=$_FILES['gambar']['name'];
                    $lokasifoto=$_FILES['gambar']['tmp_name'];

                // jika foto dirubah
                    if(!empty($lokasifoto))
                    {
                      move_uploaded_file($lokasifoto, "../berita/$namafoto");
                      $koneksi->query("UPDATE berita SET judul = '$_POST[judul]',isi = '$_POST[isi]',tanggal = '$_POST[tanggal]',gambar = '$namafoto' WHERE id_berita = '$_GET[id]'");
                    }
                    else
                    {
                      move_uploaded_file($lokasifoto, "../berita/$namafoto");
                      $koneksi->query("UPDATE berita SET judul = '$_POST[judul]',isi = '$_POST[isi]',tanggal = '$_POST[tanggal]' WHERE id_berita = '$_GET[id]'");
                    }


                    echo "<script>alert('Data Berhasil Diubah');</script>";
                    echo "<script>location='data_berita.php';</script>";

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
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>STIKOM UYELINDO KUPANG</b>
    </div>
    <strong>Copyright &copy; 2021 | Wilmarc Maynard Kiu</strong>
  </footer>

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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
