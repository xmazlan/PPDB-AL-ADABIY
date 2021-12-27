-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 04:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_unbk`
--

CREATE TABLE `tbl_nilai_unbk` (
  `id_nilai_unbk` int(11) NOT NULL,
  `mapel_unbk` varchar(100) DEFAULT NULL,
  `nilai_unbk` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_unbk`
--

INSERT INTO `tbl_nilai_unbk` (`id_nilai_unbk`, `mapel_unbk`, `nilai_unbk`, `no_pendaftaran`) VALUES
(8, 'Matematika', 80, 'PSB18004001'),
(6, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004001'),
(9, 'Bahasa Indonesia', 80, 'PSB18004001'),
(10, 'Bahasa Inggris', 80, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004002'),
(13, 'Matematika', 80, 'PSB18004002'),
(14, 'Bahasa Indonesia', 80, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 'PSB18004002'),
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004003'),
(17, 'Matematika', 80, 'PSB18004003'),
(18, 'Bahasa Indonesia', 80, 'PSB18004003'),
(19, 'Bahasa Inggris', 80, 'PSB18004003'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004004'),
(22, 'Matematika', 80, 'PSB18004004'),
(23, 'Bahasa Indonesia', 80, 'PSB18004004'),
(24, 'Bahasa Inggris', 80, 'PSB18004004');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_usbn`
--

CREATE TABLE `tbl_nilai_usbn` (
  `id_nilai_usbn` int(10) NOT NULL,
  `mapel_usbn` varchar(100) DEFAULT NULL,
  `nilai_usbn` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_usbn`
--

INSERT INTO `tbl_nilai_usbn` (`id_nilai_usbn`, `mapel_usbn`, `nilai_usbn`, `no_pendaftaran`) VALUES
(1, 'Pendidikan Agama', '80', 'PSB18004003'),
(2, 'PKN', '80', 'PSB18004003'),
(3, 'Bahasa Indonesia', '80', 'PSB18004003'),
(4, 'Bahasa Inggris', '80', 'PSB18004003'),
(5, 'Matematika', '80', 'PSB18004003'),
(6, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004003'),
(7, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004003'),
(8, 'Pendidikan Agama', '80', 'PSB18004004'),
(9, 'PKN', '80', 'PSB18004004'),
(10, 'Bahasa Indonesia', '80', 'PSB18004004'),
(11, 'Bahasa Inggris', '80', 'PSB18004004'),
(12, 'Matematika', '80', 'PSB18004004'),
(13, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004004'),
(14, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004004'),
(15, 'Pendidikan Agama', '70', 'PSB18004001'),
(16, 'PKN', '80', 'PSB18004001'),
(17, 'Bahasa Inggris', '76', 'PSB18004001'),
(18, 'Bahasa Indonesia', '77', 'PSB18004001'),
(19, 'Matematika', '79', 'PSB18004001'),
(20, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004001'),
(21, 'Ilmu Pengetahuan Sosial (IPS)', '78', 'PSB18004001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'SD/Sederajat'),
(2, 'SMP/Sederajat'),
(3, 'SMA/Sederajat'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'D4/S1'),
(8, 'S2'),
(9, 'S3'),
(10, 'Tidak Berpendidikan Formal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `ket_pekerjaan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `ket_pekerjaan`) VALUES
(1, 'Tidak Bekerja', 'ayah'),
(2, 'Pensiunan', 'ayah'),
(3, 'PNS Selain (Guru dan Dokter/Bidan/Perawat)', 'ayah'),
(4, 'PNS', 'ayah'),
(5, 'TNI/POLRI', 'ayah'),
(6, 'Pegawai Swasta', 'ayah'),
(7, 'Wiraswasta', 'ayah'),
(8, 'Pengacara/Hakim/Jaksa/Notaris ', 'ayah'),
(9, 'Seniman/Pelukis/Artis/Sejenis\r\n', 'ayah'),
(10, 'Dokter/Bidan/Perawat', 'ayah'),
(11, 'Pilot/Pramugara', 'ayah'),
(12, 'Pedagang', 'ayah'),
(13, 'Petani/Peternak', 'ayah'),
(14, 'Nelayan', 'ayah'),
(15, 'Buruh (Tani/Pabrik/Bangunan)', 'ayah'),
(16, 'Sopir/Masinis/Kondektur', 'ayah'),
(17, 'Politikus', 'ayah'),
(18, 'Lainnya', 'ayah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id_penghasilan` int(10) NOT NULL,
  `nama_penghasilan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id_penghasilan`, `nama_penghasilan`) VALUES
(1, '< 500rb'),
(2, '500-1jt'),
(3, '1jt-2jt'),
(4, '2jt-3jt'),
(5, '3jt-15t'),
(6, '>5jt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body data-gr-ext-installed=\"\" data-new-gr-c-s-check-loaded=\"14.991.0\">\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Keterangan :</u></strong></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Registrasi daftar ulang dilaksanakan pada tanggal 8 &ndash; 11 Juli 2021&nbsp;pukul 08.00 &ndash; 14.00 </span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;2. Mencetak dan membawa Surat Pengumuman ini sebagai bukti&nbsp; lulus seleksi</span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp; &nbsp; 3.&nbsp;Membawa materi Rp. 6000,- sebanyak 2 lembar</span></span></span></span></p>\r\n</body>\r\n</html>\r\n', '2018-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` int(10) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `semester1` int(10) DEFAULT NULL,
  `semester2` int(10) DEFAULT NULL,
  `semester3` int(10) DEFAULT NULL,
  `semester4` int(10) DEFAULT NULL,
  `semester5` int(10) DEFAULT NULL,
  `rata_rata_nilai` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `mapel`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `rata_rata_nilai`, `no_pendaftaran`) VALUES
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 70, 80, 80, 80, 78, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(14, 'Bahasa Indonesia', 60, 80, 80, 80, 80, 76, 'PSB18004001'),
(13, 'Matematika', 60, 80, 60, 80, 80, 72, 'PSB18004001'),
(12, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(17, 'Ilmu Pengetahuan Sosial (IPS)', 80, 70, 80, 70, 80, 76, 'PSB18004002'),
(18, 'Matematika', 80, 80, 80, 80, 90, 82, 'PSB18004002'),
(19, 'Bahasa Indonesia', 80, 80, 80, 80, 50, 74, 'PSB18004002'),
(20, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004002'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 60, 50, 78, 68, 80, 67, 'PSB18004003'),
(22, 'Ilmu Pengetahuan Sosial (IPS)', 59, 80, 81, 67, 66, 71, 'PSB18004003'),
(23, 'Matematika', 80, 83, 54, 55, 78, 70, 'PSB18004003'),
(24, 'Bahasa Indonesia', 78, 98, 78, 88, 86, 86, 'PSB18004003'),
(25, 'Bahasa Inggris', 89, 89, 88, 80, 80, 85, 'PSB18004003'),
(26, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(27, 'Ilmu Pengetahuan Sosial (IPS)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(28, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(29, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(30, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004004');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `anak_ke` varchar(100) DEFAULT NULL,
  `jml_saudara` varchar(100) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `cita` varchar(100) DEFAULT NULL,
  `paud` varchar(100) DEFAULT NULL,
  `tk` varchar(100) DEFAULT NULL,
  `alamat_siswa` text DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `kab` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `jarak` varchar(100) DEFAULT NULL,
  `trans` varchar(100) DEFAULT NULL,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `status_ayah` varchar(100) DEFAULT NULL,
  `th_lahir_ayah` varchar(10) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` varchar(100) DEFAULT NULL,
  `th_lahir_ibu` varchar(10) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `th_lahir_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_ortu` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `jenjang_sekolah` varchar(100) DEFAULT NULL,
  `lokasi_sekolah` varchar(100) DEFAULT NULL,
  `no_kks` varchar(100) DEFAULT NULL,
  `no_pkh` varchar(100) DEFAULT NULL,
  `no_kip` varchar(100) DEFAULT NULL,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_pendaftaran`, `password`, `nis`, `nisn`, `nik`, `nama_lengkap`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_keluarga`, `anak_ke`, `jml_saudara`, `hobi`, `cita`, `paud`, `tk`, `alamat_siswa`, `jenis_tinggal`, `desa`, `kec`, `kab`, `prov`, `kode_pos`, `jarak`, `trans`, `no_hp_siswa`, `no_kk`, `kepala_keluarga`, `nama_ayah`, `nik_ayah`, `status_ayah`, `th_lahir_ayah`, `pdd_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nik_ibu`, `status_ibu`, `th_lahir_ibu`, `pdd_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nama_wali`, `nik_wali`, `th_lahir_wali`, `pdd_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_ortu`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `jenjang_sekolah`, `lokasi_sekolah`, `no_kks`, `no_pkh`, `no_kip`, `tgl_siswa`, `status_verifikasi`, `status_pendaftaran`) VALUES
(0, '2021-001', '123456789', '', '123456789', '1234567890', 'Test Nama', 'Laki-Laki', 'test t4', '01-01-2000', 'Islam', 'Anak Angkat', '3', '5', '5', '3', '2', '2', 'test lamat', '5', 'test desa', 'test kecamatan', 'test kab', 'test prov', '12345', '1', '1', '0812345678', '1234567890123456', '1234567890123450', 'test ayah', '1234567890123456', '1', '2001', 'S3', 'TNI/POLRI', '>5jt', 'test ibu', '1234567890123452', '1', '2003', 'S2', 'TNI/POLRI', '>5jt', 'test wali', '1234567890123453', '2000', 'Tidak Berpendidikan Formal', 'TNI/POLRI', '3jt-15t', '0812134567898', '1234567890', 'test nama sekolah', 'NEGERI', '2', '4', '-', '-', '-', '2021-09-12 10:11:07', '1', 'tidak lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `kab_sekolah` varchar(100) DEFAULT NULL,
  `ketua_panitia` varchar(100) DEFAULT NULL,
  `nip_ketua` varchar(100) DEFAULT NULL,
  `th_pelajaran` varchar(100) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `kepsek` varchar(100) DEFAULT NULL,
  `nip_kepsek` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `alamat`, `email`, `website`, `telp`, `kab_sekolah`, `ketua_panitia`, `nip_ketua`, `th_pelajaran`, `no_surat`, `kepsek`, `nip_kepsek`, `level`, `tgl_daftar`) VALUES
(1, 'admin', 'admin', 'AL-ADABIY', 'KALIMANTAN', 'ALADABIY@gmail.com', 'ALADABIY.sch.id', '0745 - 33123', 'PONTIANAK', 'Nursilan, S. Pd', '19781234 199803 1 002', '2021-2022', '123/MA.11.12/KP.00.02/IV/2021', 'Lastriani, S. Pd', '19671221 199403 1 002', 'admin', '2018-04-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body data-gr-ext-installed=\"\" data-new-gr-c-s-check-loaded=\"14.991.0\">\r\n<p style=\"margin-left:0in; margin-right:0in\"><u><strong><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">Materi Tes Potensi Akademik</span></span></span></strong></u></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">Bahasa Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">Matematika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">IPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">PAI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Hari Tanggal tes : </u></strong></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;tanggal 3&nbsp;Juli 2021</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Waktu Tes potensi Akademik :</u></strong></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 1&nbsp; : 07.00 - 09.00</span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 2&nbsp; : 09.30 - 11.30</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*<em>catatan : </em></span></span></strong><br />\r\n<strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em>jadwal ujian bisa berubah sewaktu - waktu&nbsp; Update infomasi di web PPDB </em></span></span><em><span style=\"font-size:11.0pt\">peserta ujian datang 15&nbsp; menit sebelum&nbsp;tes dimulai.</span></em></strong></p>\r\n</body>\r\n</html>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2018-04-13 19:07:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
