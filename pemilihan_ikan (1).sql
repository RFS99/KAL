-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 06:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilihan_ikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `default_ikan`
--

CREATE TABLE `default_ikan` (
  `id` int(50) NOT NULL,
  `nama_ikan` varchar(50) NOT NULL,
  `suhuAir` double NOT NULL,
  `tingkatPH` double NOT NULL,
  `kadarOksigen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `default_ikan`
--

INSERT INTO `default_ikan` (`id`, `nama_ikan`, `suhuAir`, `tingkatPH`, `kadarOksigen`) VALUES
(1, 'Ikan Arwana', 30, 7.5, 5),
(2, 'Ikan Discus', 29, 7, 5),
(3, 'Ikan Goldfish', 23, 7.5, 5),
(4, 'Ikan Lemon', 28, 7, 5),
(5, 'Ikan Louhan', 32, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `input_ikan_cs`
--

CREATE TABLE `input_ikan_cs` (
  `id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `suhu_air` double NOT NULL,
  `tingkat_ph` double NOT NULL,
  `kadar_oksigen` double NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `input_ikan_cs`
--

INSERT INTO `input_ikan_cs` (`id`, `user_id`, `suhu_air`, `tingkat_ph`, `kadar_oksigen`, `created_at`) VALUES
(1, 1, 5.6, 5.6, 7.6, '2022-02-11 13:48:50'),
(7, 0, 5.6, 5.6, 7.6, '2022-06-14 23:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` int(11) NOT NULL COMMENT '0=unread; 1=read',
  `created_at` datetime NOT NULL,
  `read_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `is_read`, `created_at`, `read_at`) VALUES
(1, 'Mutya', 'meutyasuryadana@gmail.com', 'asdasdasd', 'asdasdasddas', 1, '2022-06-04 12:42:13', '2022-06-04 12:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `toko_ikan`
--

CREATE TABLE `toko_ikan` (
  `id_toko` int(50) NOT NULL,
  `Nama_Toko` varchar(50) NOT NULL,
  `Alamat_Toko` varchar(200) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko_ikan`
--

INSERT INTO `toko_ikan` (`id_toko`, `Nama_Toko`, `Alamat_Toko`, `no_telp`) VALUES
(1, 'Ornamental Fish Aquarium', 'Jl. Raya Serpong, Pakualam, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15322.', '0811-187-348'),
(2, 'Aditia Akuarium ', 'Jl. Bayangkara Pusdiklantas No.1-29, Pd. Jagung Tim., Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326.', NULL),
(3, 'Purnama Aquarium', 'Ruko Melati Mas Blok SR15 No. 30, Lengkong Karya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15322.', ' (021) 5371409'),
(4, 'Listy Aquarium', 'Jl. Bayangkara Pusdiklantas No.16, RT.01/RW.01, Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326.', '0822-9999-5330'),
(5, 'Nickz Aquascape', 'Jl. Raya Serpong No.39, Pakulonan, Kec. Serpong Utara, Kota Tangerang Selatan, Banten \r\n15326.\r\nhttps://linktr.ee/nickzzaquascape', '0877-8820-2881'),
(6, 'Biota Aquatic Aquarium', 'Biota Aquatic Aquarium, Kelapa Dua, Tangerang Regency, Banten 15810', '0878-0805-6679');

-- --------------------------------------------------------

--
-- Table structure for table `topsis_rank`
--

CREATE TABLE `topsis_rank` (
  `id` int(50) NOT NULL COMMENT 'id',
  `kode_alt` varchar(50) NOT NULL COMMENT 'kode alternatif',
  `nama_ikan` varchar(50) NOT NULL COMMENT 'nama ikan yang diranking',
  `desc_ikan` varchar(300) DEFAULT NULL COMMENT 'Deskripsi Ikan secara singkat',
  `nilai_topsis` double(10,9) NOT NULL COMMENT 'Nilai hasil akhir penghitungan TOPSIS untuk acuan ranking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topsis_rank`
--

INSERT INTO `topsis_rank` (`id`, `kode_alt`, `nama_ikan`, `desc_ikan`, `nilai_topsis`) VALUES
(1, 'A1', 'Ikan Arwana', '', 0.644671752),
(2, 'A2', 'Ikan Discus', '', 0.362277235),
(3, 'A3', 'Ikan Goldfish', '', 0.337020622),
(4, 'A4', 'Ikan Lemon', '', 0.678905498),
(5, 'A5', 'Ikan Louhan', '', 0.459848262);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0=user; 1=admin',
  `is_active` int(11) NOT NULL DEFAULT 0 COMMENT '0=active; 1=deactive',
  `user_status` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending; 1=verify',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `fullname`, `email`, `password`, `user_type`, `is_active`, `user_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Meutya', 'meutyasuryadana@gmail.com', '$2y$10$tG4L0.SNAUgH55G.2vsT0OjxOrPfs52rBZ3LH9GRkpvmH4c.uTiKq', 1, 0, 1, '2022-05-29 14:30:28', '2022-06-04 12:26:56', '2022-06-04 11:56:49'),
(2, NULL, 'Mutya', 'aryadansmo@gmail.com', '$2y$10$4PHZ6q2FcPN/Z61fIUIc/uxgbncUCXmX.JEA1FSvI56g9v56eskCy', 0, 0, 1, '2022-06-04 09:10:40', '2022-06-04 12:05:22', NULL),
(3, NULL, 'Mutya', 'meutyasuryadana@gmail.com', '$2y$10$SxKmoqX2rkReT.Pe/23UFOZnlxJVNcuz2D1IRYY/r6HJEKjrbwiam', 0, 0, 1, '2022-06-04 12:22:12', NULL, NULL),
(4, NULL, 'Mutya', 'tidak@gmail.com', '$2y$10$RX8.tbN8riWvCMY/yk9/SeuAJ8Yazf5WXKgvHYcgw73w0rpLldQVK', 0, 0, 1, '2022-06-04 12:25:32', NULL, NULL),
(5, NULL, 'Mutya', 'asd@gmail.com', '$2y$10$XCZ.tI0v.NnFNyrjUvteT.do1fuIy0NPeUzYoqtxvgaV8GyMIemnW', 1, 0, 1, '2022-06-04 12:26:37', NULL, NULL),
(6, NULL, 'Rey', 'ferliez_reynaldi@yahoo.co.id', '$2y$10$SM.89DgtuyzkifKNogbkL.ugPb5pkK3xHlP60xavogGp4cbQ33ZlC', 0, 0, 1, '2022-06-12 18:30:43', '2022-06-14 11:46:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `valid_until` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_activations`
--

INSERT INTO `user_activations` (`user_id`, `token`, `valid_until`, `created_at`) VALUES
(1, '4d8970f32a0515631e91a4089685c1b5', '2022-05-29 14:40:28', '2022-05-29 14:30:28'),
(2, 'cfc3c2b75f2ed6bef8937713b590247d', '2022-06-04 09:20:40', '2022-06-04 09:10:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `default_ikan`
--
ALTER TABLE `default_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_ikan_cs`
--
ALTER TABLE `input_ikan_cs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko_ikan`
--
ALTER TABLE `toko_ikan`
  ADD PRIMARY KEY (`id_toko`),
  ADD UNIQUE KEY `no_telp` (`no_telp`);

--
-- Indexes for table `topsis_rank`
--
ALTER TABLE `topsis_rank`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_alt` (`kode_alt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `default_ikan`
--
ALTER TABLE `default_ikan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `input_ikan_cs`
--
ALTER TABLE `input_ikan_cs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `toko_ikan`
--
ALTER TABLE `toko_ikan`
  MODIFY `id_toko` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topsis_rank`
--
ALTER TABLE `topsis_rank`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
