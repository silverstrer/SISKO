-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sisko`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `IDakun` int(11) NOT NULL,
  `userakun` varchar(255) NOT NULL,
  `passakun` varchar(255) NOT NULL,
  `roleakun` varchar(255) NOT NULL,
  `id-data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`IDakun`, `userakun`, `passakun`, `roleakun`, `id-data`) VALUES
(1, 'galasanca@gmail.com', 'galasanca', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dataptk`
--

CREATE TABLE `dataptk` (
  `IDdataptk` int(10) NOT NULL,
  `namaptk` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tempatlahir` varchar(15) NOT NULL,
  `tanggallahir` date NOT NULL,
  `nik` varchar(9) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `skawal` date NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tahunlulus` varchar(4) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nikktp` varchar(20) NOT NULL,
  `nikkk` varchar(20) NOT NULL,
  `nonaktif` date NOT NULL,
  `alasannonaktif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `IDdatasiswa` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tempatlahir` varchar(15) NOT NULL,
  `tanggallahir` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tahunmasuk` varchar(9) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `namaayah` varchar(20) NOT NULL,
  `kerjaayah` varchar(20) NOT NULL,
  `namaibu` varchar(20) NOT NULL,
  `kerjaibu` varchar(20) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nikktp` varchar(20) NOT NULL,
  `nikkk` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tahunkeluar` varchar(9) NOT NULL,
  `tanggalkeluar` date NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `IDdokumen` int(11) NOT NULL,
  `namadokumen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsidok` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggaldok` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indukptk`
--

CREATE TABLE `indukptk` (
  `IDindukptk` int(11) NOT NULL,
  `id_dataptk` int(10) NOT NULL,
  `tahunajaran` varchar(9) NOT NULL,
  `tugas` varchar(20) NOT NULL,
  `jam` int(2) NOT NULL,
  `kelas` varchar(60) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `induksiswa`
--

CREATE TABLE `induksiswa` (
  `IDinduksiswa` int(11) NOT NULL,
  `id_datasiswa` int(10) NOT NULL,
  `tahunajaran` varchar(9) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `kelasinduk` varchar(12) NOT NULL,
  `titimangsa` varchar(30) NOT NULL,
  `id_dataptk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `IDlink` int(11) NOT NULL,
  `namalink` varchar(32) NOT NULL,
  `alamatlink` varchar(255) NOT NULL,
  `deskripsilink` varchar(255) NOT NULL,
  `tgllink` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`IDakun`);

--
-- Indexes for table `dataptk`
--
ALTER TABLE `dataptk`
  ADD PRIMARY KEY (`IDdataptk`);

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`IDdatasiswa`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`IDdokumen`);

--
-- Indexes for table `indukptk`
--
ALTER TABLE `indukptk`
  ADD PRIMARY KEY (`IDindukptk`);

--
-- Indexes for table `induksiswa`
--
ALTER TABLE `induksiswa`
  ADD PRIMARY KEY (`IDinduksiswa`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`IDlink`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `IDakun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dataptk`
--
ALTER TABLE `dataptk`
  MODIFY `IDdataptk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `IDdatasiswa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `IDdokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indukptk`
--
ALTER TABLE `indukptk`
  MODIFY `IDindukptk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `induksiswa`
--
ALTER TABLE `induksiswa`
  MODIFY `IDinduksiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `IDlink` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
