-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2022 pada 05.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `nama_lengkap`) VALUES
(1, 'Baron', '122333', 'aron@gmail.com', 'Aron Kiu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(1, 'Vaksinasi', 'Kelurahan Tode Kisar melakukan kegiatan vaksinasi bagi para warga masyarakat yang belum melakukan vaksinasi di Kantor Kelurahan Tode Kisar. ', '2021-10-08', 'slide1.jpg'),
(2, 'Vaksinasi', 'Kelurahan Tode Kisar melakukan kegiatan vaksinasi bagi para warga masyarakat yang belum melakukan vaksinasi di Kantor Kelurahan Tode Kisar.', '2021-10-09', 'slide2.jpg'),
(3, 'Vaksinasi', 'Kelurahan Tode Kisar melakukan kegiatan vaksinasi bagi para warga masyarakat yang belum melakukan vaksinasi di Kantor Kelurahan Tode Kisar. ', '2021-10-10', 'slide3.jpg'),
(4, 'Vaksinasi', 'Kelurahan Tode Kisar melakukan kegiatan vaksinasi bagi para warga masyarakat yang belum melakukan vaksinasi di Kantor Kelurahan Tode Kisar. ', '2021-10-11', 'slide2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `nama_instansi` varchar(60) NOT NULL,
  `nama_kepala` varchar(60) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nama_pemerintahan` varchar(50) NOT NULL,
  `nama_kecamatan` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`nama_instansi`, `nama_kepala`, `nip`, `email`, `nama_pemerintahan`, `nama_kecamatan`, `alamat`) VALUES
('KELURAHAN TODE KISAR', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 ', 'TodKis@gmail.com', 'PEMERINTAHAN KOTA KUPANG KECAMATAN KOTA LAMA', 'KECAMATAN KOTA LAMA', 'Jl. Taruna II No. 02 Telp. (0380) 825410 Kupang - NTT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(1, 'Pelaksanaan Vaksinasi', 'Kelurahan Tode Kisar melaksnakan kegiatan vaksinasi di Puskesmas Pasir Panjang, yang dihadiri Bapak Wakil Walikota Kupang untuk memantau kegiatan Vaksinasi', '2021-08-23', 'IMG-20210811-WA0005.jpg'),
(2, 'Pengumpulan Data Vaksin', 'Kami bersama Mahasiswa Magang STIKOM UYELINDO mengambil data warga yang belum maupun sudah vaksin, untuk pelaksanaan Vaksinasi di Puskesmas Pasir Panjang', '2021-08-20', 'IMG-20210813-WA0032.jpg'),
(3, 'Kerja Bakti', 'Pelaksanaan kerja bakti di Pantai Ketapang Satu bersama Dinas Kesehatan Kota Kupang, Kapolsek Kelapa Lima, para staf beserta warga Kel. Tode Kisar.', '2020-04-17', 'IMG_20210327_073249.jpg'),
(4, 'Kegiatan Fogging', 'Pelaksanaan Fogging di Kelurahan Tode Kisar untuk pemberantasan sarang nyamuk DBD (Demam Berdarah).', '2021-07-14', 'IMG-20210217-WA0042.jpg'),
(5, 'Kunjungan Isoman', 'Kelurahan Tode Kisar melakukan kunjungan warga yang sedang menjalankan Isolasi Mandiri (Isoman).', '2021-08-25', 'IMG-20210317-WA0002.jpg'),
(6, 'Musrenbang', 'Kelurahan Tode Kisar melakukan kegiatan Musrenbang Tahun 2021 bersama warga, tokoh masyarakat, tokoh agama, RT/RW, Ketua LPM, Ketua Karang Taruna, anggota DPRD Kota Kupang, Camat Kota Lama, dan Dinas terkait di Aula Kantor Lurah Tode Kisar.', '2021-03-22', 'IMG_8493.JPG'),
(7, 'Penerimaan Bantuan Iisoman', 'Penerimaan bantuan Isoman COVID-19 dari Dinas Sosial untuk warga Kelurahan Tode Kisar.', '2021-08-31', 'IMG_20210819_115336-min.jpg'),
(8, 'Penyerahan bantuan isoman', 'Penyerahan bantuan Isoman Covid-19 kepada warga kelurahan tode kisar', '2021-09-06', 'IMG-20210810-WA0060.jpg'),
(9, 'Penyerahan Kunci Rumah', 'Penyerahan Kunci Rumah Ibu Anike Adu yang langsung diserahkan oleh Walikota Kupang beserta Ibu Hilda Manafe, S.E., M.M.  dan dihadiri oleh warga, tokoh masyarakat, tokoh agama, RT/RW, dan camat kota lama', '2021-08-09', 'IMG_20210802_153602.jpg'),
(10, 'POSKO SATGAS 2021', 'Kegiatan Posko SATGAS 2021 yang dilakukan di Kelurahan Tode Kisar dalam rangka meningkatnya Covid-19', '2021-09-11', 'IMG-20210816-WA0032.jpg'),
(11, 'KKN Universitas Muhammadiyah Kupang', 'Kegiatan Kuliah Kerja Nyata (KKN) Universitas Muhammadiyah Kupang yang di Kelurahan Tode Kisar selama kurang lebih satu bulan.', '2021-09-02', '20210930_100450.jpg'),
(12, 'Magang STIKOM UYELINDO Kupang', 'Penenyerahan Mahasiswa magang dari STIKOM UYELINDO Kupang di Kantor Lurah Tode Kisar selama kurang lebih tiga bulan', '2021-07-20', 'IMG_20210713_105522.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `status_dikeluarga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `suku` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kategori_usia` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama`, `jenis_kelamin`, `suku`, `tempat_lahir`, `tanggal_lahir`, `kategori_usia`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `kewarganegaraan`, `alamat`) VALUES
(5, '5371032805100019', '5371031303780007', 'Yance Arniawan Joostensz', 'Laki - Laki', '-', 'Kupang', '1978-03-13', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(6, '5371032805100019', '5371034909840004', 'Silva Elsiana Ale Holbala', 'Perempuan', '-', 'Kupang', '1984-09-09', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WNI', 'RT 001 / RW 001'),
(7, '5371032805100019', '5371035904090001', 'Joransil putri Joostenz', 'Perempuan', '-', 'Kupang', '2009-04-19', 'Remaja (11 - 16th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(8, '5371032805100019', '5371064810110002', 'Jizyalmunia Patrisila Joostenz', 'Perempuan', '-', 'Kupang', '2011-10-08', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(9, '5371032805100019', '537103570510001', 'Jezyenia Aneska Joostenz', 'Perempuan', '-', 'Kupang', '2010-05-17', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(10, '5371032805100019', '5371064604140001', 'Chaterin Evelyn Ivana Joostensz', 'Perempuan', '-', 'Kupang', '2014-04-06', 'Anak - Anak (6 - 10th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(11, '5371030909080004', '5371036212530002', 'Marselina Foenale', 'Perempuan', 'Rote', 'Rote', '1953-12-22', 'Lansia (60th ke atas)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(12, '5371030909080004', '5371065006660001', 'Hanna Juliana Foenale', 'Perempuan', 'Rote', 'Rote', '1966-06-10', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTP / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(13, '5371030909080004', '5371064505700001', 'Haryani', 'Perempuan', '-', 'Jateng', '1970-05-05', 'Orang Tua (31 - 59th)', 'Katolik', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(14, '5371030909080004', '5371036909800007', 'Ernawati M. Fanggidae', 'Perempuan', 'Rote', 'Rote', '1980-09-29', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(15, '5371030909080004', '5371060807890001', 'Adi M. Fanggidae', 'Laki - Laki', 'Rote', 'Rote', '1989-07-09', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(16, '5371030909080004', '5371064802940001', 'Febriyani M. Fanggidae', 'Perempuan', 'Rote', 'Rote', '1994-02-08', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(17, '5371060912110001', '5371032509850006', 'Godlief Eferly Joostensz ', 'Laki - Laki', '-', 'Kupang', '1985-09-25', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTP / SEDERAJAT', 'KARYAWAN SWASTA', 'WNI', 'RT 001 / RW 001'),
(18, '5371060912110001', '5371065111810001', 'Christiana Wardhany', 'Perempuan', '-', 'Denpasar', '1981-11-11', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WNI', 'RT 001 / RW 001'),
(19, '5371060912110001', '5371060302100001', 'Ryuken Ricardo Joostensz', 'Laki - Laki', '-', 'Sukabumi', '2010-02-03', 'Remaja (11 - 16th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(20, '5371060912110001', '5371065012110003', 'Ibanez Anastasya Joostensz', 'Perempuan', '-', 'Kupang', '2011-12-10', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(21, '5371040909080008', '5371942006770006', 'Solagratia Ratu Edo', 'Laki - Laki', '-', 'Kupang', '1977-06-20', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(22, '5371040909080008', '5371035908620002', 'Marleni Yarti Helsinia Joostensz', 'Perempuan', '-', 'Kupang', '1982-08-29', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'LAINNYA', 'WNI', 'RT 001 / RW 001'),
(23, '5371040909080008', '5371031206020003', 'Petryck Dominick Ratu Edo', 'Laki - Laki', '-', 'Kupang', '2002-05-12', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(24, '5371040909080008', '5371036083050003', 'Marna Grambia Ratu Edo', 'Perempuan', '-', 'Kupang', '2005-03-20', 'Remaja (11 - 16th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(25, '5371040909080008', '5371066807060001', 'Gavrilla Ratu Edo', 'Perempuan', '-', 'Kupang', '2006-07-28', 'Remaja (11 - 16th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(26, '5371040909080008', '5371062210110001', 'Lyonel Ratu Edo', 'Laki - Laki', '-', 'Kupang', '2011-10-22', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(27, '5371040909080008', '5371068110158000', 'Lovely Henchornisia Ratu Edo', 'Perempuan', '-', 'Kupang', '2015-10-21', 'Anak - Anak (6 - 10th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(28, '5371060506130014', '5371060804850002', 'Deky Ronimus Fanggidae', 'Laki - Laki', '-', 'Kolobolon', '1985-04-08', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'DIPLOMA IV / STRATA I', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(29, '5371060506130014', '5371036707890003', 'Yulia Meknel Ga Bani, S.Pd.', 'Perempuan', '-', 'Kupang', '1988-07-27', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'DIPLOMA IV / STRATA I', 'LAINNYA', 'WNI', 'RT 001 / RW 001'),
(30, '5371060506130014', '5371068108150001', 'Alvina Lavigai Fanggidae', 'Perempuan', '-', 'Kupang', '2015-08-21', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(31, '5371060506130014', '5371065212130001', 'Christabela Pray Fanggidae', 'Perempuan', '-', 'Kupang', '2013-12-12', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(32, '5371060911120002', '5371065002950001', 'Febry Shiyamsudin', 'Laki - Laki', '-', 'Ende', '1995-02-10', 'Dewasa (17 - 30th)', 'Islam', 'SLTP / SEDERAJAT', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(33, '5371060911120002', '5371065609970001', 'Zhahrotin Jamilah', 'Perempuan', '-', 'Kupang', '1997-09-16', 'Dewasa (17 - 30th)', 'Islam', 'SLTP / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(34, '5371060911120002', '5371063005000001', 'Muhammad Asroqi', 'Laki - Laki', '-', 'Kupang', '2000-05-30', 'Dewasa (17 - 30th)', 'Islam', 'BELUM TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(35, '5371031911100021', '5371032311700002', 'Muslik Sony', 'Laki - Laki', '-', 'Jombang', '1970-11-23', 'Orang Tua (31 - 59th)', 'Islam', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(36, '5371031911100021', '5371035201740002', 'Vonny', 'Perempuan', '-', 'Solo', '1974-01-12', 'Orang Tua (31 - 59th)', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WNI', 'RT 001 / RW 001'),
(37, '5371031911100021', '5371035207930006', 'Sonya Yulia', 'Perempuan', '-', 'Kupang', '1993-07-12', 'Dewasa (17 - 30th)', 'Islam', 'SLTA / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(38, '5371031911100021', '5371031802980006', 'Amin Kuncoro', 'Laki - Laki', '-', 'Kupang', '1998-02-18', 'Dewasa (17 - 30th)', 'Islam', 'TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(39, '5371031911100021', '5371061902120001', 'Satria Valentino Baaqir', 'Laki - Laki', '-', 'Kupang', '2012-02-19', 'Anak - Anak (6 - 10th)', 'Islam', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(40, '5371062212160004', '5371032803950004', 'Herman J. Joostensz', 'Laki - Laki', '-', 'Kupang', '1995-03-28', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'LAINNYA', 'WNI', 'RT 001 / RW 001'),
(41, '5371062106190008', '5371065511600001', 'Yohana Ludji', 'Perempuan', '-', 'Sabu', '1960-11-15', 'Lansia (60th ke atas)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(42, '5371030806100005', '5371031111720009', 'Forkes Rogel Barnabas Daulika', 'Laki - Laki', '-', 'Kupang', '1972-11-11', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(43, '5371030806100005', '5371035603780010', 'Tinneke Marlisye Joostensz Ahab', 'Perempuan', '-', 'Kupang', '1978-03-16', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WNI', 'RT 001 / RW 001'),
(44, '5371030806100005', '5371033008990002', 'Andry Ronaldo Humau', 'Laki - Laki', '-', 'Kupang', '1999-08-30', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTP / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(45, '5371030806100005', '5371036007030002', 'Dewy Julianti Ahab Lisin', 'Laki - Laki', '-', 'Kupang', '2003-07-20', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(46, '5371030806100005', '5371034811920002', 'Maria Novita Inya Buku', 'Perempuan', '-', 'Kupang', '1992-11-08', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'DIPLOMA IV / STRATA I', 'LAINNYA', 'WNI', 'RT 001 / RW 001'),
(47, '5371030806100005', '5371060610930003', 'Arif Arianto Lisin', 'Laki - Laki', '-', 'Kupang', '1993-06-10', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(48, '5371032212071881', '5371032504710001', 'Sutarno', 'Laki - Laki', '-', 'Lamongan', '1971-04-25', 'Orang Tua (31 - 59th)', 'Islam', 'TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(49, '5371032212071881', '5371035601720002', 'Sulastri', 'Perempuan', '-', 'Lamongan', '1972-01-16', 'Orang Tua (31 - 59th)', 'Islam', 'TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(50, '5371032212071881', '5371035305030004', 'Kesi Maulida Ningsih', 'Perempuan', '-', 'Lamongan', '2003-05-12', 'Dewasa (17 - 30th)', 'Islam', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(51, '5371032212071881', '5371066207890002', 'Puput Melati', 'Perempuan', '-', 'Lamongan', '1989-07-22', 'Orang Tua (31 - 59th)', 'Islam', 'SLTA / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(52, '5371061905200002', '5371030811620004', 'Matheos Tuflasa', 'Laki - Laki', '-', 'Ende', '1962-11-08', 'Lansia (60th ke atas)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'RT 001 / RW 001'),
(53, '5371061905200002', '5371034205720006', 'Mariam Djari', 'Perempuan', '-', 'Kupang', '1972-05-02', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTP / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WNI', 'RT 001 / RW 001'),
(54, '5371061905200002', '537103640494006', 'Lydia Arini Tuflasa', 'Perempuan', '-', 'Kupang', '1994-04-24', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', 'WNI', 'RT 001 / RW 001'),
(55, '5371061905200002', '5371035303960004', 'Anita Enggiyani Tuflasa', 'Perempuan', '-', 'Kupang', '1996-01-31', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', 'WNI', 'RT 001 / RW 001'),
(56, '5371061905200002', '5371035111980004', 'Novita Stelamaris Tuflasa', 'Perempuan', '-', 'Kupang', '1998-11-11', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', 'WNI', 'RT 001 / RW 001'),
(57, '5371061905200002', '5371035705020002', 'Meydel Clara Tufllasa', 'Perempuan', '-', 'Kupang', '2002-05-17', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTP / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(58, '5371061905200002', '5371034109070004', 'Airin Tuflasa', 'Perempuan', '-', 'Kupang', '2007-09-01', 'Remaja (11 - 16th)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(59, '5371061002160004', '5371034910820008', 'Transye Marhansye Joostensz', 'Perempuan', '-', 'Kupang', '1982-10-09', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(60, '5371061002160004', '5371061606150001', 'Yonadab Gilbert Rido Joostensz', 'Laki - Laki', '-', 'Kupang', '2016-06-16', 'Anak - Anak (6 - 10th)', 'Kristen Protestan', 'TIDAK / BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(61, '5371032312074112', '5371032311420001', 'Nimrod Nicolas Foenale', 'Laki - Laki', 'Rote', 'Rote', '1942-11-23', 'Lansia (60th ke atas)', 'Kristen Protestan', 'DIPLOMA IV / STRATA I', 'PENSIUNAN', 'WNI', 'RT 001 / RW 001'),
(62, '5371032312074112', '5371035205490001', 'Yosina Foenale Manubulu', 'Perempuan', 'Rote', 'Rote', '1949-08-12', 'Lansia (60th ke atas)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WNI', 'RT 001 / RW 001'),
(63, '5371032312074112', '5371031810730001', 'Minkers Paulbi Reiner Foenale', 'Laki - Laki', '-', 'Soe', '1973-10-18', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'BELUM / TIDAK BEKERJA', 'WNI', 'RT 001 / RW 001'),
(64, '5371032312074112', '5371035801780004', 'Kristina Syusminova Foenale', 'Perempuan', '-', 'Waikabubak', '1978-01-18', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'AKADEMI / DIPLOMA III / S. MUD', 'KARYAWAN SWASTA', 'WNI', 'RT 001 / RW 001'),
(65, '5371032312074112', '5371030704870005', 'Apron Stefanus Foenale', 'Laki - Laki', '-', 'Kupang', '1990-04-07', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(66, '5371032312074112', '5371031410960003', 'Dayvan Sieno Ardiandro Foenale', 'Laki - Laki', '-', 'Probolinggo', '1996-10-14', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(67, '5371032312074112', '5371032302980002', 'Raynaldo Ardiandra Foenale', 'Laki - Laki', '-', 'Probolinggo', '1998-02-23', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'TAMAT SD / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001'),
(68, '5371032312074373', '5371031101520001', 'Albert Sitanaya', 'Laki - Laki', '-', 'Kupang', '1952-01-11', 'Lansia (60th ke atas)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'PENSIUNAN', 'WNI', 'RT 001 / RW 001'),
(69, '5371032312074112', '5371034610950005', 'Rulofye Marlise Sitanaya', 'Perempuan', '-', 'Kupang', '1995-10-06', 'Dewasa (17 - 30th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'PELAJAR / MAHASISWA', 'WNI', 'RT 001 / RW 001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_belum_menikah`
--

CREATE TABLE `sk_belum_menikah` (
  `id_surat` int(60) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nik` varchar(18) NOT NULL,
  `no_kk` varchar(18) NOT NULL,
  `nama_masyarakat` varchar(60) NOT NULL,
  `jk` varchar(60) NOT NULL,
  `suku` varchar(60) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kategori_usia` varchar(60) NOT NULL,
  `agama` varchar(60) NOT NULL,
  `pendidikan` varchar(60) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `kewarganegaraan` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_belum_menikah`
--

INSERT INTO `sk_belum_menikah` (`id_surat`, `no_surat`, `tanggal_surat`, `nik`, `no_kk`, `nama_masyarakat`, `jk`, `suku`, `tempat_lahir`, `tanggal_lahir`, `kategori_usia`, `agama`, `pendidikan`, `pekerjaan`, `kewarganegaraan`, `alamat`, `tujuan_surat`, `nama`, `nip`, `jabatan`) VALUES
(5, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-09-30', '1234567891012133', '1234567891011133', 'Qurnias Kore Nguru', 'Laki - Laki', 'Sabu', 'Sabu', '1975-07-21', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'Jl. Taruna 02 RT.006 / RW.002 Kelurahan Tode Kisar, Kecamatan Kota Lama â€“ Kota Kupang', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '34444444', 'LURAH TODE KISAR'),
(6, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-09-30', '1312398219388919', '1234567891011133', 'jkjkjkjkjskd', 'Laki - Laki', 'Kisar', 'Kupang', '1987-02-01', 'Dewasa (17 - 30th)', 'Katolik', 'DIPLOMA IV / STRATA I', 'LAINNYA', 'WNI', 'Jl. Taruna 02 RT.006 / RW.002 Kelurahan Tode Kisar, Kecamatan Kota Lama â€“ Kota Kupang', '', 'BUGAL D. I. B MAUTA, S. Kom', '197312272002121006', 'LURAH TODE KISAR'),
(7, 'Kel. Todkis.477.1/ 25 / X / 2021', '2021-10-04', '1234567891012133', '1234567891011133', 'Qurnias Kore Nguru', 'Laki - Laki', 'Sabu', 'Sabu', '1975-07-21', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'Jl. Taruna 02 RT.006 / RW.002 Kelurahan Tode Kisar, Kecamatan Kota Lama â€“ Kota Kupang', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '2354764758757', 'LURAH TODE KISAR'),
(8, 'Kel. Todkis.477.1/ 25 / X / 2021', '2021-10-04', '1234567891012133', '1234567891011133', 'Qurnias Kore Nguru', 'Laki - Laki', 'Sabu', 'Sabu', '1975-07-21', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'Jl. Taruna 02 RT.006 / RW.002 Kelurahan Tode Kisar, Kecamatan Kota Lama â€“ Kota Kupang', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '2152657', 'LURAH TODE KISAR'),
(9, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', '1234567891012133', '1234567891011133', 'Qurnias Kore Nguru', 'Laki - Laki', 'Sabu', 'Sabu', '1975-07-21', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'SLTA / SEDERAJAT', 'WIRASWASTA', 'WNI', 'cunruwhgnvqg89q', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR'),
(10, '31/LP3M/STIKOM/UI/VII/2021', '2021-12-30', '5371031303780007', '5371032805100019', 'Yance Arniawan Joostensz', 'Laki - Laki', '-', 'Kupang', '1978-03-13', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'oebufu\r\noebufu', 'yufjfkk', 'Yohana ', '1823813', 'lurah'),
(11, 'SURAT MASUK / 01 / I', '2022-06-24', '5371031303780007', '5371032805100019', 'Yance Arniawan Joostensz', 'Laki - Laki', '-', 'Kupang', '1978-03-13', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'Kupang', 'Makan', 'Petra Andri', '226', 'Kepala'),
(12, 'SURAT MASUK / 01 / I', '2022-07-02', '5371031303780007', '5371032805100019', 'Yance Arniawan Joostensz', 'Laki - Laki', '-', 'Kupang', '1978-03-13', 'Orang Tua (31 - 59th)', 'Kristen Protestan', 'BELUM TAMAT SD / SEDERAJAT', 'WIRASWASTA', 'WNI', 'adsferwh6', 'Makan', 'Mie Selera Pedas', '226', 'Kepala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_domisili`
--

CREATE TABLE `sk_domisili` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_masyarakat` varchar(100) NOT NULL,
  `jk` varchar(60) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(60) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat_ktp_kk` varchar(500) NOT NULL,
  `alamat_domisili` varchar(500) NOT NULL,
  `nama_penanggung_jawab` varchar(100) NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_domisili`
--

INSERT INTO `sk_domisili` (`id_surat`, `no_surat`, `tanggal_surat`, `nik`, `no_kk`, `nama_masyarakat`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat_ktp_kk`, `alamat_domisili`, `nama_penanggung_jawab`, `tujuan_surat`, `nama`, `nip`, `jabatan`) VALUES
(38, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', '1234567891012144', '1234567891011144', 'Markus Djari', 'Laki - Laki', 'Sabu', '1938-06-06', 'Kristen Protestan', 'WIRASWASTA', 'jbcuihiuhuihgu', 'gcbhb2h8gh8', 'Ibu Tifanny Taru sebagai Wali', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 00', 'LURAH TODE KISAR'),
(39, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', '1234567891012133', '1234567891011133', 'Qurnias Kore Nguru', 'Laki - Laki', 'Sabu', '1975-07-21', 'Kristen Protestan', 'WIRASWASTA', 'fnrngoio', 'fqhntughy', 'Ibu Tifanny Taru sebagai Wali', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 00', 'LURAH TODE KISAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kelahiran`
--

CREATE TABLE `sk_kelahiran` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(300) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_masyarakat` varchar(100) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `ktp_ayah` varchar(30) NOT NULL,
  `kk_ayah` varchar(30) NOT NULL,
  `kewarganegaraan_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(500) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `ktp_ibu` varchar(30) NOT NULL,
  `kk_ibu` varchar(30) NOT NULL,
  `kewarganegaraan_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_kelahiran`
--

INSERT INTO `sk_kelahiran` (`id_surat`, `no_surat`, `tanggal_surat`, `nama_masyarakat`, `jk`, `tempat_lahir`, `tanggal_lahir`, `nama_ayah`, `agama_ayah`, `pekerjaan_ayah`, `ktp_ayah`, `kk_ayah`, `kewarganegaraan_ayah`, `alamat_ayah`, `nama_ibu`, `agama_ibu`, `pekerjaan_ibu`, `ktp_ibu`, `kk_ibu`, `kewarganegaraan_ibu`, `alamat_ibu`, `nama`, `nip`, `jabatan`) VALUES
(28, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'jkjkjkjkjskd', 'Laki - Laki', 'Kupang', '1987-02-01', 'sfnrngtp', 'kcnit', 'jhvijpbyr', '2447585', '465767698', 'nfoireirqy', 'uhfirijisbni', 'nvohhtigitjh', 'FVHHITAH', 'jggijsy', '757776', '74757696', 'udhghtighi', 'dhfghthoiy', 'BUGAL D. I. B MAUTA, S. Kom', '464575679', 'LURAH TODE KISAR'),
(29, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'jkjkjkjkjskd', 'Laki - Laki', 'Kupang', '1987-02-01', 'sfnrngtp', 'kcnit', 'jhvijpbyr', '2447585', '465767698', 'nfoireirqy', 'uhfirijisbni', 'nvohhtigitjh', 'FVHHITAH', 'jggijsy', '757776', '74757696', 'udhghtighi', 'dhfghthoiy', 'BUGAL D. I. B MAUTA, S. Kom', '464575679', 'LURAH TODE KISAR'),
(30, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'jkjkjkjkjskd', 'Laki - Laki', 'Kupang', '1987-02-01', 'sfnrngtp', 'kcnit', 'jhvijpbyr', '2447585', '465767698', 'nfoireirqy', 'uhfirijisbni', 'nvohhtigitjh', 'FVHHITAH', 'jggijsy', '757776', '74757696', 'udhghtighi', 'dhfghthoiy', 'BUGAL D. I. B MAUTA, S. Kom', '464575679', 'LURAH TODE KISAR'),
(31, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'jkjkjkjkjskd', 'Laki - Laki', 'Kupang', '1987-02-01', 'sfnrngtp', 'kcnit', 'jhvijpbyr', '2447585', '465767698', 'nfoireirqy', 'uhfirijisbni', 'nvohhtigitjh', 'FVHHITAH', 'jggijsy', '757776', '74757696', 'udhghtighi', 'dhfghthoiy', 'BUGAL D. I. B MAUTA, S. Kom', '464575679', 'LURAH TODE KISAR'),
(32, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'jkjkjkjkjskd', 'Laki - Laki', 'Kupang', '1987-02-01', 'sfnrngtp', 'kcnit', 'jhvijpbyr', '2447585', '465767698', 'nfoireirqy', 'uhfirijisbni', 'nvohhtigitjh', 'FVHHITAH', 'jggijsy', '757776', '74757696', 'udhghtighi', 'dhfghthoiy', 'BUGAL D. I. B MAUTA, S. Kom', '464575679', 'LURAH TODE KISAR'),
(33, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', 'Markus Djari', 'Laki - Laki', 'Sabu', '1938-06-06', 'sfnrngtp', 'kcnit', 'jhvijpbyr', '745987767', '64647563567', 'nfoireirqy', 'hdbfierbiugh', 'nvohhtigitjh', 'FVHHITAH', 'jggijsy', '678641657647', '6574165674', 'udhghtighi', 'hfgithughi', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kelakuan_baik`
--

CREATE TABLE `sk_kelakuan_baik` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(300) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_masyarakat` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(300) NOT NULL,
  `agama` varchar(300) NOT NULL,
  `pekerjaan` varchar(300) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tujuan_surat` varchar(500) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_kelakuan_baik`
--

INSERT INTO `sk_kelakuan_baik` (`id_surat`, `no_surat`, `tanggal_surat`, `nama_masyarakat`, `nik`, `jk`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `tujuan_surat`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'jkjkjkjkjskd', '1312398219388919', 'Laki - Laki', 'Kupang', '1987-02-01', 'WNI', 'Katolik', 'LAINNYA', 'dfufubgr\r\nbvubvubaoi', 'melengkapi administrasi dalam mengikuti tes bintara polwan pada Polisi Republik Indonesia ( POLRI )', 'BUGAL D. I. B MAUTA, S. Kom', '2174837552357', 'LURAH TODE KISAR'),
(2, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-01', 'Qurnias Kore Nguru', '1234567891012133', 'Laki - Laki', 'Sabu', '1975-07-21', 'WNI', 'Kristen Protestan', 'WIRASWASTA', 'cgxjhchvjkbj', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '454677578', 'LURAH TODE KISAR'),
(3, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-02', 'jkjkjkjkjskd', '1312398219388919', 'Laki - Laki', 'Kupang', '1987-02-01', 'WNI', 'Katolik', '', 'nhuihotgigjtiwwjg', '', 'BUGAL D. I. B MAUTA, S. Kom', '477880909', 'LURAH TODE KISAR'),
(4, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-02', 'jkjkjkjkjskd', '1312398219388919', 'Laki - Laki', 'Kupang', '1987-02-01', 'WNI', 'Katolik', '', 'nhuihotgigjtiwwjg', '', 'BUGAL D. I. B MAUTA, S. Kom', '477880909', 'LURAH TODE KISAR'),
(5, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-13', 'Qurnias Kore Nguru', '1234567891012133', 'Laki - Laki', 'Sabu', '1975-07-21', 'WNI', 'Kristen Protestan', 'WIRASWASTA', 'gfctvtiui', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR'),
(6, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-13', 'Qurnias Kore Nguru', '1234567891012133', 'Laki - Laki', 'Sabu', '1975-07-21', 'WNI', 'Kristen Protestan', 'WIRASWASTA', 'gfctvtiui', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR'),
(7, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', 'Markus Djari', '1234567891012144', 'Laki - Laki', 'Sabu', '1938-06-06', 'WNI', 'Kristen Protestan', 'WIRASWASTA', 'dhvrvoht', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kematian`
--

CREATE TABLE `sk_kematian` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(300) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_masyarakat` varchar(300) NOT NULL,
  `tempat_lahir` varchar(300) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(60) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `alamat_meninggal` varchar(500) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `penyebab_meninggal` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_kematian`
--

INSERT INTO `sk_kematian` (`id_surat`, `no_surat`, `tanggal_surat`, `nama_masyarakat`, `tempat_lahir`, `tanggal_lahir`, `jk`, `pekerjaan`, `agama`, `alamat`, `alamat_meninggal`, `tanggal_meninggal`, `penyebab_meninggal`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-02', 'jkjkjkjkjskd', 'Kupang', '1987-02-01', 'Laki - Laki', 'LAINNYA', 'Katolik', 'givkjblnlnpp', 'hoijiippo', '2021-10-02', 'ubububbjk', 'BUGAL D. I. B MAUTA, S. Kom', '78900766', 'LURAH TODE KISAR'),
(2, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', 'Markus Djari', 'Sabu', '1938-06-06', 'Laki - Laki', 'WIRASWASTA', 'Kristen Protestan', 'jfvnuhbuhtu', 'hginthnguhuti2', '2021-10-14', 'ubububbjk', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_pindah`
--

CREATE TABLE `sk_pindah` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(300) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_masyarakat` varchar(300) NOT NULL,
  `tempat_lahir` varchar(500) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pekerjaan` varchar(300) NOT NULL,
  `pendidikan_terakhir` varchar(300) NOT NULL,
  `kelurahan` varchar(500) NOT NULL,
  `kecamatan` varchar(300) NOT NULL,
  `kabupaten_kota` varchar(300) NOT NULL,
  `provinsi` varchar(300) NOT NULL,
  `kelurahanP` varchar(500) NOT NULL,
  `kecamatanP` varchar(300) NOT NULL,
  `kabupaten_kotaP` varchar(300) NOT NULL,
  `provinsiP` varchar(300) NOT NULL,
  `alasan_pindah` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_pindah`
--

INSERT INTO `sk_pindah` (`id_surat`, `no_surat`, `tanggal_surat`, `nama_masyarakat`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nik`, `agama`, `kewarganegaraan`, `status`, `pekerjaan`, `pendidikan_terakhir`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kelurahanP`, `kecamatanP`, `kabupaten_kotaP`, `provinsiP`, `alasan_pindah`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', 'Markus Djari', 'Sabu', '1938-06-06', 'Laki - Laki', '1234567891012144', 'Kristen Protestan', 'WNI', 'Sudah Kawin', 'WIRASWASTA', 'TAMAT SD / SEDERAJAT', 'dlkvnlsnvld', 'nfiooisnbor', 'nvosoit', 'voinoata', 'goisnhoitw', 'vab gtogbwohh', 'jzfhb ', 'jhgvwonuwo6vu', 'kjvnjtjbt', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_tidak_mampu`
--

CREATE TABLE `sk_tidak_mampu` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(300) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_masyarakat` varchar(300) NOT NULL,
  `tempat_lahir` varchar(300) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `pekerjaan` varchar(300) NOT NULL,
  `agama` varchar(300) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tujuan_surat` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_tidak_mampu`
--

INSERT INTO `sk_tidak_mampu` (`id_surat`, `no_surat`, `tanggal_surat`, `nama_masyarakat`, `tempat_lahir`, `tanggal_lahir`, `jk`, `pekerjaan`, `agama`, `nik`, `no_kk`, `alamat`, `tujuan_surat`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-02', 'jkjkjkjkjskd', 'Kupang', '1987-02-01', 'Laki - Laki', 'LAINNYA', 'Katolik', '1312398219388919', '1234567891011133', 'hgihegoihsrtoihiorisrk', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '75478557642', 'LURAH TODE KISAR'),
(2, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-05', 'Qurnias Kore Nguru', 'Sabu', '1975-07-21', 'Laki - Laki', 'WIRASWASTA', 'Kristen Protestan', '1234567891012133', '1234567891011133', 'fyuffuigoi', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR'),
(3, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', 'Markus Djari', 'Sabu', '1938-06-06', 'Laki - Laki', 'WIRASWASTA', 'Kristen Protestan', '1234567891012144', '1234567891011144', 'dbvbrouvbot', 'untuk melengkapi administrasi dalam pengurusan pembelian rumah pada Bank Mandiri Kupang', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_usaha`
--

CREATE TABLE `sk_usaha` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(300) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_masyarakat` varchar(300) NOT NULL,
  `tempat_lahir` varchar(300) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nama_usaha` varchar(300) NOT NULL,
  `alamat_usaha` varchar(500) NOT NULL,
  `bidang_usaha` varchar(300) NOT NULL,
  `tahun_usaha` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk_usaha`
--

INSERT INTO `sk_usaha` (`id_surat`, `no_surat`, `tanggal_surat`, `nama_masyarakat`, `tempat_lahir`, `tanggal_lahir`, `nik`, `no_kk`, `jk`, `kewarganegaraan`, `agama`, `alamat`, `nama_usaha`, `alamat_usaha`, `bidang_usaha`, `tahun_usaha`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-02', 'jkjkjkjkjskd', 'Kupang', '1987-02-01', '1312398219388919', '1234567891011133', 'Laki - Laki', 'WNI', 'Katolik', 'ehgrNT', 'ihatoijpqjhijwiojh', 'ijhijiwjijpwjuop7joioik6', 'jbgui8', '2018', 'BUGAL D. I. B MAUTA, S. Kom', '13546589', 'LURAH TODE KISAR'),
(2, 'Kel. Todkis.477.1/ 25 / X / 2021', '2021-10-04', 'jkjkjkjkjskd', 'Kupang', '1987-02-01', '1312398219388919', '1234567891011133', 'Laki - Laki', 'WNI', 'Katolik', 'fyfufgyyb8', 'uggoigog', 'ff877by98', 'jbgui8', '2018', 'BUGAL D. I. B MAUTA, S. Kom', '3545759', 'LURAH TODE KISAR'),
(3, 'Kel. Todkis.477.1/ 25 / X / 2021', '2021-10-04', 'jkjkjkjkjskd', 'Kupang', '1987-02-01', '1312398219388919', '1234567891011133', 'Laki - Laki', 'WNI', 'Katolik', 'fyfufgyyb8', 'uggoigog', 'ff877by98', 'jbgui8', '2018', 'BUGAL D. I. B MAUTA, S. Kom', '3545759', 'LURAH TODE KISAR'),
(4, 'Kel. Todkis.477.1/ 25 / VII / 2021', '2021-10-14', 'Markus Djari', 'Sabu', '1938-06-06', '1234567891012144', '1234567891011144', 'Laki - Laki', 'WNI', 'Kristen Protestan', 'nr', 'hughtehgi', 'bcuiut', 'jbgui8', '2018', 'BUGAL D. I. B MAUTA, S. Kom', '19731227 200212 1 006', 'LURAH TODE KISAR');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `no_kk` (`no_kk`),
  ADD KEY `no_kk_2` (`no_kk`);

--
-- Indeks untuk tabel `sk_belum_menikah`
--
ALTER TABLE `sk_belum_menikah`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_domisili`
--
ALTER TABLE `sk_domisili`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_kelahiran`
--
ALTER TABLE `sk_kelahiran`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_kelakuan_baik`
--
ALTER TABLE `sk_kelakuan_baik`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_kematian`
--
ALTER TABLE `sk_kematian`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_pindah`
--
ALTER TABLE `sk_pindah`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_tidak_mampu`
--
ALTER TABLE `sk_tidak_mampu`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `sk_usaha`
--
ALTER TABLE `sk_usaha`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `sk_belum_menikah`
--
ALTER TABLE `sk_belum_menikah`
  MODIFY `id_surat` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sk_domisili`
--
ALTER TABLE `sk_domisili`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `sk_kelahiran`
--
ALTER TABLE `sk_kelahiran`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `sk_kelakuan_baik`
--
ALTER TABLE `sk_kelakuan_baik`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sk_kematian`
--
ALTER TABLE `sk_kematian`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sk_pindah`
--
ALTER TABLE `sk_pindah`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sk_tidak_mampu`
--
ALTER TABLE `sk_tidak_mampu`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sk_usaha`
--
ALTER TABLE `sk_usaha`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
