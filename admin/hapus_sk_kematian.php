<?php 
include 'menu.php';
include '../koneksi.php';
 ?>

<h2>Halaman Penduduk</h2>

<?php 
  $ambil= $koneksi->query("SELECT * FROM sk_kematian WHERE id_surat='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM sk_kematian WHERE id_surat='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='data_sk_kematian.php?';</script>";
?>