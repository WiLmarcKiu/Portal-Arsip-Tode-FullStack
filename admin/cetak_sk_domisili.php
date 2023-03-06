<?php
session_start();
include '../koneksi.php';
 ?>
 				<?php 
                  if (isset($_POST['cetak']))
                  {
                    $koneksi->query ("INSERT INTO sk_domisili
                    (no_surat,tanggal_surat,nik,no_kk,nama_masyarakat,jk,tempat_lahir,tanggal_lahir,agama,pekerjaan,alamat_ktp_kk,alamat_domisili,nama_penanggung_jawab,tujuan_surat,nama,nip,jabatan) VALUES ('$_POST[no_surat]','$_POST[tanggal_surat]','$_POST[nik]','$_POST[no_kk]','$_POST[nama_masyarakat]','$_POST[jk]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[agama]','$_POST[pekerjaan]','$_POST[alamat_ktp_kk]','$_POST[alamat_domisili]','$_POST[nama_penanggung_jawab]','$_POST[tujuan_surat]','$_POST[nama]','$_POST[nip]','$_POST[jabatan]')");

                    echo "<script>alert('Data Berhasil Disimpan');</script>";
                  }
                ?>  
<!DOCTYPE html>
<html>
<head>
	<title>Cetak SK Domisili</title>
	<style>
		table tr td {
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
	</style>
</head>
<body>
				<?php 
                  $ambil= $koneksi->query("SELECT * FROM instansi");
                  $pecah = $ambil->fetch_assoc();
                 ?>

	<center>
		<table>
			<tr>
				<td><img src="logo.png" width="100" height="90"></td>
				<td width="440">
					<center>
						<font size="5"><b><?php echo $pecah ['nama_pemerintahan']; ?></b></font><br>
						<font size="4"><b><?php echo $pecah ['nama_kecamatan']; ?></b></font><br>
						<font size="5"><b><?php echo $pecah ['nama_instansi']; ?></b></font><br>
						<font size="2"><b><?php echo $pecah ['alamat']; ?></b></font>
					</center>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="600" colspan="1"><hr>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="500">
					<center>
						<font size="4"><b><u>SURAT KETERANGAN DOMISILI</u></b></font>
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<font size="2"><b>Nomor: <?php echo $_POST['no_surat']; ?></b><br><br></font>
					</center>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td><font size="2">Yang bertanda tangan dibawah ini </font></td>
				<td width="414">:<br></td>
			</tr>
			<tr>
				<td><font size="2">Nama </font></td>	
				<td>
					: <?php echo $_POST['nama']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">NIP </font></td>
				<td>
					: <?php echo $_POST['nip']; ?><br>
				</td>	
			</tr>
			<tr>
				<td><font size="2">Jabatan </font></td>
				<td>
					: <?php echo $_POST['jabatan']; ?><br>
				</td>
			</tr>
		</table>
				<?php 
                  $ambil= $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$_GET[id]'");
                  $pecah = $ambil->fetch_assoc();
                 ?>
		<table>
			<tr>
				<td><font size="2"><br>Dengan ini menerangkan bahwa &nbsp;&nbsp;</font></td>
				<td width="415"><br>:<br></td>
			</tr>
			<tr>
				<td><font size="2">Nama </font></td>	
				<td>
					: <?php echo $pecah ['nama']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">NIK </font></td>	
				<td>
					: <?php echo $pecah ['nik']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">No. KK </font></td>	
				<td>
					: <?php echo $pecah ['no_kk']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Jenis Kelamin </font></td>	
				<td>
					: <?php echo $pecah ['jenis_kelamin']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Tempat / Tanggal Lahir </font></td>	
				<td>
					: <?php echo $pecah ['tempat_lahir']; ?>, <?php echo date("d F Y", strtotime($pecah ['tanggal_lahir'])) ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Agama </font></td>	
				<td>
					: <?php echo $pecah ['agama']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Pekerjaan </font></td>	
				<td>
					: <?php echo $pecah ['pekerjaan']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Alamat sesuai KTP/KK</font></td>	
				<td>
					: <?php echo $_POST['alamat_ktp_kk']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Alamat Domisili saat ini</font></td>	
				<td>
					: <?php echo $_POST['alamat_domisili']; ?><br>
				</td>
			</tr>
		</table>
		<table>
			<td width="599">
				<font size="2"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adalah benar yang bersangkutan saat ini berdomisili / tinggal di <?php echo $_POST['alamat_domisili']; ?>, dan yang menjadi penanggung jawab dari yang bersangkutan adalah <b><?php echo $_POST['nama_penanggung_jawab']; ?>, NIK : <?php echo $_POST['nik_penanggung_jawab']; ?>, No. KK : <?php echo $_POST['no_kk_penanggung_jawab']; ?></b> dengan alamat <?php echo $_POST['alamat_domisili']; ?>.<br><br></font>
			</td>
		</table>
		<table>
			<td width="599">
				<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dipergunakan <?php echo $_POST['tujuan_surat']; ?>.<br><br><br></font>
			</td>
		</table>
		<table width="609">
			<tr>
				<td width="365">	
				</td>
				<td width="300" class="text">
						<font size="2">Kupang, <?php echo date("d F Y", strtotime($_POST ['tanggal_surat'])) ?><br><br></font>
						<font size="3"><b><?php echo $_POST['jabatan']; ?>,</b><br><br><br><br><br></font>
						<font size="3"><b><u><?php echo $_POST['nama']; ?></u></b><br></font>
						<font size="3"><b>Penata TK. I</b><br></font>
						<font size="3"><b>NIP. <?php echo $_POST['nip']; ?></b></font>
				</td>
			</tr>
		</table>
	</center>

</body>
</html>