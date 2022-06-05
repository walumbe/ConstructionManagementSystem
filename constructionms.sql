-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2022 at 11:15 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
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
-- Database: `constructionms`
--

-- --------------------------------------------------------

--
-- Table structure for table `brick_stock`
--

CREATE TABLE `brick_stock` (
  `id` int NOT NULL,
  `amount_registered` int DEFAULT NULL,
  `amount_used` int DEFAULT '0',
  `amount_available` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brick_stock`
--

INSERT INTO `brick_stock` (`id`, `amount_registered`, `amount_used`, `amount_available`, `created_at`) VALUES
(1, 1000, 20, 980, '2022-06-04 04:34:41'),
(2, 1000, 20, 980, '2022-06-04 04:34:41'),
(3, 1000, 20, NULL, '2022-06-04 04:34:41'),
(4, 1000, 20, NULL, '2022-06-04 04:34:41'),
(5, 300, 300, NULL, '2022-06-04 04:34:41'),
(6, 300, 300, NULL, '2022-06-04 04:34:41'),
(7, 3000, 300, NULL, '2022-06-04 04:34:41'),
(8, 3000, 300, NULL, '2022-06-04 04:34:41'),
(9, 3000, 12, NULL, '2022-06-04 04:37:08'),
(10, 3000, 12, NULL, '2022-06-04 04:37:08'),
(11, 4000, 23, NULL, '2022-06-04 04:41:25'),
(12, 4000, 23, NULL, '2022-06-04 04:41:25'),
(13, 40000, 23, NULL, '2022-06-04 05:02:11'),
(14, 40000, 23, NULL, '2022-06-04 05:02:11'),
(15, 3445, 23, NULL, '2022-06-04 05:14:46'),
(16, 3445, 23, NULL, '2022-06-04 05:14:46'),
(17, 45, 23, NULL, '2022-06-04 05:16:12'),
(18, 45, 23, NULL, '2022-06-04 05:16:12'),
(19, 567, 23, NULL, '2022-06-04 05:16:28'),
(20, 567, 23, NULL, '2022-06-04 05:16:28'),
(21, 3445, 23, NULL, '2022-06-04 05:20:42'),
(22, 3445, 23, NULL, '2022-06-04 05:20:42'),
(23, 2345, 23, NULL, '2022-06-04 05:20:53'),
(24, 2345, 23, NULL, '2022-06-04 05:20:53'),
(25, 345, 23, NULL, '2022-06-04 05:29:47'),
(26, 345, 23, NULL, '2022-06-04 05:29:48'),
(27, 345, 23, NULL, '2022-06-04 05:29:56'),
(28, 345, 23, NULL, '2022-06-04 05:29:57'),
(29, 234, 23, NULL, '2022-06-04 05:30:39'),
(30, 234, 23, NULL, '2022-06-04 05:30:39'),
(31, 456, 23, NULL, '2022-06-04 05:33:54'),
(32, 456, 23, NULL, '2022-06-04 05:33:54'),
(33, 456, 23, NULL, '2022-06-04 05:34:02'),
(34, 456, 23, NULL, '2022-06-04 05:34:02'),
(35, 456, 23, NULL, '2022-06-04 05:34:06'),
(36, 456, 23, NULL, '2022-06-04 05:34:06'),
(37, 432, 23, NULL, '2022-06-04 05:34:14'),
(38, 432, 23, NULL, '2022-06-04 05:34:14'),
(39, 432, 23, NULL, '2022-06-04 05:34:20'),
(40, 432, 23, NULL, '2022-06-04 05:34:21'),
(41, 345678, 23, NULL, '2022-06-04 05:35:00'),
(42, 345678, 23, NULL, '2022-06-04 05:35:00'),
(43, 345678, 678, NULL, '2022-06-04 05:35:20'),
(44, 345678, 678, NULL, '2022-06-04 05:35:20'),
(45, 6788, 678, NULL, '2022-06-04 05:39:14'),
(46, 6788, 678, NULL, '2022-06-04 05:39:14'),
(47, 45678, 678, NULL, '2022-06-04 05:40:52'),
(48, 45678, 678, NULL, '2022-06-04 05:40:52'),
(49, 6789, 678, NULL, '2022-06-04 05:41:54'),
(50, 6789, 678, NULL, '2022-06-04 05:41:54'),
(51, 45678, 678, NULL, '2022-06-04 05:43:15'),
(52, 45678, 678, NULL, '2022-06-04 05:43:15'),
(53, 678, 678, NULL, '2022-06-04 05:44:58'),
(54, 678, 678, NULL, '2022-06-04 05:44:58'),
(55, 56789, 678, NULL, '2022-06-04 05:45:13'),
(56, 56789, 678, NULL, '2022-06-04 05:45:13'),
(57, 56111, 678, NULL, '2022-06-04 05:45:33'),
(58, 56111, 678, NULL, '2022-06-04 05:45:33'),
(59, 55433, 55433, NULL, '2022-06-04 05:46:00'),
(60, 55433, 55433, NULL, '2022-06-04 05:46:00'),
(61, 1000, 100, NULL, '2022-06-05 11:12:00'),
(62, 1000, 100, NULL, '2022-06-05 11:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `cement_stock`
--

CREATE TABLE `cement_stock` (
  `id` int NOT NULL,
  `amount_registered` int DEFAULT NULL,
  `amount_used` int DEFAULT '0',
  `amount_available` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cement_stock`
--

INSERT INTO `cement_stock` (`id`, `amount_registered`, `amount_used`, `amount_available`) VALUES
(1, 4000, 1000, NULL),
(2, 4000, 1000, NULL),
(3, 34, 23, NULL),
(4, 34, 23, NULL),
(5, 50, 10, NULL),
(6, 50, 10, NULL),
(7, 500, 10, NULL),
(8, 500, 10, NULL),
(9, 500, 10, NULL),
(10, 500, 10, NULL),
(11, 5000, 10, NULL),
(12, 5000, 10, NULL),
(13, 466, 10, NULL),
(14, 466, 10, NULL),
(15, 4567, 10, NULL),
(16, 4567, 10, NULL),
(17, 4567, 4567, NULL),
(18, 4567, 4567, NULL),
(19, 1234, 123, NULL),
(20, 1234, 123, NULL),
(21, 100, 20, NULL),
(22, 100, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int NOT NULL,
  `pay` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `pay`, `created_at`) VALUES
(1, 956, '2022-06-05 11:55:28'),
(2, 956, '2022-06-05 11:55:49'),
(3, 956, '2022-06-05 11:56:11'),
(4, 956, '2022-06-05 11:59:57'),
(5, 956, '2022-06-05 12:00:45'),
(6, 956, '2022-06-05 12:02:02'),
(7, 502, '2022-06-05 12:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `identificationNumber` int DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `typeOfEmployee` varchar(255) DEFAULT NULL,
  `timeIn` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `identificationNumber`, `department`, `typeOfEmployee`, `timeIn`, `time_out`, `created_at`) VALUES
(1, 'Jonathan Walumbe', 14853, 'IT', 'Full Time', '2022-06-04 01:49:00', '2022-06-04 06:49:00', '2022-06-05 11:45:01'),
(2, 'Michelle Nekesa', 1234, 'Home Science', 'Parttime', '2022-06-05 10:59:00', '2022-06-06 10:59:00', '2022-06-05 11:45:01'),
(3, 'Amon Kiget', 6067, 'IT', 'Full Time', '2022-06-05 12:09:00', '2022-06-05 16:14:00', '2022-06-05 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `water_stock`
--

CREATE TABLE `water_stock` (
  `id` int NOT NULL,
  `amount_registered` int DEFAULT NULL,
  `amount_used` int DEFAULT '0',
  `amount_available` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `water_stock`
--

INSERT INTO `water_stock` (`id`, `amount_registered`, `amount_used`, `amount_available`) VALUES
(1, 2000, 1000, 1000),
(2, 2000, 1000, 1000),
(3, 2000, 1000, 1000),
(4, 2000, 1000, 1000),
(5, 2000, 1000, 1000),
(6, 2000, 1000, 1000),
(7, 2000, 50, NULL),
(8, 2000, 50, NULL),
(9, 2000, 50, NULL),
(10, 2000, 50, NULL),
(11, 2000, 1000, NULL),
(12, 2000, 1000, NULL),
(13, 3000, 1000, NULL),
(14, 3000, 1000, NULL),
(15, 2000, 1000, NULL),
(16, 2000, 1000, NULL),
(17, 30000, 1000, NULL),
(18, 30000, 1000, NULL),
(19, 2000, 1000, NULL),
(20, 2000, 1000, NULL),
(21, 3000, 20, NULL),
(22, 3000, 20, NULL),
(23, 30000, 20, NULL),
(24, 30000, 20, NULL),
(25, 30000, 20, NULL),
(26, 30000, 20, NULL),
(27, 45678, 20, NULL),
(28, 45678, 20, NULL),
(29, 4567, 123, NULL),
(30, 4567, 123, NULL),
(31, 4567, 4567, NULL),
(32, 4567, 4567, NULL),
(33, 456712345, 1234, NULL),
(34, 456712345, 1234, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brick_stock`
--
ALTER TABLE `brick_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cement_stock`
--
ALTER TABLE `cement_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_stock`
--
ALTER TABLE `water_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brick_stock`
--
ALTER TABLE `brick_stock`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `cement_stock`
--
ALTER TABLE `cement_stock`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `water_stock`
--
ALTER TABLE `water_stock`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
