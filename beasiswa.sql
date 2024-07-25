-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 12:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `semester` enum('Semester 1','Semester 2','Semester 3','Semester 4','Semester 5','Semester 6','Semester 7','Semester 8') DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `pilihan_beasiswa` enum('Beasiswa KIP-K','Beasiswa Prestasi Akademik','Beasiswa Penuh Universitas','Beasiswa Pertamina','Beasiswa Mandiri','Beasiswa Pemberdayaan Masyarakat') DEFAULT NULL,
  `upload_berkas` blob DEFAULT NULL,
  `status_ajuan` varchar(50) DEFAULT 'belum diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `nim`, `nama`, `email`, `no_hp`, `semester`, `ipk`, `pilihan_beasiswa`, `upload_berkas`, `status_ajuan`) VALUES
(1, '220102050', 'Achmad', 'achmad123@gmail.com', '081294037924', 'Semester 2', 3.2, 'Beasiswa KIP-K', 0x5472616e736b726970206e696c61692073656d657374657220312d332e706466, 'belum diverifikasi'),
(2, '220202051', 'Choerul', 'choerul123@gmail.com', '081283403476', 'Semester 3', 3.5, 'Beasiswa Pertamina', 0x7069635f31352e6a7067, 'belum diverifikasi'),
(3, '220302053', 'Ramdhani', 'ramdhani123@gmail.com', '081376393435', 'Semester 1', 3.1, 'Beasiswa Prestasi Akademik', 0x536572746966696b61742050656c61746968616e204a574420323032342e706466, 'belum diverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
