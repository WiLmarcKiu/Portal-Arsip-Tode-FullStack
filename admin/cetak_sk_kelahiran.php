<?php
session_start();
include '../koneksi.php';
 ?>
 				<?php 
                  if (isset($_POST['cetak']))
                  {
                    $koneksi->query ("INSERT INTO sk_kelahiran
                    (no_surat,tanggal_surat,nama_masyarakat,jk,tempat_lahir,tanggal_lahir,nama_ayah,agama_ayah,pekerjaan_ayah,ktp_ayah,kk_ayah,kewarganegaraan_ayah,alamat_ayah,nama_ibu,agama_ibu,pekerjaan_ibu,ktp_ibu,kk_ibu,kewarganegaraan_ibu,alamat_ibu,nama,nip,jabatan) VALUES ('$_POST[no_surat]','$_POST[tanggal_surat]','$_POST[nama_masyarakat]','$_POST[jk]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[nama_ayah]','$_POST[agama_ayah]','$_POST[pekerjaan_ayah]','$_POST[ktp_ayah]','$_POST[kk_ayah]','$_POST[kewarganegaraan_ayah]','$_POST[alamat_ayah]','$_POST[nama_ibu]','$_POST[agama_ibu]','$_POST[pekerjaan_ibu]','$_POST[ktp_ibu]','$_POST[kk_ibu]','$_POST[kewarganegaraan_ibu]','$_POST[alamat_ibu]','$_POST[nama]','$_POST[nip]','$_POST[jabatan]')");

                    echo "<script>alert('Data Berhasil Disimpan');</script>";
                  }
                ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak SK Kelahiran</title>
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
						<font size="4"><b><u>SURAT KETERANGAN KELAHIRAN</u></b></font>
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
					: <b><?php echo $_POST['nama']; ?></b><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">NIP </font></td>
				<td>
					: <b><?php echo $_POST['nip']; ?></b><br>
				</td>	
			</tr>
			<tr>
				<td><font size="2">Jabatan </font></td>
				<td>
					: <b><?php echo $_POST['jabatan']; ?></b><br>
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
					: <b><?php echo $pecah ['nama']; ?></b><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Tempat / Tanggal Lahir </font></td>	
				<td>
					: <?php echo $pecah ['tempat_lahir']; ?>, <?php echo date("d F Y", strtotime($pecah ['tanggal_lahir'])) ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Jenis Kelamin </font></td>	
				<td>
					: <?php echo $pecah ['jenis_kelamin']; ?><br>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td><font size="2"><br>Adalah anak kandung dari perkawinan sah antara &nbsp;&nbsp;</font></td>
				<td width="326"><br>:<br></td>
			</tr>
		</table>
		<table>
			<tr>
				<td><font size="2">Nama Ayah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>	
				<td width="415">
					: <b><?php echo $_POST ['nama_ayah']; ?></b><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Agama </font></td>	
				<td>
					: <?php echo $_POST ['agama_ayah']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Pekerjaan </font></td>	
				<td>
					: <?php echo $_POST ['pekerjaan_ayah']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">No. KTP </font></td>	
				<td>
					: <?php echo $_POST ['ktp_ayah']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">No. KK </font></td>	
				<td>
					: <?php echo $_POST ['kk_ayah']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Kewarganegaraan </font></td>	
				<td>
					: <?php echo $_POST ['kewarganegaraan_ayah']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Alamat </font></td>	
				<td>
					: <?php echo $_POST['alamat_ayah']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2"><br>Nama Ibu </font></td>	
				<td>
					<br>: <b><?php echo $_POST ['nama_ibu']; ?></b><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Agama </font></td>	
				<td>
					: <?php echo $_POST ['agama_ibu']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Pekerjaan </font></td>	
				<td>
					: <?php echo $_POST ['pekerjaan_ibu']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">No. KTP </font></td>	
				<td>
					: <?php echo $_POST ['ktp_ibu']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">No. KK </font></td>	
				<td>
					: <?php echo $_POST ['kk_ibu']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Kewarganegaraan </font></td>	
				<td>
					: <?php echo $_POST ['kewarganegaraan_ibu']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">Alamat </font></td>	
				<td>
					: <?php echo $_POST['alamat_ibu']; ?><br>
				</td>
			</tr>
		</table>
		<table>
			<td width="599">
				<font size="2"><br>Demikian surat keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya.<br><br><br></font>
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