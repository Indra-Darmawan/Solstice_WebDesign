-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 11:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparta`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_laporan`
--

CREATE TABLE `data_laporan` (
  `ID_LP` varchar(255) NOT NULL,
  `ID_PNG` varchar(255) DEFAULT NULL,
  `ALAMAT_LP` varchar(255) NOT NULL,
  `PESAN_LP` varchar(255) NOT NULL,
  `LAMP_LP` varchar(255) NOT NULL,
  `TANGGAL_LP` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `ID_PNG` varchar(255) NOT NULL,
  `NAMA_PNG` varchar(255) NOT NULL,
  `EMAIL_PNG` varchar(255) NOT NULL,
  `NOMER_PNG` varchar(255) NOT NULL,
  `PASSWORD_PNG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_laporan`
--
ALTER TABLE `data_laporan`
  ADD PRIMARY KEY (`ID_LP`),
  ADD KEY `FK_DATA_LAP_LAPORAN_DATA_PEN` (`ID_PNG`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`ID_PNG`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_laporan`
--
ALTER TABLE `data_laporan`
  ADD CONSTRAINT `FK_DATA_LAP_LAPORAN_DATA_PEN` FOREIGN KEY (`ID_PNG`) REFERENCES `data_pengguna` (`ID_PNG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
