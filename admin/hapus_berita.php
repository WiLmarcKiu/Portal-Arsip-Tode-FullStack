<?php 
include 'menu.php';
include '../koneksi.php';
 ?>

<?php 
  $ambil= $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='data_berita.php?';</script>";
?>