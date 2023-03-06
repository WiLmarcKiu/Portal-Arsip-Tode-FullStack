<?php 
include 'menu.php';
include '../koneksi.php';
 ?>

<?php 
  $ambil= $koneksi->query("SELECT * FROM kegiatan WHERE id_kegiatan='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM kegiatan WHERE id_kegiatan='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='data_kegiatan.php?';</script>";
?>