-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 07:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perumahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_user_bank` varchar(128) NOT NULL,
  `no_rek_bca` int(11) NOT NULL,
  `no_rek_mandiri` int(11) NOT NULL,
  `no_rek_bri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_blok`
--

CREATE TABLE `tb_blok` (
  `id_blok` int(11) NOT NULL,
  `nama_blok` varchar(128) NOT NULL,
  `no_blok` int(11) NOT NULL,
  `luas_blok` int(11) NOT NULL,
  `keamanan` int(1) NOT NULL,
  `pengelolahan_sampah` int(1) NOT NULL,
  `pengelolahan_tandon` int(1) NOT NULL,
  `lapangan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fitur`
--

CREATE TABLE `tb_fitur` (
  `id_fitur` int(11) NOT NULL,
  `id_properti_fitur` int(11) NOT NULL,
  `perlengkapan_dapur` int(1) NOT NULL,
  `alat_pemadam` int(1) NOT NULL,
  `tv` int(1) NOT NULL,
  `ac` int(1) NOT NULL,
  `p3k` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_properti_komentar` int(11) NOT NULL,
  `id_user_komentar` int(11) NOT NULL,
  `komentar_properti` text NOT NULL,
  `rating_properti` int(5) NOT NULL,
  `foto1_komentar` varchar(255) NOT NULL,
  `foto2_komentar` varchar(255) NOT NULL,
  `foto3_komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_properti`
--

CREATE TABLE `tb_properti` (
  `id_properti` int(11) NOT NULL,
  `id_user_properti` int(11) NOT NULL,
  `id_blok_properti` int(11) NOT NULL,
  `nama_properti` varchar(128) NOT NULL,
  `alamat_properti` varchar(128) NOT NULL,
  `kategori_properti` varchar(128) NOT NULL,
  `status_properti` int(2) NOT NULL,
  `kota_properti` varchar(128) NOT NULL,
  `luas_properti` int(11) NOT NULL,
  `luas_tanah_properti` int(11) NOT NULL,
  `tipe_properti` varchar(128) NOT NULL,
  `foto1_properti` varchar(255) NOT NULL,
  `foto2_properti` varchar(255) NOT NULL,
  `foto3_properti` varchar(255) NOT NULL,
  `foto4_properti` varchar(255) NOT NULL,
  `foto5_properti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_properti_beli`
--

CREATE TABLE `tb_properti_beli` (
  `id_properti_beli` int(11) NOT NULL,
  `id_resi_properti_beli` int(11) NOT NULL,
  `id_properti_properti_beli` int(11) NOT NULL,
  `id_user_properti_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_resi`
--

CREATE TABLE `tb_resi` (
  `id_resi` int(11) NOT NULL,
  `id_user_resi` int(11) NOT NULL,
  `id_properti_user` int(11) NOT NULL,
  `tanggal_pembayaran` int(11) NOT NULL,
  `harga_dp` int(11) NOT NULL,
  `foto_resi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `foto_slider` varchar(255) NOT NULL,
  `mini_judul` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `sub_judul` varchar(128) NOT NULL,
  `aktif_slider` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(11) NOT NULL,
  `id_properti_tempat` int(11) NOT NULL,
  `sekolah` int(1) NOT NULL,
  `pasar_modern` int(1) NOT NULL,
  `pasar_tradisional` int(1) NOT NULL,
  `rumah_sakit` int(1) NOT NULL,
  `hotel` int(1) NOT NULL,
  `tempat_kuliner` int(1) NOT NULL,
  `bengkel` int(1) NOT NULL,
  `laundy` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_user_testimoni` int(11) NOT NULL,
  `rating_testimoni` int(5) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_bank_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `alamat_user` varchar(128) NOT NULL,
  `tanggal_lahir` int(11) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tentang_user` text NOT NULL,
  `tanggal_daftar` int(11) NOT NULL,
  `aktif_akun` int(1) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_blok`
--
ALTER TABLE `tb_blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `tb_fitur`
--
ALTER TABLE `tb_fitur`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_properti`
--
ALTER TABLE `tb_properti`
  ADD PRIMARY KEY (`id_properti`);

--
-- Indexes for table `tb_properti_beli`
--
ALTER TABLE `tb_properti_beli`
  ADD PRIMARY KEY (`id_properti_beli`);

--
-- Indexes for table `tb_resi`
--
ALTER TABLE `tb_resi`
  ADD PRIMARY KEY (`id_resi`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_blok`
--
ALTER TABLE `tb_blok`
  MODIFY `id_blok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_fitur`
--
ALTER TABLE `tb_fitur`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_properti`
--
ALTER TABLE `tb_properti`
  MODIFY `id_properti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_properti_beli`
--
ALTER TABLE `tb_properti_beli`
  MODIFY `id_properti_beli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_resi`
--
ALTER TABLE `tb_resi`
  MODIFY `id_resi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
