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
            <h1>Tambah Kepala Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Kepala Keluarga</li>
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
              <!-- <div class="card-header">
                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus" title="Penduduk Tetap"></i>&nbsp;Tambah Data</a>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                 <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>No. KK</label>
                    <input type="number" class="form-control" name="no_kk" required="">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="number" class="form-control" name="nik" required="">
                  </div>
                  <div class="form-group">
                    <label>Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" name="nama" required="">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki - Laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Suku</label>
                    <input type="text" class="form-control" name="suku" required="">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" required="">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" required="">
                  </div>
                  <div class="form-group">
                    <label>Kategori Usia</label>
                    <select class="form-control" name="kategori_usia" required>
                      <option value="">Pilih Kategori Usia</option>
                      <option value="Balita (5th ke bawah)">Balita (5th ke bawah)</option>
                      <option value="Anak - Anak (6 - 10th)">Anak - Anak (6-10th)</option>
                      <option value="Remaja (11 - 16th)">Remaja (11 - 16th)</option>
                      <option value="Dewasa (17 - 30th)">Dewasa (17 - 30th)</option>
                      <option value="Orang Tua (31 - 59th)">Orang Tua (31 - 59th)</option>
                      <option value="Lansia (60th ke atas)">Lansia (60th ke atas)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control" name="agama" required>
                      <option value="">Pilih Agama</option>
                      <option value="Kristen Protestan">Kristen Protestan</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Islam">Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                    
              </div>
                  <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan" required>
                      <option value="">Pilih Pendidikan Terakhir</option>
                      <option value="TAMAT SD / SEDERAJAT">
                      TAMAT SD / SEDERAJAT</option>
                      <option value="SLTP / SEDERAJAT">
                      SLTP / SEDERAJAT</option>
                      <option value="TIDAK / BELUM SEKOLAH">
                      TIDAK / BELUM SEKOLAH</option>
                      <option value="SLTA / SEDERAJAT">
                      SLTA / SEDERAJAT</option>
                      <option value="BELUM TAMAT SD / SEDERAJAT">BELUM TAMAT SD / SEDERAJAT</option>
                      <option value="DIPLOMA IV / STRATA I">
                      DIPLOMA IV / STRATA I</option>
                      <option value="AKADEMI / DIPLOMA III / S. MUDA">AKADEMI / DIPLOMA III / S. MUDA</option>
                      <option value="DIPLOMA I / II">
                      DIPLOMA I / II</option>
                      <option value="STRATA II">
                      STRATA II</option>
                      <option value="STRATA III">
                      STRATA III</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <select class="form-control" name="pekerjaan" required>
                      <option value="">Pilih Pekerjaan</option>
                      <option value="BELUM / TIDAK BEKERJA">
                      BELUM / TIDAK BEKERJA</option>
                      <option value="MENGURUS RUMAH TANGGA">
                      MENGURUS RUMAH TANGGA</option>
                      <option value="PELAJAR / MAHASISWA">
                      PELAJAR / MAHASISWA</option>
                      <option value="PENSIUNAN">
                      PENSIUNAN</option>
                      <option value="PEGAWAI NEGERI SIPIL">
                      PEGAWAI NEGERI SIPIL</option>
                      <option value="PETANI / PEKEBUN">
                      PETANI / PEKEBUN</option>
                      <option value="PETERNAK">
                      PETERNAK</option>
                      <option value="NELAYAN / PERIKANAN">
                      NELAYAN / PERIKANAN</option>
                      <option value="KARYAWAN SWASTA">
                      KARYAWAN SWASTA</option>
                      <option value="KARYAWAN BUMN">
                      KARYAWAN BUMN</option>
                      <option value="KARYAWAN BUMD">
                      KARYAWAN BUMD</option>
                      <option value="WIRASWASTA">
                      WIRASWASTA</option>
                      <option value="TUKANG">TUKANG</option>
                      <option value="PEDAGANG">PEDAGANG</option>
                      <option value="LAINNYA">LAINNYA</option>
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <select class="form-control" name="kewarganegaraan" required>
                      <option value="">Pilih Kewarganegaraan</option>
                      <option value="WNI">WNI</option>
                      <option value="WNA">WNA</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <select class="form-control" name="alamat" required>
                      <option value="">Pilih Alamat</option>
                      <option value="RT 001 / RW 001">RT 001 / RW 001</option>
                      <option value="RT 002 / RW 001">RT 002 / RW 001</option>
                      <option value="RT 003 / RW 002">RT 003 / RW 002</option>
                      <option value="RT 004 / RW 002">RT 004 / RW 002</option>
                      <option value="RT 005 / RW 003">RT 005 / RW 003</option>
                      <option value="RT 006 / RW 003">RT 006 / RW 003</option>
                      <option value="RT 007 / RW 003">RT 007 / RW 003</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Dikeluarga</label>
                    <select class="form-control" name="status" required>
                      <option value="">Pilih Status Dikeluarga</option>
                      <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                      <option value="ISTRI">ISTRI</option>
                      <option value="ANAK KANDUNG">ANAK KANDUNG</option>
                      <option value="FAMILY">FAMILY</option>
                    </select>
                  </div>
                  <button class="btn btn-sm btn-primary" name="save"><i class="fa fa-check"></i>&nbsp;Simpan</button>
                </form>

                <?php 
                  if (isset($_POST['save']))
                  {
                    $koneksi->query ("INSERT INTO penduduk
                    (no_kk,nik,nama,jenis_kelamin,suku,tempat_lahir,tanggal_lahir,kategori_usia,agama,pendidikan_terakhir,pekerjaan,kewarganegaraan,alamat,status_dikeluarga) VALUES ('$_POST[no_kk]','$_POST[nik]','$_POST[nama]','$_POST[jk]','$_POST[suku]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[kategori_usia]','$_POST[agama]','$_POST[pendidikan]','$_POST[pekerjaan]','$_POST[kewarganegaraan]','$_POST[alamat]','$_POST[status]')");

                    echo "<script>alert('Data Berhasil Ditambah');</script>";
                    echo "<script>location='kepala_keluarga.php';</script>";
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
