-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 07:26 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint UNSIGNED NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci,
  `new_values` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audits`
--

INSERT INTO `audits` (`id`, `user_type`, `user_id`, `event`, `auditable_type`, `auditable_id`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 1, '[]', '{\"user_id\":\"2\",\"book_id\":\"1\",\"tanggal_tenggat\":\"2021-11-30 00:00:00\",\"status\":\"Dipinjam\",\"id\":1}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 07:15:48', '2021-11-28 07:15:48'),
(2, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Book', 1, '{\"id\":1,\"judul\":\"kdubujul-u\",\"isbn\":\"NLCXZ3442\",\"penulis\":\"Melyssa Champlin\",\"gambar_buku\":\"buku.png\",\"stok\":63}', '[]', 'http://127.0.0.1:8000/buku/delete/1', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 07:15:55', '2021-11-28 07:15:55'),
(3, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 2, '[]', '{\"judul\":\"Hujan\",\"isbn\":\"95-0393-849-10\",\"penulis\":\"Tere Liye\",\"stok\":\"12\",\"gambar_buku\":\"1638154595.jpg\",\"id\":2}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 18:56:36', '2021-11-28 18:56:36'),
(4, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 3, '[]', '{\"judul\":\"Filosofi Teras\",\"isbn\":\"95-0762-140-7\",\"penulis\":\"Henry Minampiring\",\"stok\":\"41\",\"gambar_buku\":\"1638154681.jpg\",\"id\":3}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 18:58:01', '2021-11-28 18:58:01'),
(5, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 4, '[]', '{\"judul\":\"Meditations\",\"isbn\":\"95-0713-279-1\",\"penulis\":\"Marcus Aurelius\",\"stok\":\"12\",\"gambar_buku\":\"1638154748.jpg\",\"id\":4}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 18:59:08', '2021-11-28 18:59:08'),
(6, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 5, '[]', '{\"judul\":\"Tentang Pesimimisme\",\"isbn\":\"95-0423-468-2\",\"penulis\":\"Schopenhauer\",\"stok\":\"31\",\"gambar_buku\":\"1638154807.jpg\",\"id\":5}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:00:08', '2021-11-28 19:00:08'),
(7, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 6, '[]', '{\"judul\":\"No Longer Human\",\"isbn\":\"95-0816-370-4\",\"penulis\":\"Osamu Dazai\",\"stok\":\"54\",\"gambar_buku\":\"1638154888.jpg\",\"id\":6}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:01:28', '2021-11-28 19:01:28'),
(8, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 7, '[]', '{\"judul\":\"Man Search For Meaning\",\"isbn\":\"95-0687-765-3\",\"penulis\":\"Viktor Frankl\",\"stok\":\"41\",\"gambar_buku\":\"1638154968.jpg\",\"id\":7}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:02:48', '2021-11-28 19:02:48'),
(9, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 8, '[]', '{\"judul\":\"1984\",\"isbn\":\"95-0631-373-3\",\"penulis\":\"George Orwell\",\"stok\":\"59\",\"gambar_buku\":\"1638155020.jpg\",\"id\":8}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:03:40', '2021-11-28 19:03:40'),
(10, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 9, '[]', '{\"judul\":\"The Ego and The Id\",\"isbn\":\"98-7252-144-1\",\"penulis\":\"Sigmund Freud\",\"stok\":\"72\",\"gambar_buku\":\"1638155092.jpg\",\"id\":9}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:04:52', '2021-11-28 19:04:52'),
(11, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 10, '[]', '{\"judul\":\"Sun & Steel\",\"isbn\":\"95-0282-869-0\",\"penulis\":\"Yukio Mishima\",\"stok\":\"97\",\"gambar_buku\":\"1638155193.jpg\",\"id\":10}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:06:33', '2021-11-28 19:06:33'),
(12, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 11, '[]', '{\"judul\":\"nol\",\"isbn\":\"98-7199-042-1\",\"penulis\":\"William Tjhia & Carrin\",\"stok\":\"2\",\"gambar_buku\":\"1638155281.jpg\",\"id\":11}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:08:01', '2021-11-28 19:08:01'),
(13, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 12, '[]', '{\"judul\":\"Subtle art of not giving f**k\",\"isbn\":\"95-0750-073-1\",\"penulis\":\"Mark Manson\",\"stok\":\"543\",\"gambar_buku\":\"1638155375.jpg\",\"id\":12}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:09:35', '2021-11-28 19:09:35'),
(14, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 13, '[]', '{\"judul\":\"Atomic Habit\",\"isbn\":\"98-7440-344-6\",\"penulis\":\"James Clear\",\"stok\":\"54\",\"gambar_buku\":\"1638155422.jpg\",\"id\":13}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:10:22', '2021-11-28 19:10:22'),
(15, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Ebook', 1, '{\"id\":1,\"judul\":\"-uuulkjbud\",\"isbn\":\"DLUEF0414\",\"penulis\":\"Arlene Jacobi\",\"file_pdf\":\"example.pdf\",\"gambar_pdf\":\"gambar_pdf.png\"}', '[]', 'http://127.0.0.1:8000/ebuku/delete/1', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:10:35', '2021-11-28 19:10:35'),
(16, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 2, '[]', '{\"judul\":\"60 Cara Pengembangan Diri\",\"isbn\":\"98-7440-344-6\",\"penulis\":\"Martha Marry\",\"gambar_pdf\":\"1638155659.jpg\",\"file_pdf\":\"1638155659.pdf\",\"id\":2}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:14:19', '2021-11-28 19:14:19'),
(17, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 3, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"The Code Book How to Make It, Break It, Hack It, Crack It\",\"isbn\":\"98-7440-344-6\",\"penulis\":\"Simon Singh\",\"file_pdf\":\"1638155931.pdf\",\"id\":3}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:18:52', '2021-11-28 19:18:52'),
(18, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 4, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"Rahasia Hati\",\"isbn\":\"98-7440-344-1\",\"penulis\":\"Natsume Soseki\",\"file_pdf\":\"1638155989.pdf\",\"id\":4}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:19:49', '2021-11-28 19:19:49'),
(19, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 2, '[]', '{\"user_id\":\"2\",\"book_id\":\"8\",\"tanggal_tenggat\":\"2021-12-10 00:00:00\",\"status\":\"Dipinjam\",\"id\":2}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:30:39', '2021-11-28 19:30:39'),
(20, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 3, '[]', '{\"user_id\":\"2\",\"book_id\":\"3\",\"tanggal_tenggat\":\"2021-12-10 00:00:00\",\"status\":\"Dipinjam\",\"id\":3}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:30:47', '2021-11-28 19:30:47'),
(21, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 4, '[]', '{\"user_id\":\"2\",\"book_id\":\"13\",\"tanggal_tenggat\":\"2021-12-10 00:00:00\",\"status\":\"Dipinjam\",\"id\":4}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 19:30:58', '2021-11-28 19:30:58'),
(22, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 5, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"Filsafat Islam\",\"isbn\":\"12345\",\"penulis\":\"A. Khudori Soleh\",\"file_pdf\":\"1638160410.pdf\",\"id\":5}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:33:30', '2021-11-28 20:33:30'),
(23, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 6, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"Man in the middle\",\"isbn\":\"12345\",\"penulis\":\"Fumio Sasaki\",\"file_pdf\":\"1638160685.pdf\",\"id\":6}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:38:05', '2021-11-28 20:38:05'),
(24, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 7, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"Understanding Network hack and defense with python\",\"isbn\":\"12345\",\"penulis\":\"Bastian Ballman\",\"file_pdf\":\"1638160782.pdf\",\"id\":7}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:39:42', '2021-11-28 20:39:42'),
(25, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 8, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"Automate the boring stuff with python\",\"isbn\":\"12345\",\"penulis\":\"Al Sweigart\",\"file_pdf\":\"1638160883.txt\",\"id\":8}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:41:24', '2021-11-28 20:41:24'),
(26, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 9, '[]', '{\"gambar_pdf\":\"gambar_pdf.png\",\"judul\":\"Black Hat Python\",\"isbn\":\"123456\",\"penulis\":\"Justin Seitz\",\"file_pdf\":\"1638160912.txt\",\"id\":9}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:41:52', '2021-11-28 20:41:52'),
(27, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 5, '{\"isbn\":\"12345\"}', '{\"isbn\":\"98-7440-344-3\"}', 'http://127.0.0.1:8000/ebuku/edit/5', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:43:28', '2021-11-28 20:43:28'),
(28, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 6, '{\"isbn\":\"12345\"}', '{\"isbn\":\"98-7440-344-6\"}', 'http://127.0.0.1:8000/ebuku/edit/6', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:43:59', '2021-11-28 20:43:59'),
(29, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 7, '{\"isbn\":\"12345\"}', '{\"isbn\":\"98-7440-344-9\"}', 'http://127.0.0.1:8000/ebuku/edit/7', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:44:16', '2021-11-28 20:44:16'),
(30, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 8, '{\"isbn\":\"12345\"}', '{\"isbn\":\"98-7440-344-2\"}', 'http://127.0.0.1:8000/ebuku/edit/8', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:44:28', '2021-11-28 20:44:28'),
(31, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 9, '{\"isbn\":\"123456\"}', '{\"isbn\":\"98-7440-344-3\"}', 'http://127.0.0.1:8000/ebuku/edit/9', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:44:40', '2021-11-28 20:44:40'),
(32, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 3, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638161243.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/3', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:47:23', '2021-11-28 20:47:23'),
(33, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 3, '{\"gambar_pdf\":\"1638161243.jpg\"}', '{\"gambar_pdf\":\"1638161330.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/3', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:48:50', '2021-11-28 20:48:50'),
(34, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 4, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638161381.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/4', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:49:41', '2021-11-28 20:49:41'),
(35, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 5, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638161762.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/5', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:56:02', '2021-11-28 20:56:02'),
(36, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 6, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638161813.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/6', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:56:53', '2021-11-28 20:56:53'),
(37, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Ebook', 2, '{\"id\":2,\"judul\":\"60 Cara Pengembangan Diri\",\"isbn\":\"98-7440-344-6\",\"penulis\":\"Martha Marry\",\"file_pdf\":\"1638155659.pdf\",\"gambar_pdf\":\"1638155659.jpg\"}', '[]', 'http://127.0.0.1:8000/ebuku/delete/2', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:57:02', '2021-11-28 20:57:02'),
(38, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Ebook', 3, '{\"id\":3,\"judul\":\"The Code Book How to Make It, Break It, Hack It, Crack It\",\"isbn\":\"98-7440-344-6\",\"penulis\":\"Simon Singh\",\"file_pdf\":\"1638155931.pdf\",\"gambar_pdf\":\"1638161330.jpg\"}', '[]', 'http://127.0.0.1:8000/ebuku/delete/3', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:57:06', '2021-11-28 20:57:06'),
(39, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Ebook', 4, '{\"id\":4,\"judul\":\"Rahasia Hati\",\"isbn\":\"98-7440-344-1\",\"penulis\":\"Natsume Soseki\",\"file_pdf\":\"1638155989.pdf\",\"gambar_pdf\":\"1638161381.jpg\"}', '[]', 'http://127.0.0.1:8000/ebuku/delete/4', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:57:12', '2021-11-28 20:57:12'),
(40, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 8, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638161870.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/8', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:57:50', '2021-11-28 20:57:50'),
(41, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 9, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638161907.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/9', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 20:58:27', '2021-11-28 20:58:27'),
(42, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Ebook', 5, '{\"id\":5,\"judul\":\"Filsafat Islam\",\"isbn\":\"98-7440-344-3\",\"penulis\":\"A. Khudori Soleh\",\"file_pdf\":\"1638160410.pdf\",\"gambar_pdf\":\"1638161762.jpg\"}', '[]', 'http://127.0.0.1:8000/ebuku/delete/5', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:04:30', '2021-11-28 21:04:30'),
(43, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Ebook', 6, '{\"id\":6,\"judul\":\"Man in the middle\",\"isbn\":\"98-7440-344-6\",\"penulis\":\"Fumio Sasaki\",\"file_pdf\":\"1638160685.pdf\",\"gambar_pdf\":\"1638161813.jpg\"}', '[]', 'http://127.0.0.1:8000/ebuku/delete/6', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:04:36', '2021-11-28 21:04:36'),
(44, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 7, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638162331.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/7', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:05:31', '2021-11-28 21:05:31'),
(45, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 11, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638162538.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:08:58', '2021-11-28 21:08:58'),
(46, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 12, '{\"gambar_pdf\":\"gambar_pdf.png\"}', '{\"gambar_pdf\":\"1638162585.jpg\"}', 'http://127.0.0.1:8000/ebuku/edit/12', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:09:45', '2021-11-28 21:09:45'),
(47, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 5, '[]', '{\"user_id\":\"3\",\"book_id\":\"6\",\"tanggal_tenggat\":\"2021-11-30 00:00:00\",\"status\":\"Dipinjam\",\"id\":5}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:19:05', '2021-11-28 21:19:05'),
(48, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 3, '{\"kelas\":\"12\",\"jurusan\":\"MM\"}', '{\"kelas\":\"10\",\"jurusan\":\"PS\"}', 'http://127.0.0.1:8000/siswa/edit/3', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:21:27', '2021-11-28 21:21:27'),
(49, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 6, '{\"kelas\":\"12\",\"jurusan\":\"MM\"}', '{\"kelas\":\"11\",\"jurusan\":\"ANMS\"}', 'http://127.0.0.1:8000/siswa/edit/6', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:21:42', '2021-11-28 21:21:42'),
(50, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 7, '{\"kelas\":\"12\",\"jurusan\":\"MM\"}', '{\"kelas\":\"13\",\"jurusan\":\"DI\"}', 'http://127.0.0.1:8000/siswa/edit/7', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:21:54', '2021-11-28 21:21:54'),
(51, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 8, '{\"kelas\":\"12\",\"jurusan\":\"MM\"}', '{\"kelas\":\"10\",\"jurusan\":\"DI\"}', 'http://127.0.0.1:8000/siswa/edit/8', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:22:05', '2021-11-28 21:22:05'),
(52, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 9, '{\"kelas\":\"12\",\"jurusan\":\"MM\"}', '{\"kelas\":\"11\",\"jurusan\":\"KI\"}', 'http://127.0.0.1:8000/siswa/edit/9', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:22:16', '2021-11-28 21:22:16'),
(53, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 11, '{\"jurusan\":\"MM\"}', '{\"jurusan\":\"ANMS\"}', 'http://127.0.0.1:8000/siswa/edit/11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:22:29', '2021-11-28 21:22:29'),
(54, 'App\\Models\\User', 1, 'created', 'App\\Models\\User', 13, '[]', '{\"gambar_user\":\"1638163564.png\",\"nama\":\"Ferdy Maulana\",\"username\":\"ferdy69\",\"password\":\"$2y$10$dcKt.Gsthe6BubvghzYFru\\/qBpe72aWOxyFMILCh6M3FtcDoKiGgm\",\"nis\":\"129321873\",\"kelas\":\"12\",\"jurusan\":\"RPL\",\"gender\":\"Pria\",\"agama\":\"Hindu\",\"role\":\"siswa\",\"id\":13}', 'http://127.0.0.1:8000/siswa/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:26:04', '2021-11-28 21:26:04'),
(55, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 6, '[]', '{\"user_id\":\"13\",\"book_id\":\"3\",\"tanggal_tenggat\":\"2021-12-10 00:00:00\",\"status\":\"Dipinjam\",\"id\":6}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:27:54', '2021-11-28 21:27:54'),
(56, 'App\\Models\\User', 1, 'created', 'App\\Models\\Book', 14, '[]', '{\"judul\":\"Filosofi Teras\",\"isbn\":\"12321312\",\"penulis\":\"Henry Minampiring\",\"stok\":\"123\",\"gambar_buku\":\"1638164294.jpg\",\"id\":14}', 'http://127.0.0.1:8000/buku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:38:15', '2021-11-28 21:38:15'),
(57, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 2, '{\"status\":\"Dipinjam\"}', '{\"status\":\"Dikembalikan\"}', 'http://127.0.0.1:8000/peminjaman/edit/2', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:43:29', '2021-11-28 21:43:29'),
(58, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 2, '{\"tanggal_dikembalikan\":null}', '{\"tanggal_dikembalikan\":\"2021-11-30 10:00:00\"}', 'http://127.0.0.1:8000/peminjaman/edit/2', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:43:40', '2021-11-28 21:43:40'),
(59, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 7, '[]', '{\"user_id\":\"2\",\"book_id\":\"9\",\"tanggal_tenggat\":\"2021-12-10 00:00:00\",\"status\":\"Dipinjam\",\"id\":7}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-28 21:44:10', '2021-11-28 21:44:10'),
(60, 'App\\Models\\User', 1, 'created', 'App\\Models\\User', 14, '[]', '{\"gambar_user\":\"1638181781.png\",\"nama\":\"Ferdy Maulana\",\"username\":\"ferdy\",\"password\":\"$2y$10$StunadvCcN5S3MACodKUmeZ127WBHwLbTQyYk3g4JJF8xCNK\\/AqkW\",\"nis\":\"123456\",\"kelas\":\"12\",\"jurusan\":\"RPL\",\"gender\":\"Pria\",\"agama\":\"Kristen\",\"role\":\"siswa\",\"id\":14}', 'http://127.0.0.1:8000/siswa/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 02:29:41', '2021-11-29 02:29:41'),
(61, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 14, '{\"username\":\"ferdy\"}', '{\"username\":\"ferdyyy\"}', 'http://127.0.0.1:8000/siswa/edit/14', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 02:30:29', '2021-11-29 02:30:29'),
(62, 'App\\Models\\User', 1, 'created', 'App\\Models\\Loan', 8, '[]', '{\"user_id\":\"13\",\"book_id\":\"9\",\"tanggal_tenggat\":\"2021-12-10 00:00:00\",\"status\":\"Dipinjam\",\"id\":8}', 'http://127.0.0.1:8000/peminjaman/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 02:30:54', '2021-11-29 02:30:54'),
(63, 'App\\Models\\User', 1, 'created', 'App\\Models\\Ebook', 23, '[]', '{\"gambar_pdf\":\"1638181966.jpg\",\"judul\":\"Filosofi Teras\",\"isbn\":\"123123213\",\"penulis\":\"Henry Minampiring\",\"file_pdf\":\"1638181966.pdf\",\"id\":23}', 'http://127.0.0.1:8000/ebuku/tambahkan', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 02:32:46', '2021-11-29 02:32:46'),
(64, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Ebook', 23, '{\"isbn\":\"123123213\"}', '{\"isbn\":\"98-7440-344-2\"}', 'http://127.0.0.1:8000/ebuku/edit/23', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 02:33:24', '2021-11-29 02:33:24'),
(65, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Book', 11, '{\"stok\":2}', '{\"stok\":\"23\"}', 'http://127.0.0.1:8000/buku/edit/11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 02:34:52', '2021-11-29 02:34:52'),
(66, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 1, '{\"gambar_user\":\"user.png\"}', '{\"gambar_user\":\"1638191461.png\"}', 'http://127.0.0.1:8000/user/edit/1', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-11-29 05:11:01', '2021-11-29 05:11:01'),
(67, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Book', 2, '{\"id\":2,\"judul\":\"Hujan\",\"isbn\":\"95-0393-849-10\",\"penulis\":\"Tere Liye\",\"gambar_buku\":\"1638154595.jpg\",\"stok\":12}', '[]', 'http://127.0.0.1:8000/buku/delete/2', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-12-08 04:10:33', '2021-12-08 04:10:33'),
(68, 'App\\Models\\User', 1, 'deleted', 'App\\Models\\Book', 4, '{\"id\":4,\"judul\":\"Meditations\",\"isbn\":\"95-0713-279-1\",\"penulis\":\"Marcus Aurelius\",\"gambar_buku\":\"1638154748.jpg\",\"stok\":12}', '[]', 'http://127.0.0.1:8000/buku/delete/4', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0', NULL, '2021-12-08 04:12:15', '2021-12-08 04:12:15'),
(69, 'App\\Models\\User', 1, 'updated', 'App\\Models\\User', 3, '{\"nama\":\"Micheal Rohan\"}', '{\"nama\":\"Muhammad Micheal\"}', 'http://192.168.1.6:8080/siswa/edit/3', '192.168.1.3', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.92 Safari/537.36', NULL, '2021-12-21 02:12:19', '2021-12-21 02:12:19'),
(70, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 2, '{\"status\":\"Dikembalikan\"}', '{\"status\":\"Terlambat\"}', 'http://192.168.1.6:8080/peminjaman', '192.168.1.6', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0', NULL, '2021-12-21 02:27:07', '2021-12-21 02:27:07'),
(71, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 4, '{\"tanggal_dikembalikan\":null}', '{\"tanggal_dikembalikan\":\"2021-12-21 10:20:00\"}', 'http://192.168.1.6:8080/peminjaman/edit/4', '192.168.1.6', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0', NULL, '2021-12-21 02:42:29', '2021-12-21 02:42:29'),
(72, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 4, '{\"status\":\"Terlambat\"}', '{\"status\":\"Dikembalikan\"}', 'http://192.168.1.6:8080/peminjaman/edit/4', '192.168.1.6', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0', NULL, '2021-12-21 02:42:42', '2021-12-21 02:42:42'),
(73, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 2, '{\"status\":\"Terlambat\"}', '{\"status\":\"Dipinjam\"}', 'http://192.168.1.6:8080/peminjaman/edit/2', '192.168.1.6', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0', NULL, '2021-12-21 02:43:11', '2021-12-21 02:43:11'),
(74, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Loan', 3, '{\"tanggal_dikembalikan\":null,\"status\":\"Dipinjam\"}', '{\"tanggal_dikembalikan\":\"2021-12-20 10:01:00\",\"status\":\"Dikembalikan\"}', 'http://192.168.1.6:8080/peminjaman/edit/3', '192.168.1.6', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0', NULL, '2021-12-21 02:49:27', '2021-12-21 02:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'buku.png',
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `isbn`, `penulis`, `gambar_buku`, `stok`, `created_at`, `updated_at`) VALUES
(3, 'Filosofi Teras', '95-0762-140-7', 'Henry Minampiring', '1638154681.jpg', 41, '2021-11-28 18:58:01', '2021-11-28 18:58:01'),
(5, 'Tentang Pesimimisme', '95-0423-468-2', 'Schopenhauer', '1638154807.jpg', 31, '2021-11-28 19:00:07', '2021-11-28 19:00:07'),
(6, 'No Longer Human', '95-0816-370-4', 'Osamu Dazai', '1638154888.jpg', 54, '2021-11-28 19:01:28', '2021-11-28 19:01:28'),
(7, 'Man Search For Meaning', '95-0687-765-3', 'Viktor Frankl', '1638154968.jpg', 41, '2021-11-28 19:02:48', '2021-11-28 19:02:48'),
(8, '1984', '95-0631-373-3', 'George Orwell', '1638155020.jpg', 59, '2021-11-28 19:03:40', '2021-11-28 19:03:40'),
(9, 'The Ego and The Id', '98-7252-144-1', 'Sigmund Freud', '1638155092.jpg', 72, '2021-11-28 19:04:52', '2021-11-28 19:04:52'),
(10, 'Sun & Steel', '95-0282-869-0', 'Yukio Mishima', '1638155193.jpg', 97, '2021-11-28 19:06:33', '2021-11-28 19:06:33'),
(11, 'nol', '98-7199-042-1', 'William Tjhia & Carrin', '1638155281.jpg', 23, '2021-11-28 19:08:01', '2021-11-29 02:34:52'),
(12, 'Subtle art of not giving f**k', '95-0750-073-1', 'Mark Manson', '1638155375.jpg', 543, '2021-11-28 19:09:35', '2021-11-28 19:09:35'),
(13, 'Atomic Habit', '98-7440-344-6', 'James Clear', '1638155422.jpg', 54, '2021-11-28 19:10:22', '2021-11-28 19:10:22'),
(14, 'Filosofi Teras', '12321312', 'Henry Minampiring', '1638164294.jpg', 123, '2021-11-28 21:38:14', '2021-11-28 21:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'example.pdf',
  `gambar_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gambar_pdf.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `judul`, `isbn`, `penulis`, `file_pdf`, `gambar_pdf`, `created_at`, `updated_at`) VALUES
