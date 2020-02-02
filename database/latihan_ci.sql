-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 12:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `npm` int(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(1000) DEFAULT NULL,
  `no_telepon` varchar(25) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `npm`, `nama`, `alamat`, `no_telepon`, `email`, `agama`, `semester`) VALUES
(6, 17171711, 'Rezi Tristanto', NULL, NULL, NULL, NULL, 6),
(7, 17171711, 'dwdw', NULL, NULL, NULL, NULL, 1),
(8, 16131, 'sidik', NULL, NULL, NULL, NULL, 1),
(9, 1212, 'anggi', 'sendi kencana', '080808', 'asasa@gmail.com', 'Kristen', 2),
(10, 232, 'asas', NULL, NULL, NULL, NULL, 1),
(11, 121, 'swas', NULL, NULL, NULL, NULL, 1),
(12, 121, 'sas', NULL, NULL, NULL, NULL, 1),
(13, 12121, 'asasa', NULL, NULL, NULL, NULL, 1),
(14, 12121212, 'asasa', NULL, NULL, NULL, NULL, 2),
(16, 12344311, 'rezi', 'qasqsq', '32423232', 'Zzasas@gmail.com', 'Islam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(200) NOT NULL,
  `npm` varchar(25) DEFAULT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `npm`, `level`) VALUES
(1, 'ahmad', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1),
(2, 'sidik', '3bc5733ade3aa77e8b77abceb89767b68abea7ee', NULL, 2),
(3, 'permana', '8cb2237d0679ca88db6464eac60da96345513964', '1212', 1),
(4, 'rezi', '8cb2237d0679ca88db6464eac60da96345513964', '12344311', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
