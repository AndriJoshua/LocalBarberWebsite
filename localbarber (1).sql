-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 04:42 PM
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
-- Database: `localbarber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'newadmin', '$2y$10$dFqGeh3jPPFeKrR3cmxNuO6CKiw1vkKQMPRwMSXkt5ZQCGshAwera', '2024-12-18 08:04:17', '2024-12-18 08:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `date`, `time`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Test  Register12', '081223239911', '2024-12-27', '20:10:00', 'test@gmail.com', '2024-12-18 12:47:06', '2024-12-18 12:47:06'),
(4, 'Test  Register123', '081223239911', '2024-12-27', '03:02:00', 'test@gmail.com', '2024-12-18 12:48:40', '2024-12-18 12:48:40'),
(5, 'John', '081223239911', '2024-12-27', '10:30:00', 'test@gmail.com', '2024-12-18 12:52:18', '2024-12-18 12:52:18'),
(6, 'Josh', '081111122244', '2024-12-31', '15:00:00', 'test@gmail.com', '2024-12-18 13:00:04', '2024-12-18 13:00:04'),
(8, 'Mr Roni', '0812232399103', '2024-12-19', '20:30:00', 'user@gmail.com', '2024-12-18 14:20:39', '2024-12-18 14:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `username`, `email`, `password`, `created_at`, `photo`) VALUES
(1, 'testlogin', 'testlogin@gmail.com', '$2y$10$sPOZqcF6USJ8SghfNmvqYe2RmGhkCQ6SYnWP8OS25qLWMkgpHTDlu', '2024-12-18 09:57:25', NULL),
(2, 'test1234', 'test@gmail.com', '$2y$10$.jUoDVW.FkKc3Mbow8i02.N7WlQHyeVM.6nEoOCLNv26sPYB9fz5W', '2024-12-18 10:49:35', 'uploads/2_1734531301.jpg'),
(3, 'john_doe', 'john@example.com', '$2y$10$IBwb/.ISajt.jBNaeG1MN.m0pmW.uHD8RDvnSHz50aDbGEGkhcrFm', '2024-12-18 03:57:25', NULL),
(4, 'test123', 'test123@gmail.com', '$2y$10$jdToK.I4gB5rTNE8zg/R1.0UQoomWAd/pcPVUizP3aiNy9BsBk4xm', '2024-12-18 04:13:33', NULL),
(5, 'test0', 'testlogin1@gmail.com', '$2y$10$cILIDMXW3GdWVI7X3U9Zle/g3hHXURRBLwutdcuVLtRx.UGASBZBC', '2024-12-18 10:05:20', NULL),
(6, 'user1', 'user@gmail.com', '$2y$10$jhnvk4xrSCOMQeAHL9yvO.8jwGkYi482Un6zeATzijWxBAv3iNpDy', '2024-12-18 14:17:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(1, 'andri', 'andrijoshuadamian98@gmail.com'),
(2, 'andridd', 'andrijoshu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
