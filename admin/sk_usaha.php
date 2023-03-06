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
            <h1>SK Usaha</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">SK Usaha</li>
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
                  $ambil= $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$_GET[id]'");
                  $pecah = $ambil->fetch_assoc();
                  ?>

                 <form method="post" enctype="multipart/form-data" action="cetak_sk_usaha.php?id=<?php echo $pecah ['id_penduduk']; ?>">
                  <div class="form-group">
                    <label>No. Surat</label>
                    <input type="text" class="form-control" name="no_surat" value="">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Surat</label>
                    <input type="date" class="form-control" name="tanggal_surat" value="">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama_masyarakat" value="<?php echo $pecah ['nama']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $pecah ['tempat_lahir']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $pecah ['tanggal_lahir']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="number" class="form-control" name="nik" value="<?php echo $pecah ['nik']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>No. KK</label>
                    <input type="number" class="form-control" name="no_kk" value="<?php echo $pecah ['no_kk']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jk" value="<?php echo $pecah ['jenis_kelamin']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <input type="text" class="form-control" name="kewarganegaraan" value="<?php echo $pecah ['kewarganegaraan']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" name="agama" value="<?php echo $pecah ['agama']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea type="text" class="form-control" name="alamat" rows="3" value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" class="form-control" name="nama_usaha" value="">
                  </div>
                  <div class="form-group">
                    <label>Alamat Usaha</label>
                    <textarea type="text" class="form-control" name="alamat_usaha" rows="3" value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Bidang Usaha</label>
                    <input type="text" class="form-control" name="bidang_usaha" value="">
                  </div>
                  <div class="form-group">
                    <label>Tahun Usaha</label>
                    <input type="number" class="form-control" name="tahun_usaha" value="">
                  </div>
                  <div class="alert alert-primary">
                    <p>Yang bertanda tangan di bawah ini :</p>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="">
                  </div>
                  <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip" value="">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="">
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary" name="cetak" value="cetak"><i class="fa fa-print"></i>&nbsp;Simpan & Cetak Surat</button>
                </form>

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
