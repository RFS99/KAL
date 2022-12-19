-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 12:03 AM
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
-- Database: `animerec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `avatar`, `fullname`, `email`, `password`, `user_type`, `is_active`, `user_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Rey', 'ferliez_reynaldi@yahoo.co.id', '$2y$10$SM.89DgtuyzkifKNogbkL.ugPb5pkK3xHlP60xavogGp4cbQ33ZlC', 0, 0, 1, '2022-06-12 18:30:43', '2022-06-14 11:46:55', NULL);

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
-- Table structure for table `t_anime`
--

CREATE TABLE `t_anime` (
  `id` int(11) NOT NULL,
  `title` int(255) NOT NULL,
  `description` text NOT NULL,
  `studio` varchar(255) NOT NULL,
  `season` varchar(100) NOT NULL DEFAULT 'Summer',
  `realesed_date` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_anime_detail`
--

CREATE TABLE `t_anime_detail` (
  `id` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_genre`
--

CREATE TABLE `t_genre` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_stopwords`
--

CREATE TABLE `t_stopwords` (
  `id` int(11) NOT NULL,
  `word` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_stopwords`
--

INSERT INTO `t_stopwords` (`id`, `word`) VALUES
(1, 'a'),
(2, 'about'),
(3, 'above'),
(4, 'after'),
(5, 'again'),
(6, 'against'),
(7, 'all'),
(8, 'am'),
(9, 'an'),
(10, 'and'),
(11, 'any'),
(12, 'are'),
(13, 'aren\'t'),
(14, 'as'),
(15, 'at'),
(16, 'be'),
(17, 'because'),
(18, 'been'),
(19, 'before'),
(20, 'being'),
(21, 'below'),
(22, 'between'),
(23, 'both'),
(24, 'but'),
(25, 'by'),
(26, 'can\'t'),
(27, 'cannot'),
(28, 'could'),
(29, 'couldn\'t'),
(30, 'did'),
(31, 'didn\'t'),
(32, 'do'),
(33, 'does'),
(34, 'doesn\'t'),
(35, 'doing'),
(36, 'don\'t'),
(37, 'down'),
(38, 'during'),
(39, 'each'),
(40, 'few'),
(41, 'for'),
(42, 'from'),
(43, 'further'),
(44, 'had'),
(45, 'hadn\'t'),
(46, 'has'),
(47, 'hasn\'t'),
(48, 'have'),
(49, 'haven\'t'),
(50, 'having'),
(51, 'he'),
(52, 'he\'d'),
(53, 'he\'ll'),
(54, 'he\'s'),
(55, 'her'),
(56, 'here'),
(57, 'here\'s'),
(58, 'hers'),
(59, 'herself'),
(60, 'him'),
(61, 'himself'),
(62, 'his'),
(63, 'how'),
(64, 'how\'s'),
(65, 'i'),
(66, 'i\'d'),
(67, 'i\'ll'),
(68, 'i\'m'),
(69, 'i\'ve'),
(70, 'if'),
(71, 'in'),
(72, 'into'),
(73, 'is'),
(74, 'isn\'t'),
(75, 'it'),
(76, 'it\'s'),
(77, 'its'),
(78, 'itself'),
(79, 'let\'s'),
(80, 'me'),
(81, 'more'),
(82, 'most'),
(83, 'mustn\'t'),
(84, 'my'),
(85, 'myself'),
(86, 'no'),
(87, 'nor'),
(88, 'not'),
(89, 'of'),
(90, 'off'),
(91, 'on'),
(92, 'once'),
(93, 'only'),
(94, 'or'),
(95, 'other'),
(96, 'ought'),
(97, 'our'),
(98, 'ours'),
(99, 'ourselves'),
(100, 'out'),
(101, 'over'),
(102, 'own'),
(103, 'same'),
(104, 'shan\'t'),
(105, 'she'),
(106, 'she\'d'),
(107, 'she\'ll'),
(108, 'she\'s'),
(109, 'should'),
(110, 'shouldn\'t'),
(111, 'so'),
(112, 'some'),
(113, 'such'),
(114, 'than'),
(115, 'that'),
(116, 'that\'s'),
(117, 'the'),
(118, 'their'),
(119, 'theirs'),
(120, 'them'),
(121, 'themselves'),
(122, 'then'),
(123, 'there'),
(124, 'there\'s'),
(125, 'these'),
(126, 'they'),
(127, 'they\'d'),
(128, 'they\'ll'),
(129, 'they\'re'),
(130, 'they\'ve'),
(131, 'this'),
(132, 'those'),
(133, 'through'),
(134, 'to'),
(135, 'too'),
(136, 'under'),
(137, 'until'),
(138, 'up'),
(139, 'very'),
(140, 'was'),
(141, 'wasn\'t'),
(142, 'we'),
(143, 'we\'d'),
(144, 'we\'ll'),
(145, 'we\'re'),
(146, 'we\'ve'),
(147, 'were'),
(148, 'weren\'t'),
(149, 'what'),
(150, 'what\'s'),
(151, 'when'),
(152, 'when\'s'),
(153, 'where'),
(154, 'where\'s'),
(155, 'which'),
(156, 'while'),
(157, 'who'),
(158, 'who\'s'),
(159, 'whom'),
(160, 'why'),
(161, 'why\'s'),
(162, 'with'),
(163, 'won\'t'),
(164, 'would'),
(165, 'wouldn\'t'),
(166, 'you'),
(167, 'you\'d'),
(168, 'you\'ll'),
(169, 'you\'re'),
(170, 'you\'ve'),
(171, 'your'),
(172, 'yours'),
(173, 'yourself'),
(174, 'yourselves'),
(175, 'k');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- Indexes for table `t_anime`
--
ALTER TABLE `t_anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_anime_detail`
--
ALTER TABLE `t_anime_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anime_id` (`anime_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `t_genre`
--
ALTER TABLE `t_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_stopwords`
--
ALTER TABLE `t_stopwords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `t_anime`
--
ALTER TABLE `t_anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_anime_detail`
--
ALTER TABLE `t_anime_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_genre`
--
ALTER TABLE `t_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_stopwords`
--
ALTER TABLE `t_stopwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
