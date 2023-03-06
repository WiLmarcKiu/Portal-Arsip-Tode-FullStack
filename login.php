<?php 
	session_start();
	include 'koneksi.php';

	//menangkap data yg dikirim dri form login

	$username = $_POST['username'];
	$password = $_POST['password'];

	//menyeleksi data dri tabel admin dengan
	//username dan password yg sesuai

	$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

	//menghitung jumlah data yg ditemukan

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = 'login';
		echo "<script>alert('Login berhasil');</script>";
    	echo "<script>location='admin/index.php';</script>";
	}
	else {
		header("location:index.php?pesan=gagal");
	}
 ?>