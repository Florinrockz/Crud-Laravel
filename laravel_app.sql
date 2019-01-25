-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 01:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Florin', 'Scutaru', 'scutaruflorin1@gmail.com', '0774627082', 'B-dul Unirii 10/67', 'Baia Mare', 'Romania', '2019-01-24 19:34:10', '2019-01-24 19:34:10'),
(2, 'Ion', 'Ungur', 'ionungur@yahoo.com', '34623467', 'hfbdhsbsfbff', 'Cluj Napoca', 'Romania', '2019-01-24 20:42:06', '2019-01-24 20:42:06'),
(3, 'Rae', 'Mojo', 'dsffa@jfbdj.com', '432424241', 'main street nr. 10', 'New York', 'United States', '2019-01-24 20:44:38', '2019-01-24 21:37:00'),
(4, 'fdsf', 'dfsfsad', 'fsdf@fdvsh.com', '3234352345', 'fdbsffskfk', 'Cairo', 'Egipt', '2019-01-24 21:42:36', '2019-01-24 21:42:36'),
(5, 'fdgdbgj', 'fnjdjb', 'bdsb@tsre.com', '3437443256', 'nnfsjfbfk ak grbgkgab', 'Odessa', 'Ukraine', '2019-01-24 21:43:29', '2019-01-24 21:43:29'),
(6, 'asad', 'hasan', 'hasan@pasa.com', '43242543252', 'bdhgnGLg eJBGKWE', 'Medellin', 'Colombia', '2019-01-24 21:44:23', '2019-01-24 21:44:23'),
(7, 'andrew', 'michael', 'mikeandy@ex.com', '45324367', 'f jfa sfjafb aejf', 'San Diego', 'United States', '2019-01-24 21:45:21', '2019-01-24 21:45:21'),
(8, 'fbdsjkabsk', 'h', 'jvjv@jfddaj.vb', '6434685825', 'jhsdfajf jff vajsfajfj', 'Kharkov', 'Ukraine', '2019-01-24 21:46:14', '2019-01-24 21:46:14'),
(9, 'fshdvfjvjhJJ', 'jgfdjkk', 'kjfbfdjgb@bkfjnk.nb', '45432982', 'jkbfkasfbkasdfkafk sfa fsfa f', 'Osaka', 'Japan', '2019-01-24 21:47:37', '2019-01-24 21:47:37'),
(10, 'fgfdgd', 'nkjb', 'gfgkdgdkg@guci.gogo', '4324423543', 'gfsdjgb sdgk sgksd bgk gk', 'Casablanca', 'Morocco', '2019-01-24 21:49:27', '2019-01-24 21:49:27'),
(13, 'sdfgsdg', 'gfsdgfsd', 'test@test.com', '42465654', 'shhshghsf', 'Caracas', 'Venezualla', '2019-01-24 21:58:35', '2019-01-24 21:58:35'),
(14, 'gsdfgsdgds', 'fgsgsfdfgsd', 'test@test.com', '545324552', 'fshshsghsf', 'Dubai', 'United Arab Emirates', '2019-01-24 22:00:04', '2019-01-24 22:00:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