(7, 'Understanding Network hack and defense with python', '98-7440-344-9', 'Bastian Ballman', '1638160782.pdf', '1638162331.jpg', '2021-11-28 20:39:42', '2021-11-28 21:05:31'),
(8, 'Automate the boring stuff with python', '98-7440-344-2', 'Al Sweigart', '1638160883.txt', '1638161870.jpg', '2021-11-28 20:41:23', '2021-11-28 20:57:50'),
(9, 'Black Hat Python', '98-7440-344-3', 'Justin Seitz', '1638160912.txt', '1638161907.jpg', '2021-11-28 20:41:52', '2021-11-28 20:58:27'),
(10, '60 Cara Pengembangan Diri', '98-7440-344-6', 'Martha Marry', '1638155659.pdf', '1638155659.jpg', '2021-11-28 19:14:19', '2021-11-28 19:14:19'),
(11, 'Filsafat Islam', '98-7440-344-3', 'A. Khudori Soleh', '1638160410.pdf', '1638162538.jpg', '2021-11-28 20:33:30', '2021-11-28 21:08:58'),
(12, 'Man in the middle', '98-7440-344-6', 'Fumio Sasaki', '1638160685.pdf', '1638162585.jpg', '2021-11-28 20:38:05', '2021-11-28 21:09:45'),
(14, 'Automate the boring stuff with python', '98-7440-344-2', 'Al Sweigart', '1638160883.txt', '1638161870.jpg', '2021-11-28 20:41:23', '2021-11-28 20:57:50'),
(15, 'Automate the boring stuff with python', '98-7440-344-2', 'Al Sweigart', '1638160883.txt', '1638161870.jpg', '2021-11-28 20:41:23', '2021-11-28 20:57:50'),
(16, 'Black Hat Python', '98-7440-344-3', 'Justin Seitz', '1638160912.txt', '1638161907.jpg', '2021-11-28 20:41:52', '2021-11-28 20:58:27'),
(17, 'Understanding Network hack and defense with python', '98-7440-344-9', 'Bastian Ballman', '1638160782.pdf', '1638162331.jpg', '2021-11-28 20:39:42', '2021-11-28 21:05:31'),
(19, '60 Cara Pengembangan Diri', '98-7440-344-6', 'Martha Marry', '1638155659.pdf', '1638155659.jpg', '2021-11-28 19:14:19', '2021-11-28 19:14:19'),
(20, 'Understanding Network hack and defense with python', '98-7440-344-9', 'Bastian Ballman', '1638160782.pdf', '1638162331.jpg', '2021-11-28 20:39:42', '2021-11-28 21:05:31'),
(21, 'Filsafat Islam', '98-7440-344-3', 'A. Khudori Soleh', '1638160410.pdf', '1638162538.jpg', '2021-11-28 20:33:30', '2021-11-28 21:08:58'),
(22, 'Man in the middle', '98-7440-344-6', 'Fumio Sasaki', '1638160685.pdf', '1638162585.jpg', '2021-11-28 20:38:05', '2021-11-28 21:09:45'),
(23, 'Filosofi Teras', '98-7440-344-2', 'Henry Minampiring', '1638181966.pdf', '1638181966.jpg', '2021-11-29 02:32:46', '2021-11-29 02:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `tanggal_tenggat` timestamp NOT NULL,
  `tanggal_dikembalikan` timestamp NULL DEFAULT NULL,
  `status` enum('Dipinjam','Dikembalikan','Terlambat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `user_id`, `book_id`, `tanggal_tenggat`, `tanggal_dikembalikan`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 8, '2021-12-09 16:00:00', '2021-11-30 02:00:00', 'Dikembalikan', '2021-11-28 19:30:38', '2021-12-21 02:50:14'),
(3, 2, 3, '2021-12-30 19:30:46', '2021-12-20 02:01:00', 'Dikembalikan', '2021-12-30 19:30:46', '2021-12-21 02:50:14'),
(4, 2, 13, '2021-12-21 16:00:00', NULL, 'Dipinjam', '2021-11-28 19:30:58', '2021-12-21 02:50:14'),
(5, 3, 6, '2021-11-29 16:00:00', NULL, 'Terlambat', '2021-11-28 21:19:05', '2021-12-21 02:50:14'),
(6, 13, 3, '2021-12-09 16:00:00', NULL, 'Terlambat', '2021-11-28 21:27:54', '2021-12-21 02:50:14'),
(7, 2, 9, '2021-12-09 16:00:00', NULL, 'Terlambat', '2021-11-28 21:44:10', '2021-12-21 02:50:14'),
(8, 13, 9, '2021-12-09 16:00:00', NULL, 'Terlambat', '2021-11-29 02:30:54', '2021-12-21 02:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_23_012109_create_books_table', 1),
(6, '2021_11_23_210329_create_loans_table', 1),
(7, '2021_11_25_091940_create_audits_table', 1),
(8, '2021_11_26_123141_create_ebooks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('10','11','12','13') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` enum('MM','RPL','DI','PS','KI','ANMS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Kristen','Buddha','Hindu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `nis`, `kelas`, `jurusan`, `gender`, `agama`, `role`, `gambar_user`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '03555483', '12', 'RPL', 'Pria', 'Islam', 'admin', '1638191461.png', '$2y$10$9IqyR8x9oGcJvaCdZFZk0.RwgGcLwEX/cGPx6wxnyN0iXKvtvn0Ei', NULL, '2021-11-28 07:15:32', '2021-11-29 05:11:01'),
(2, 'siswa', 'Siswa', '36741926', '12', 'RPL', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$kbfL7Ucu0JTv19GdtZ64DexNvrkhdEXfdr48Dr5jP.KEww1P3Ym92', NULL, '2021-11-28 07:15:32', '2021-11-28 07:15:32'),
(3, 'david.conn', 'Muhammad Micheal', '48340449', '10', 'PS', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 07:15:34', '2021-12-21 02:12:19'),
(4, 'collins.william', 'Santa Wiza', '00510986', '12', 'MM', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:09', '2021-11-28 21:21:09'),
(5, 'gretchen94', 'Arvilla Mayert', '40408909', '12', 'MM', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:10', '2021-11-28 21:21:10'),
(6, 'sdubuque', 'Liliane Goodwin', '62520626', '11', 'ANMS', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:11', '2021-11-28 21:21:42'),
(7, 'lehner.nelson', 'Mya VonRueden Sr.', '00442160', '13', 'DI', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:11', '2021-11-28 21:21:54'),
(8, 'elisha.crooks', 'Natasha Torp DDS', '20753378', '10', 'DI', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:12', '2021-11-28 21:22:05'),
(9, 'hill.kole', 'Elnora Huels MD', '94010331', '11', 'KI', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:13', '2021-11-28 21:22:16'),
(10, 'adolf87', 'Mr. Reynold Schoen', '78282929', '12', 'MM', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:14', '2021-11-28 21:21:14'),
(11, 'yhirthe', 'Prof. Cornell Harris', '12751778', '12', 'ANMS', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:14', '2021-11-28 21:22:29'),
(12, 'holden.pacocha', 'Nyasia Glover V', '74523998', '12', 'MM', 'Pria', 'Islam', 'siswa', 'user.png', '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi', NULL, '2021-11-28 21:21:15', '2021-11-28 21:21:15'),
(13, 'ferdy69', 'Ferdy Maulana', '129321873', '12', 'RPL', 'Pria', 'Hindu', 'siswa', '1638163564.png', '$2y$10$dcKt.Gsthe6BubvghzYFru/qBpe72aWOxyFMILCh6M3FtcDoKiGgm', NULL, '2021-11-28 21:26:04', '2021-11-28 21:26:04'),
(14, 'ferdyyy', 'Ferdy Maulana', '123456', '12', 'RPL', 'Pria', 'Kristen', 'siswa', '1638181781.png', '$2y$10$StunadvCcN5S3MACodKUmeZ127WBHwLbTQyYk3g4JJF8xCNK/AqkW', NULL, '2021-11-29 02:29:41', '2021-11-29 02:30:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`,`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loans_user_id_foreign` (`user_id`),
  ADD KEY `loans_book_id_foreign` (`book_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `loans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
