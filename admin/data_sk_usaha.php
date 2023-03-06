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
            <h1>Data SK Usaha</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data SK Usaha</li>
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
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>No. Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Nama Masyarakat</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>NIK</th>
                    <th>No. KK</th>
                    <th>Jenis Kelamin</th>
                    <th>Kewarganegaraan</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Nama Usaha</th>
                    <th>Alamat Usaha</th>
                    <th>Bidang Usaha</th>
                    <th>Tahun Usaha</th>
                    <th>Nama Petugas</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil=$koneksi->query("SELECT * FROM sk_usaha");?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>

                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td>
                        <div class="btn-group btn-group-sm" style="text-align: center;">
                        <a href="hapus_sk_usaha.php?id=<?php echo $pecah ['id_surat']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt" title="Hapus"></i></a>
                        </div>
                      </td>
                      <td><?php echo $pecah ['no_surat']; ?></td>
                      <td><?php echo date("d F Y", strtotime($pecah ['tanggal_surat'])) ?></td>
                      <td><?php echo $pecah ['nama_masyarakat']; ?></td>
                      <td><?php echo $pecah ['tempat_lahir']; ?>, <?php echo date("d F Y", strtotime($pecah ['tanggal_lahir'])) ?></td>
                      <td><?php echo $pecah ['nik']; ?></td>
                      <td><?php echo $pecah ['no_kk']; ?></td>
                      <td><?php echo $pecah ['jk']; ?></td>
                      <td><?php echo $pecah ['kewarganegaraan']; ?></td>
                      <td><?php echo $pecah ['agama']; ?></td>
                      <td><?php echo $pecah ['alamat']; ?></td>
                      <td><?php echo $pecah ['nama_usaha']; ?></td>
                      <td><?php echo $pecah ['alamat_usaha']; ?></td>
                      <td><?php echo $pecah ['bidang_usaha']; ?></td>
                      <td><?php echo $pecah ['tahun_usaha']; ?></td>
                      <td><?php echo $pecah ['nama']; ?></td>
                      <td><?php echo $pecah ['nip']; ?></td>
                      <td><?php echo $pecah ['jabatan']; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                  </tbody>

                </table>
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
