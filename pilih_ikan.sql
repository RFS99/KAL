-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 02:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilih_ikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Username` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Gender` enum('M','F') NOT NULL,
  `Birthday` date NOT NULL,
  `MobilePhone` varchar(20) NOT NULL,
  `Image` varchar(1000) DEFAULT NULL,
  `Address` varchar(500) NOT NULL,
  `AboutMe` varchar(500) NOT NULL,
  `Cover` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Username`, `FirstName`, `LastName`, `Gender`, `Birthday`, `MobilePhone`, `Image`, `Address`, `AboutMe`, `Cover`) VALUES
('admin@gmail.com', 'Admin', 'Admin', 'M', '2020-03-08', '0811111111', 'Hacker-man.jpg', 'Jl. Neraka no. 13 BLok 6666', 'Saya adalah orang terganteng didunia HAHAHAHAHA', 'Thula-Pic.jpg'),
('andreas.steven@student.umn.ac.id', 'Andreas', 'Steven', 'M', '1999-11-15', '087711103412', 'Default.webp', 'Bumi', 'Yo what\'s up guys....', 'tumblr gold.png'),
('bryan.leonardo@gmail.com', 'Bryan', 'Leonardo', 'M', '1999-03-27', '081111111', '480b6855dc2c01a44023e75e26ad4421.jpg', 'Neverland', 'Cacing Besar Alaska!!!!!!', 'tumblr gold.png');

-- --------------------------------------------------------

--
-- Table structure for table `toko_ikan`
--

CREATE TABLE `toko_ikan` (
  `No_Toko` int(50) NOT NULL,
  `Nama_Toko` varchar(50) NOT NULL,
  `Alamat_Toko` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `toko_ikan`
--
ALTER TABLE `toko_ikan`
  ADD PRIMARY KEY (`No_Toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toko_ikan`
--
ALTER TABLE `toko_ikan`
  MODIFY `No_Toko` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
