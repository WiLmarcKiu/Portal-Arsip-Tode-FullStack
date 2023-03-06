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
            <h1>Edit Penduduk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Penduduk</li>
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
                <?php 
                  $ambil= $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$_GET[id]'");
                  $pecah = $ambil->fetch_assoc();
                  ?>

                 <form method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>No. KK/NIK</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="no_kk" value="<?php echo $pecah ['no_kk']; ?>">
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="nik" value="<?php echo $pecah ['nik']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Nama</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nama" value="<?php echo $pecah ['nama']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Jenis Kelamin</label>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control" name="jk" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option 
                      <?php if( $pecah['jenis_kelamin']=='Laki - Laki'){echo "selected"; } ?> value='Laki - Laki'>Laki - Laki</option>
                      <option 
                      <?php if( $pecah['jenis_kelamin']=='Perempuan'){echo "selected"; } ?> value='Perempuan'>Perempuan</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Suku</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="suku" value="<?php echo $pecah ['suku']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Tempat/Tanggal Lahir</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $pecah ['tempat_lahir']; ?>">
                    </div>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $pecah ['tanggal_lahir']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Kategori Usia</label>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control" name="kategori_usia" required>
                        <option value="">Pilih Kategori Usia</option>
                        <option
                          <?php if( $pecah['kategori_usia']=='Balita (5th ke bawah)'){echo "selected"; } ?> value='Balita (5th ke bawah)'>Balita (5th ke bawah)
                        </option>
                        <option
                          <?php if( $pecah['kategori_usia']=='Anak - Anak (6 - 10th)'){echo "selected"; } ?> value='Anak - Anak (6 - 10th)'>Anak - Anak (6 - 10th)
                        </option>
                        <option
                          <?php if( $pecah['kategori_usia']=='Remaja (11 - 16th)'){echo "selected"; } ?> value='Remaja (11 - 16th)'>Remaja (11 - 16th)
                        </option>
                        <option
                          <?php if( $pecah['kategori_usia']=='Dewasa (17 - 30th)'){echo "selected"; } ?> value='Dewasa (17 - 30th)'>Dewasa (17 - 30th)
                        </option>
                        <option
                          <?php if( $pecah['kategori_usia']=='Orang Tua (31 - 59th)'){echo "selected"; } ?> value='Orang Tua (31 - 59th)'>Orang Tua (31 - 59th)
                        </option>
                        <option
                          <?php if( $pecah['kategori_usia']=='Lansia (60th ke atas)'){echo "selected"; } ?> value='Lansia (60th ke atas)'>Lansia (60th ke atas)
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Agama</label>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" name="agama" required>
                      <option value="">Pilih Agama</option>
                      <option
                          <?php if( $pecah['agama']=='Kristen Protestan'){echo "selected"; } ?> value='Kristen Protestan'>Kristen Protestan
                      </option>
                      <option
                          <?php if( $pecah['agama']=='Katolik'){echo "selected"; } ?> value='Katolik'>Katolik
                      </option>
                      <option
                          <?php if( $pecah['agama']=='Islam'){echo "selected"; } ?> value='Islam'>Islam
                      </option>
                      <option
                          <?php if( $pecah['agama']=='Hindu'){echo "selected"; } ?> value='Hindu'>Hindu
                      </option>
                      <option
                          <?php if( $pecah['agama']=='Budha'){echo "selected"; } ?> value='Budha'>Budha
                      </option>
                      <option
                          <?php if( $pecah['agama']=='Konghucu'){echo "selected"; } ?> value='Konghucu'>Konghucu
                      </option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Pendidikan Terakhir</label>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" name="pendidikan" required>
                      <option value="">Pilih Pendidikan Terakhir</option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='TAMAT SD / SEDERAJAT'){echo "selected"; } ?> value='TAMAT SD / SEDERAJAT'>TAMAT SD / SEDERAJAT
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='SLTP / SEDERAJAT'){echo "selected"; } ?> value='SLTP / SEDERAJAT'>SLTP / SEDERAJAT
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='TIDAK / BELUM SEKOLAH'){echo "selected"; } ?> value='TIDAK / BELUM SEKOLAH'>TIDAK / BELUM SEKOLAH
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='SLTA / SEDERAJAT'){echo "selected"; } ?> value='SLTA / SEDERAJAT'>SLTA / SEDERAJAT
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='BELUM TAMAT SD / SEDERAJAT'){echo "selected"; } ?> value='BELUM TAMAT SD / SEDERAJAT'>BELUM TAMAT SD / SEDERAJAT
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='DIPLOMA IV / STRATA I'){echo "selected"; } ?> value='DIPLOMA IV / STRATA I'>DIPLOMA IV / STRATA I
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='AKADEMI / DIPLOMA III / S. MUDA'){echo "selected"; } ?> value='AKADEMI / DIPLOMA III / S. MUDA'>AKADEMI / DIPLOMA III / S. MUDA
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='DIPLOMA I / II'){echo "selected"; } ?> value='DIPLOMA I / II'>DIPLOMA I / II
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='STRATA II'){echo "selected"; } ?> value='STRATA II'>STRATA II
                      </option>
                      <option
                          <?php if( $pecah['pendidikan_terakhir']=='STRATA III'){echo "selected"; } ?> value='STRATA III'>STRATA III
                      </option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Pekerjaan</label>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control" name="pekerjaan" required>
                      <option value="">Pilih Pekerjaan</option>
                      <option
                          <?php if( $pecah['pekerjaan']=='BELUM / TIDAK BEKERJA'){echo "selected"; } ?> value='BELUM / TIDAK BEKERJA'>BELUM / TIDAK BEKERJA
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='MENGURUS RUMAH TANGGA'){echo "selected"; } ?> value='MENGURUS RUMAH TANGGA'>MENGURUS RUMAH TANGGA
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='PELAJAR / MAHASISWA'){echo "selected"; } ?> value='PELAJAR / MAHASISWA'>PELAJAR / MAHASISWA
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='PENSIUNAN'){echo "selected"; } ?> value='PENSIUNAN'>PENSIUNAN
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='PEGAWAI NEGERI SIPIL'){echo "selected"; } ?> value='PEGAWAI NEGERI SIPIL'>PEGAWAI NEGERI SIPIL
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='PETANI / PEKEBUN'){echo "selected"; } ?> value='PETANI / PEKEBUN'>PETANI / PEKEBUN
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='PETERNAK'){echo "selected"; } ?> value='PETERNAK'>PETERNAK
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='NELAYAN / PERIKANAN'){echo "selected"; } ?> value='NELAYAN / PERIKANAN'>NELAYAN / PERIKANAN
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='KARYAWAN SWASTA'){echo "selected"; } ?> value='KARYAWAN SWASTA'>KARYAWAN SWASTA
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='KARYAWAN BUMN'){echo "selected"; } ?> value='KARYAWAN BUMN'>KARYAWAN BUMN
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='KARYAWAN BUMD'){echo "selected"; } ?> value='KARYAWAN BUMD'>KARYAWAN BUMD
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='WIRASWASTA'){echo "selected"; } ?> value='WIRASWASTA'>WIRASWASTA
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='TUKANG'){echo "selected"; } ?> value='TUKANG'>TUKANG
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='PEDAGANG'){echo "selected"; } ?> value='PEDAGANG'>PEDAGANG
                      </option>
                      <option
                          <?php if( $pecah['pekerjaan']=='LAINNYA'){echo "selected"; } ?> value='LAINNYA'>LAINNYA
                      </option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Kewarganegaraan</label>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" name="kewarganegaraan" required>
                      <option value="">Pilih Kewarganegaraan</option>
                      <option
                          <?php if( $pecah['kewarganegaraan']=='WNI'){echo "selected"; } ?> value='WNI'>WNI
                      </option>
                      <option
                          <?php if( $pecah['kewarganegaraan']=='WNA'){echo "selected"; } ?> value='WNA'>WNA
                      </option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Alamat</label>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" name="alamat" required>
                      <option value="">Pilih Alamat</option>
                      <option
                          <?php if( $pecah['alamat']=='RT 001 / RW 001'){echo "selected"; } ?> value='RT 001 / RW 001'>RT 001 / RW 001
                      </option>
                      <option
                          <?php if( $pecah['alamat']=='RT 002 / RW 001'){echo "selected"; } ?> value='RT 002 / RW 001'>RT 002 / RW 001
                      </option>
                      <option
                          <?php if( $pecah['alamat']=='RT 003 / RW 002'){echo "selected"; } ?> value='RT 003 / RW 002'>RT 003 / RW 002
                      </option>
                      <option
                          <?php if( $pecah['alamat']=='RT 004 / RW 002'){echo "selected"; } ?> value='RT 004 / RW 002'>RT 004 / RW 002
                      </option>
                      <option
                          <?php if( $pecah['alamat']=='RT 005 / RW 003'){echo "selected"; } ?> value='RT 005 / RW 003'>RT 005 / RW 003
                      </option>
                      <option
                          <?php if( $pecah['alamat']=='RT 006 / RW 003'){echo "selected"; } ?> value='RT 006 / RW 003'>RT 006 / RW 003
                      </option>
                      <option
                          <?php if( $pecah['alamat']=='RT 007 / RW 003'){echo "selected"; } ?> value='RT 007 / RW 003'>RT 007 / RW 003
                      </option>
                    </select>
                    </div>
                  </div>
                  
                  <button class="btn btn-sm btn-primary" name="ubah"><i class="fa fa-check"></i>&nbsp;Edit</button>
                </form>

                <?php 
                  if (isset($_POST['ubah'])) 
                  {
                    $koneksi->query("UPDATE penduduk SET no_kk = '$_POST[no_kk]',nik = '$_POST[nik]',nama = '$_POST[nama]',jenis_kelamin = '$_POST[jk]',suku = '$_POST[suku]',tempat_lahir = '$_POST[tempat_lahir]',tanggal_lahir = '$_POST[tanggal_lahir]',kategori_usia = '$_POST[kategori_usia]',agama = '$_POST[agama]',pendidikan_terakhir = '$_POST[pendidikan]',pekerjaan = '$_POST[pekerjaan]',kewarganegaraan = '$_POST[kewarganegaraan]',alamat = '$_POST[alamat]' WHERE id_penduduk = '$_GET[id]'");


                    echo "<script>alert('Data Berhasil Diubah');</script>";
                    echo "<script>location='penduduk.php';</script>";

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
