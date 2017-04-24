-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 05:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter-krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `mahasiswa` varchar(50) NOT NULL DEFAULT '0',
  `matakuliah` varchar(1000) NOT NULL DEFAULT '0',
  `jurusan` varchar(50) NOT NULL DEFAULT '0',
  `sks` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `mahasiswa`, `matakuliah`, `jurusan`, `sks`) VALUES
(11, 'Fahrul', 'OOP 2,Metode Numerik,OOP 1,Web Designs,Sistem Jaringan', 'Teknik Informatika', 18);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `semester` int(11) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `fakultas` varchar(50) NOT NULL DEFAULT '0',
  `jurusan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `semester`, `ipk`, `fakultas`, `jurusan`) VALUES
(1504030032, 'Fahrul', 4, 3.2, 'Teknik', 'Teknik Informatika'),
(1504030041, 'Danma', NULL, NULL, 'Teknik', 'Teknik Informatika'),
(1502031222, 'Ransack', 2, 3.2, 'Teknik', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `semester` int(11) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama`, `semester`, `sks`, `fakultas`, `jurusan`) VALUES
(1, 'OOP 2', 2, 3, 'Teknik', 'Teknik Informatika'),
(3, 'Metode Numerik', 2, 4, 'Teknik', 'Teknik Industri'),
(4, 'Web Designs', 4, 4, 'Teknik', 'Teknik Informatika'),
(5, 'OOP 1', 2, 3, 'Teknik', 'Teknik Informatika'),
(6, 'Sistem Jaringan', 4, 4, 'Teknik', 'Teknik Informatika'),
(7, 'Pendidikan Pancasila', 4, 2, 'Teknik', 'Teknik Informatika'),
(8, 'Kalkulus', 4, 4, 'Teknik', 'Teknik Informatika'),
(9, 'Kalkulus 2', 5, 3, 'Teknik', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1504030045;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
