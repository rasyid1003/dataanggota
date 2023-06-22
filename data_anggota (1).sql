-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 05:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nama`, `jekel`, `kelas`, `npm`, `email`, `foto`) VALUES
(9, 'Est illum repudiand', 'LK', 'Ipsum qu', '15', 'pemidej@mailinator.com', 'image_2023-06-14_020838469.png'),
(10, 'Non reprehenderit e', 'LK', 'Omnis hi', '70', 'vaxytojy@mailinator.com', 'image_2023-06-21_211912653.png'),
(11, 'Ipsam molestiae ut p', 'LK', 'Cum nost', '77', 'qiwylugavy@mailinator.com', 'image_2023-06-21_212733433.png'),
(12, 'Ea non error itaque ', 'LK', 'Beatae d', '92', 'cezoqimaxa@mailinator.com', 'image_2023-06-21_213556017.png'),
(13, 'Sit est minima moles', 'LK', 'Et nihil', '42', 'xebidavux@mailinator.com', 'image_2023-06-21_214026983.png'),
(14, 'Eligendi quo accusam', 'LK', 'Eos Nam ', '98', 'ranugowy@mailinator.com', ''),
(15, 'Proident quia sit ', 'LK', 'Voluptat', '60', 'wuzofyky@mailinator.com', 'resized_image_2023-06-22_035442290.png'),
(16, 'Sit ducimus tempor ', 'LK', 'Enim eu ', '54', 'cycawu@mailinator.com', 'resized_image_2023-06-22_035756291.png'),
(17, 'Aut consequuntur rer', 'LK', 'Harum ap', '80', 'dowad@mailinator.com', 'resized_image_2023-06-22_040040177.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sett`
--

CREATE TABLE `tbl_sett` (
  `id_sett` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sett`
--

INSERT INTO `tbl_sett` (`id_sett`, `judul`) VALUES
(1, 'Assumenda nemo repel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Admin2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'rasyid', 'admin', 'admin', 'Administrator'),
(3, 'benk', 'admin2', 'admin2', 'Admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
  ADD PRIMARY KEY (`id_sett`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
  MODIFY `id_sett` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
