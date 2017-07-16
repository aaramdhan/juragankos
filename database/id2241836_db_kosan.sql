-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2017 at 02:52 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2241836_db_kosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `gambar_id` varchar(10) NOT NULL,
  `gambar_idkosan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`gambar_id`, `gambar_idkosan`) VALUES
('4', '2'),
('5', '2'),
('6', '3');

-- --------------------------------------------------------

--
-- Table structure for table `kostan`
--

CREATE TABLE `kostan` (
  `id` varchar(10) NOT NULL,
  `pemilik` varchar(10) DEFAULT NULL,
  `fasilitas` varchar(50) DEFAULT NULL,
  `kota` varchar(15) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kostan`
--

INSERT INTO `kostan` (`id`, `pemilik`, `fasilitas`, `kota`, `alamat`, `harga`) VALUES
('2', '5', 'tv, kulkas', 'Bandung', 'kencana', '400000'),
('3', '5', 'tv', 'Bandung', 'kencana', '400000'),
('4', '5', 'tv', 'Jakarta', 'Jakarta Barat', '500000'),
('5', '1', 'tv', 'Bandung', 'Kencana', '450000'),
('6', '5', 'tv', 'Jakarta', 'J.Square', '500000'),
('7', '6', 'tv', 'Surabaya', 'Sura', '340000');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`, `nama`, `email`) VALUES
('admin', 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_member`
--

CREATE TABLE `user_member` (
  `member_id` varchar(10) NOT NULL,
  `member_nama` varchar(20) DEFAULT NULL,
  `member_username` varchar(20) DEFAULT NULL,
  `member_password` varchar(40) DEFAULT NULL,
  `member_tempat_lahir` varchar(20) DEFAULT NULL,
  `member_tglahir` date DEFAULT NULL,
  `member_jk` varchar(1) DEFAULT NULL,
  `member_alamat` varchar(50) DEFAULT NULL,
  `member_tlp` varchar(13) DEFAULT NULL,
  `member_email` varchar(40) DEFAULT NULL,
  `member_foto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_member`
--

INSERT INTO `user_member` (`member_id`, `member_nama`, `member_username`, `member_password`, `member_tempat_lahir`, `member_tglahir`, `member_jk`, `member_alamat`, `member_tlp`, `member_email`, `member_foto`) VALUES
('', 'Akira Renji', 'Akira', '202cb962ac59075b964b07152d234b70', 'Jakarta', '1995-01-19', 'L', 'Cibubur', '081321535501', 'akirarenji@gmail.com', NULL),
('1', 'Moch. Rizkia Hidayat', 'rizkiaerr', '25d55ad283aa400af464c76d713c07ad', 'Sumedang', '1996-04-23', 'L', 'Sumedang', '089661203309', 'rizkiaerr@gmail.com', NULL),
('5', 'aris arianto ramdhan', 'aris', '202cb962ac59075b964b07152d234b70', 'bandung', '1996-02-12', 'L', 'bandung', '081321535501', 'arisramdhan13@gmail.com', NULL),
('6', 'Aris Arianto', 'aa', '202cb962ac59075b964b07152d234b70', 'Bandung', '1996-02-12', 'L', 'Bandung', '081321535501', 'arisramdhan13@gmail.com', NULL),
('7', 'John K. Boutweller', 'JohnK', '202cb962ac59075b964b07152d234b70', 'America', '1971-03-23', 'L', '264 Reserve St Warkworth, ON K0K 3K0', '705-924-553', 'JohnKBoutweller@teleworm.us', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`gambar_id`),
  ADD KEY `fk_kosan` (`gambar_idkosan`);

--
-- Indexes for table `kostan`
--
ALTER TABLE `kostan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemilik` (`pemilik`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_member`
--
ALTER TABLE `user_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `fk_kosan` FOREIGN KEY (`gambar_idkosan`) REFERENCES `kostan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kostan`
--
ALTER TABLE `kostan`
  ADD CONSTRAINT `fk_pemilik` FOREIGN KEY (`pemilik`) REFERENCES `user_member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
