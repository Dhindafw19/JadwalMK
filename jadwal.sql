-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 06:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(3) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `mk` varchar(25) NOT NULL,
  `dosen` varchar(25) NOT NULL,
  `kode` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`no`, `hari`, `mk`, `dosen`, `kode`) VALUES
(0, 'Kamis', 'TBO', 'Prof Andani', 318),
(1, 'Senin', 'Basis Data', 'Ais Prayogi', 201),
(2, 'Senin', 'IMK', 'Zulkifli Tahir', 201),
(3, 'Senin', 'RPL', 'Elly Warni', 318),
(4, 'Senin', 'Thecnopreneurship', 'Prof Ansar', 206),
(5, 'Selasa', 'SMK', 'Amil Ahmad', 217),
(6, 'Selasa', 'Sistem Informasi', 'Anugrahyani', 217);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
