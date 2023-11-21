-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 08:20 AM
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
-- Database: `2106091_nisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `nisa_pengeluaran`
--

CREATE TABLE `nisa_pengeluaran` (
  `id` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `makan` varchar(30) DEFAULT NULL,
  `transportasi` varchar(30) DEFAULT NULL,
  `belanja` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nisa_pengeluaran`
--

INSERT INTO `nisa_pengeluaran` (`id`, `nama`, `tanggal`, `makan`, `transportasi`, `belanja`) VALUES
('002', 'Nisa Nurapipah', '2023-11-21 12:32:00', '19000', '6000', '33000'),
('003', 'Nisa Nurapipah', '2023-11-21 00:00:00', '19000', '6000', '33000'),
('004', 'percobaan', '2000-02-07 00:00:00', '9000', '8000', '6000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nisa_pengeluaran`
--
ALTER TABLE `nisa_pengeluaran`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
