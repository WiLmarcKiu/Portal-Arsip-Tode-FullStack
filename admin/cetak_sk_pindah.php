<?php
session_start();
include '../koneksi.php';
 ?>
 				<?php 
                  if (isset($_POST['cetak']))
                  {
                    $koneksi->query ("INSERT INTO sk_pindah
                    (no_surat,tanggal_surat,nama_masyarakat,tempat_lahir,tanggal_lahir,jk,nik,agama,kewarganegaraan,status,pekerjaan,pendidikan_terakhir,kelurahan,kecamatan,kabupaten_kota,provinsi,kelurahanP,kecamatanP,kabupaten_kotaP,provinsiP,alasan_pindah,nama,nip,jabatan) VALUES ('$_POST[no_surat]','$_POST[tanggal_surat]','$_POST[nama_masyarakat]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[jk]','$_POST[nik]','$_POST[agama]','$_POST[kewarganegaraan]','$_POST[status]','$_POST[pekerjaan]','$_POST[pendidikan_terakhir]','$_POST[kelurahan]','$_POST[kecamatan]','$_POST[kabupaten_kota]','$_POST[provinsi]','$_POST[kelurahanP]','$_POST[kecamatanP]','$_POST[kabupaten_kotaP]','$_POST[provinsiP]','$_POST[alasan_pindah]','$_POST[nama]','$_POST[nip]','$_POST[jabatan]')");

                    echo "<script>alert('Data Berhasil Disimpan');</script>";
                  }
                ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak SK Pindah</title>
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
						<font size="4"><b><u>SURAT KETERANGAN PINDAH PENDUDUK</u></b></font>
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
				<td><font size="2">1. Nama </font></td>	
				<td>
					: <?php echo $pecah ['nama']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">2. Tempat / Tanggal Lahir </font></td>	
				<td>
					: <?php echo $pecah ['tempat_lahir']; ?>, <?php echo date("d F Y", strtotime($pecah ['tanggal_lahir'])) ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">3. Jenis Kelamin </font></td>	
				<td>
					: <?php echo $pecah ['jenis_kelamin']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">4. NIK </font></td>	
				<td>
					: <?php echo $pecah ['nik']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">5. Agama </font></td>	
				<td>
					: <?php echo $pecah ['agama']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">6. Kewarganegaraan </font></td>	
				<td>
					: <?php echo $pecah ['kewarganegaraan']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">7. Status Perkawinan </font></td>	
				<td>
					: <?php echo  $_POST['status']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">8. Pekerjaan </font></td>	
				<td>
					: <?php echo $pecah ['pekerjaan']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">9. Pendidikan Terakhir </font></td>	
				<td>
					: <?php echo $pecah ['pendidikan_terakhir']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">10. Alamat Asal</font></td>	
				<td>
					: <br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kelurahan</font></td>	
				<td>
					: <?php echo $_POST['kelurahan']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kecamatan</font></td>	
				<td>
					: (06) <?php echo $_POST['kecamatan']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kabupaten/Kota</font></td>	
				<td>
					: (71) <?php echo $_POST['kabupaten_kota']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Provinsi</font></td>	
				<td>
					: (53) <?php echo $_POST['provinsi']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kode Pos</font></td>	
				<td>
					: 85229<br>
				</td>
			</tr>
			<tr>
				<td><font size="2">11. Alamat Tujuan Pindah</font></td>	
				<td>
					: <br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kelurahan</font></td>	
				<td>
					: <?php echo $_POST['kelurahanP']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kecamatan</font></td>	
				<td>
					: (06) <?php echo $_POST['kecamatanP']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kabupaten/Kota</font></td>	
				<td>
					: (71) <?php echo $_POST['kabupaten_kotaP']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Provinsi</font></td>	
				<td>
					: (53) <?php echo $_POST['provinsiP']; ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kode Pos</font></td>	
				<td>
					: -<br>
				</td>
			</tr>
			<tr>
				<td><font size="2">12. Pada </font></td>	
				<td>
					: <?php echo date("d F Y", strtotime($_POST ['tanggal_surat'])) ?><br>
				</td>
			</tr>
			<tr>
				<td><font size="2">13. Alasan Pindah </font></td>	
				<td>
					: <?php echo $_POST ['alasan_pindah']; ?><br>
				</td>
			</tr>
		</table>
		<table>
			<td width="599">
				<font size="2"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat  keterangan  ini  dibuat, untuk dipergunakan sebagaimana  mestinya.<br><br></font>
			</td>
		</table>
		<table width="609">
			<tr>
				<td width="300" class="text">
				<font size="2"><b>Mengetahui</b><br><br></font>
						<font size="3"><b>CAMAT KOTA LAMA,</b><br><br><br><br><br></font>
						<font size="3"><b><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b><br></font>
						<font size="3"><b>NIP. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>	
				</td>
				<td width="65">	
				</td>
				<td width="300" class="text">
						<font size="2">Kupang, <?php echo date("d F Y", strtotime($_POST ['tanggal_surat'])) ?><br><br></font>
						<font size="3"><b><?php echo $_POST['jabatan']; ?>,</b><br><br><br><br><br></font>
						<font size="3"><b><u><?php echo $_POST['nama']; ?></u></b><br></font>
						<font size="3"><b>NIP. <?php echo $_POST['nip']; ?></b></font>
				</td>
			</tr>
		</table>
		<table width="609">
			<br><br>
			<tr>
				<td><font size="2"><b>Catatan :</b></font></td>
			</tr>
			<table>
			<td width="599">
				<font size="2"><b>- Pada waktu Surat Keterangan Pindah ini diberikan, nama yang bersangkutan pada KK dicoret dan KTP dicabut. Setelah tiba ditempat tujuan harap segera melaporkan diri pada Pemerintah setempat.</b>
			<br><br></font>
			</td>
		</table>
		</table>
	</center>

</body>
</html>