-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phase2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'WORLD OF LIES', 'So life can be very hard\r\n\r\nbut we plough trough like a beast\r\n\r\nand conquer to the greatest of heights', '2024-04-18 10:27:30'),
(2, 'vcccxv', 'xcvcxxcvcvc', '2024-04-18 10:28:36'),
(3, 'ccaas', 'ccc', '2024-04-18 10:34:10'),
(4, 'WORLD OF LIES', 'So life can be very hard\r\n\r\nbut we plough trough like a beast\r\n\r\nand conquer to the greatest of heights', '2024-01-18 11:27:30'),
(5, 'WORLD OF LIES', 'So life can be very hard\r\n\r\nbut we plough trough like a beast\r\n\r\nand conquer to the greatest of heights', '2023-12-18 11:27:30'),
(6, 'hjkj', 'hkhjk', '2024-04-18 14:03:23'),
(8, 'ddddddddddd', 'adasd', '2024-04-18 23:01:41'),
(9, 'vvv', 'vvv', '2024-04-18 23:55:35'),
(10, 'fdfdf', 'dfdfdf', '2024-04-19 01:53:07'),
(11, 'fdfdf', 'dfdfdf', '2024-04-19 01:53:14'),
(12, 'fdfdf', 'dfdfdf', '2024-04-19 01:53:15'),
(13, 'fdfdf', 'dfdfdf', '2024-04-19 01:53:15'),
(14, 'fdfdf', 'dfdfdf', '2024-04-19 01:53:15'),
(15, 'fggf', 'fggf', '2024-04-19 01:57:03'),
(16, 'fggf', 'fggf', '2024-04-19 01:57:17'),
(17, 'fggf', 'fggf', '2024-04-19 01:57:39'),
(18, 'fggf', 'fggf', '2024-04-19 01:59:26'),
(19, 'hi', 'hello', '2024-04-19 01:59:45'),
(20, 'ffgfg', 'fgfgfg', '2024-04-19 02:15:34'),
(21, 'dcxxc', 'xcxc', '2024-04-19 02:17:50'),
(22, 'dcxxc', 'xcxc', '2024-04-19 02:18:22'),
(23, 'dcxxc', 'xcxc', '2024-04-19 02:18:27'),
(24, 'dfdf', 'fddffd', '2024-04-19 02:18:58'),
(25, 'dfdf', 'fddffd', '2024-04-19 02:19:19'),
(26, 'sdsd', 'dssdds', '2024-04-19 02:19:25'),
(27, 'xzxzzx', 'zx', '2024-04-19 02:21:46'),
(28, 'asas', 'saasa', '2024-04-19 02:24:45'),
(29, 'asasas', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-04-19 02:25:01'),
(30, 'sddsd', 'sdsd', '2024-04-19 06:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'y.m.alam@se23.qmul.ac.uk', 'test', 1),
(2, 'yaseenalam78@gmail.com', 'test', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
