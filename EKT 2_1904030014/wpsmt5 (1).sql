-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 06:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'ashilla zandara', 'jayapura 5', 'perempuan', 'islam', 'sman 6 jayapura', 'foto2.png'),
(2, 'ryan augustino', 'kelapa dua', 'laki-laki', 'protestan', 'sman 5 karawaci', 'foto1.png'),
(3, 'xaverio alaska', 'cijantung no.32', 'laki-laki', 'katolik', 'sman 1 jakarta', 'foto1.png'),
(4, 'shaka ardita', 'jl. buah batu no.10', 'perempuan', 'hindu', 'sman 2 bandung', 'foto2.png'),
(5, 'celline ardiwinata', 'bintaro', 'perempuan', 'konghucu', 'sman 6 tangerang', 'foto2.png'),
(6, 'bagaskara adyatama', 'pegangsan no.1', 'laki-laki', 'islam', 'sman 1 tangerang', 'foto1.png');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `foto_dosen` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nidn` int(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat_rumah` varchar(200) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikanS1` varchar(40) NOT NULL,
  `pendidikanS2` varchar(40) NOT NULL,
  `pendidikanS3` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`foto_dosen`, `nama`, `nidn`, `jenis_kelamin`, `email`, `alamat_rumah`, `agama`, `pendidikanS1`, `pendidikanS2`, `pendidikanS3`) VALUES
('foto2.png', 'Marsella Oktavia', 190875, 'perempuan', 'marsellaokt10@gmail.com', 'jl. kisamaun no. 9', 'protestan', 'S1 Bahasa Jerman', 'S2 Bahasa Perancis', 'S3 Bahasa Jepang'),
('foto1.png', 'Abrega Prasta Astaro', 1104039, 'laki-laki', 'prastaxzdklin@gmail.com', 'perum 5', 'islam', 'S1 Arsitektur', 'S2 Teknik Sipil', 'S3 Manajemen'),
('foto2.png', 'Zefanya Ariska', 2560751, 'perempuan', 'zeezee_@gmail.com', 'perum 1', 'konghucu', 'S1 Manajemen dan Bisnis', 'S2 Akuntansi', 'S3 Aktuaria'),
('foto1.png', 'Arsen Widjayanto', 8344670, 'laki-laki', 'arto_anto@gmail.com', 'Citra Raya Cikupa', 'hindu', 'S1 Teknik Informatika', 'S2 Teknik Informatika', 'S3 Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  MODIFY `nidn` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8344671;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
