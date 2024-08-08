-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 01:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus_msib`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_08_08_074425_create_tabel_kursus', 1),
(2, '2024_08_08_074447_create_tabel_materi_kursus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kursus`
--

CREATE TABLE `tabel_kursus` (
  `id_kursus` bigint(20) UNSIGNED NOT NULL,
  `judul_kursus` varchar(255) NOT NULL,
  `deskripsi_kursus` text NOT NULL,
  `durasi_kursus` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_kursus`
--

INSERT INTO `tabel_kursus` (`id_kursus`, `judul_kursus`, `deskripsi_kursus`, `durasi_kursus`, `created_at`, `updated_at`) VALUES
(4, 'React JS', 'Belajar React JS', '97', '2024-08-08 05:33:02', '2024-08-08 14:49:27'),
(5, 'Belajar Laravel', 'Dengan Adi AR', '30', '2024-08-08 14:50:05', '2024-08-08 14:50:05'),
(6, 'Belajar Python', 'Bersama Bang Adi', '30', '2024-08-08 14:50:28', '2024-08-08 14:50:28'),
(7, 'Belajar Komputer', 'Dengan Prodi TI', '20', '2024-08-08 14:51:06', '2024-08-08 14:51:06'),
(8, 'Belajar Elexir', 'Bersama Adi', '40', '2024-08-08 14:51:45', '2024-08-08 14:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_materi_kursus`
--

CREATE TABLE `tabel_materi_kursus` (
  `id_materi_kursus` bigint(20) UNSIGNED NOT NULL,
  `id_kursus` bigint(20) UNSIGNED NOT NULL,
  `judul_materi_kursus` varchar(255) NOT NULL,
  `deskripsi_materi_kursus` text NOT NULL,
  `link_materi_kursus` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_materi_kursus`
--

INSERT INTO `tabel_materi_kursus` (`id_materi_kursus`, `id_kursus`, `judul_materi_kursus`, `deskripsi_materi_kursus`, `link_materi_kursus`, `created_at`, `updated_at`) VALUES
(1, 4, 'Pengenalan React JS', 'Belajar Pengenalan React JS', 'https://bpbd.meranginkab.go.id/upload/publikasi/E-Book_ReactJS_Bahasa_Indonesia.pdf', NULL, '2024-08-08 14:41:40'),
(3, 4, 'asdasdasd', 'asdasdasasdasd', 'asdasdasd', '2024-08-08 14:29:29', '2024-08-08 14:29:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kursus`
--
ALTER TABLE `tabel_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `tabel_materi_kursus`
--
ALTER TABLE `tabel_materi_kursus`
  ADD PRIMARY KEY (`id_materi_kursus`),
  ADD KEY `tabel_materi_kursus_id_kursus_foreign` (`id_kursus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_kursus`
--
ALTER TABLE `tabel_kursus`
  MODIFY `id_kursus` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabel_materi_kursus`
--
ALTER TABLE `tabel_materi_kursus`
  MODIFY `id_materi_kursus` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_materi_kursus`
--
ALTER TABLE `tabel_materi_kursus`
  ADD CONSTRAINT `tabel_materi_kursus_id_kursus_foreign` FOREIGN KEY (`id_kursus`) REFERENCES `tabel_kursus` (`id_kursus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
