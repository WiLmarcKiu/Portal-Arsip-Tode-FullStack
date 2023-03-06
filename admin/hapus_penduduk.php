<?php 
include 'menu.php';
include '../koneksi.php';
 ?>

<h2>Halaman Penduduk</h2>

<?php 
  $ambil= $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM penduduk WHERE id_penduduk='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='penduduk.php?';</script>";
?>