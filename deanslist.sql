-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 11:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deanslist`
--

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `years` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `cet` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `code`, `description`, `years`, `level`, `cet`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BSCS', 'BS Computer Science', 4, 'Bachelor', 90, 'Offering', '2022-11-03 07:10:55', '2022-11-13 06:19:15'),
(2, 'BSIT', 'BS Information Technology', 4, 'Bachelor', 70, 'Offering', '2022-11-03 07:24:14', '2022-11-13 15:07:16'),
(3, 'BSCS-ST', 'BS Computer Science major in Software Technology', 4, 'Bachelor', 90, 'Phase-Out', '2022-11-03 07:17:36', '2022-11-13 15:07:49'),
(4, 'ACT', 'Associate in Computer Technology', 2, 'Associate', 55, 'Offering', '2022-11-13 05:26:06', '2022-11-13 15:06:10'),
(5, 'ACS', 'Associate in Computer Science', 2, 'Associate', 55, 'Phase-Out', '2022-11-13 06:20:18', '2022-11-13 15:06:13'),
(6, 'BSCE', 'BS Computer Engineering', 5, 'Bachelor', 90, 'Offering', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_type`) VALUES
(1, 'emiljohn1129@gmail.com', 'password', 'Ejay', 'McSing', '0'),
(2, 'xt202001281@wmsu.edu.ph', 'password', 'Ejay', 'McSing', '0'),
(3, 'ejaymcsing@gmail.com', 'password', 'Ejay', 'McSing', '0'),
(6, 'markvlad@wmsu.edu.ph', 'password', 'mark', 'Vladimir', '0'),
(13, 'joshuayasil@wmsu.edu.ph', 'password', 'Joshua', 'Yasil', '1'),
(14, 'joshyasil@gmail.com', 'password', 'Josh', 'Yasil', '1'),
(15, 'ejaymcsing@wmsu.edu.ph', 'password', 'Ejay', 'McSing', 'admin'),
(16, 'ejaypogi@wmsu.edu.ph', 'password', 'Ejay', 'Pogi', 'staff'),
(17, 'ejaypogi@gmail.com', 'password', 'Ejay', 'Pogi', 'admin'),
(18, 'ejmagcanta@gmail.com', 'password', 'Ejay', 'Magcanta', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
