-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2024 at 07:55 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_web_lanjut20232`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `harga_barang`, `qty`) VALUES
(33, 'X005', 'Bodrek', 500, 20),
(34, 'N001', 'Oskadon', 2500, 15),
(35, 'T001', 'Tolak angin', 4000, 20),
(36, 'R001', 'Remashil', 1000, 50),
(37, 'T002', 'Tolak linu', 4000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `blog_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_description`) VALUES
(1, 'konsep dasar sistem basis data', 'panduan lengkap konsep dasar sistem basis data untuk pemula'),
(2, 'upload image dengan codeigniter', 'cara mudah upload image dengan codeigniter'),
(3, 'CRUD dengan codeigniter', 'inilah tutorial lengkap Cara mudah membuat CRUD dengan codeigniter');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_stok`
--

CREATE TABLE `kartu_stok` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tipe_transaksi` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kartu_stok`
--

INSERT INTO `kartu_stok` (`id`, `id_barang`, `tanggal`, `waktu`, `tipe_transaksi`, `qty`, `saldo`) VALUES
(1, 1, '2024-04-01', '10:30:00', 'MASUK', 5, 5),
(2, 1, '2024-04-02', '10:30:00', 'MASUK', 3, 8),
(3, 1, '2024-04-03', '10:30:00', 'KELUAR', 2, 6),
(4, 2, '2024-04-01', '10:30:00', 'MASUK', 5, 5),
(5, 2, '2024-04-02', '10:30:00', 'MASUK', 3, 8),
(6, 2, '2024-04-03', '10:30:00', 'KELUAR', 4, 4),
(8, 1, '2024-06-07', '13:48:13', 'MASUK', 4, 10),
(9, 1, '2024-06-07', '13:48:31', 'KELUAR', 4, 6),
(12, 6, '2024-06-07', '16:45:52', 'MASUK', 4, 4),
(13, 1, '2024-06-07', '18:20:44', 'MASUK', 4, 10),
(18, 10, '2024-06-08', '05:23:21', 'MASUK', 4, 4),
(19, 11, '2024-06-08', '06:38:17', 'MASUK', 4, 4),
(21, 13, '2024-06-08', '14:57:47', 'MASUK', 4, 4),
(22, 2, '2024-06-19', '08:25:06', 'MASUK', 4, 8),
(23, 2, '2024-06-19', '08:25:11', 'MASUK', 6, 14),
(24, 2, '2024-06-19', '08:25:26', 'MASUK', 4, 18),
(25, 10, '2024-06-19', '12:59:43', 'MASUK', 4, 8),
(26, 10, '2024-06-19', '12:59:46', 'KELUAR', 6, 2),
(27, 10, '2024-06-19', '12:59:51', 'MASUK', 4, 6),
(28, 10, '2024-06-19', '12:59:55', 'KELUAR', 4, 2),
(29, 6, '2024-06-19', '13:41:03', 'MASUK', 3, 9),
(30, 6, '2024-06-19', '13:41:06', 'MASUK', 4, 13),
(31, 6, '2024-06-19', '13:41:09', 'MASUK', 3, 16),
(32, 6, '2024-06-19', '13:41:11', 'MASUK', 4, 20),
(33, 6, '2024-06-19', '13:41:15', 'MASUK', 3, 23),
(34, 6, '2024-06-19', '13:41:24', 'MASUK', 2, 25),
(35, 1, '2024-06-19', '15:19:51', 'KELUAR', 4, 6),
(36, 1, '2024-06-19', '15:20:08', 'KELUAR', 1, 5),
(37, 1, '2024-06-19', '15:20:12', 'KELUAR', 1, 4),
(38, 31, '2024-07-13', '15:46:34', 'MASUK', 100, 100),
(39, 32, '2024-07-13', '15:49:02', 'MASUK', 20, 20),
(40, 33, '2024-07-13', '15:49:36', 'MASUK', 10, 10),
(41, 34, '2024-07-13', '15:50:04', 'MASUK', 15, 15),
(42, 35, '2024-07-13', '15:50:31', 'MASUK', 20, 20),
(43, 36, '2024-07-13', '15:51:04', 'MASUK', 50, 50),
(44, 37, '2024-07-13', '15:58:39', 'MASUK', 30, 30),
(45, 33, '2024-07-13', '15:58:54', 'MASUK', 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `PersonKey` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DateofBirth` date NOT NULL,
  `PlaceofBirth` varchar(255) NOT NULL,
  `HomeAddress` text NOT NULL,
  `WorkAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`PersonKey`, `Name`, `DateofBirth`, `PlaceofBirth`, `HomeAddress`, `WorkAddress`) VALUES
(9, 'vian', '2024-07-30', 'semarang', 'Semarang', 'Semarang Uye');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PersonKey` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `PersonKey`, `Password`) VALUES
('vian@gmail.com', 9, '$2y$10$KjLDsnSScSWz1oNO0IeEx.UZyGHOlHUjXj/BFR3OADieQiF25F9Di');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `kartu_stok`
--
ALTER TABLE `kartu_stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`PersonKey`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `PersonKey` (`PersonKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kartu_stok`
--
ALTER TABLE `kartu_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `PersonKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`PersonKey`) REFERENCES `person` (`PersonKey`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
