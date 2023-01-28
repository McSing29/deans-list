-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 02:18 PM
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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `img` varchar(75) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `img`, `firstname`, `lastname`, `rank`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'go.png', 'Dr. Roderick', 'P. Go', 'College Dean', 'roderickgo@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:03:58', '2023-01-25 14:03:58'),
(4, 'odon.png', 'Engr. Odon A. ', 'Maravillas, Jr., MSCS', 'Associate Dean', 'odonmaravillas@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:05:17', '2023-01-25 14:05:17'),
(6, 'belamide.png', 'Engr. Gadmar M.', 'Belamide, MEnggEd-ICT', 'College Secretary', 'gadmarbelamide@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:06:48', '2023-01-25 14:06:48'),
(7, 'sadiwa.png', 'Ms. Lucy  ', 'Felix-Sadiwa, MSCS', 'CS Department Head', 'lucyfelix@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:10:13', '2023-01-25 14:10:13'),
(8, 'escorialj.png', 'Mr. John Augustus', 'A. Escorial, MIT', 'IT Department Head', 'johnaugustus@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:11:18', '2023-01-28 00:43:31'),
(9, 'escoriala.png', 'Mrs. Aida  ', 'A. Escorial, MIT', 'Graduate Program Chair', 'aidaescorial@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:12:48', '2023-01-25 14:12:48'),
(10, 'aripE.png', 'Engr. Edwip I.  ', 'Arip, MEnggEd-ICT', 'External Studies Unit Technical Associate', 'edwinarip@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:13:50', '2023-01-25 14:13:50'),
(11, 'aripJ.png', 'Mr. John Paul ', ' I. Arip LMS', 'Quality Assurance', 'johpaularip@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:14:25', '2023-01-25 14:14:25'),
(12, 'female.png', 'Mrs. Justin Anne ', ' Albay-Arip', 'Visiting Lecturer', 'justinannearip@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:15:02', '2023-01-25 14:15:02'),
(13, 'ballaho.png', 'Mr. Jaydee  ', 'C. Ballaho', 'LMS Lead Developer', 'jaydeeballaho@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:15:37', '2023-01-25 14:15:37'),
(14, 'catadman.png', 'Mr. Jason', 'A. Catadman ', 'LMS Assistant Developer', 'jasoncatadman@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:16:11', '2023-01-25 14:16:44'),
(15, 'flores.png', 'Engr. Mark L. ', 'Flores, MEnggEd-ICT ', 'Director, Data Protection and Security', 'markflores@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:17:53', '2023-01-25 14:17:53'),
(16, 'gregana.png', 'Ms. Pauleen Jean ', 'E. Gregana ', 'Visiting Lecturer', 'pauleenjeangregana@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:18:37', '2023-01-25 14:18:37'),
(17, 'female.png', 'Ms. Aradzna ', ' M. Kamman', 'Visiting Lecturer', 'aradznakamman@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:19:25', '2023-01-25 14:19:25'),
(18, 'female.png', 'Ms. Mara ', 'Marie Liao', 'Visiting Lecturer', 'maramarieliao@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:20:14', '2023-01-25 14:20:14'),
(19, 'lines.png', 'Engr. Marvic ', 'A. Lines, MEnggEd-ICT', 'LMS Training and Management', 'marviclines@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:21:12', '2023-01-25 14:21:12'),
(20, 'female.png', 'Ms. Ceed Janelle  ', 'B. Lorenzo', 'Visiting Lecturer', 'ceedjanellelorenzo@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:22:11', '2023-01-25 14:22:11'),
(21, 'lorenzo.png', 'Engr. Ceed Jezreel  ', 'B. Lorenzo, MIT', 'Research Coordinator', 'ceedjezreellorenzo@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:23:18', '2023-01-25 14:23:18'),
(22, 'rojas.png', 'Engr. Marjorie  ', 'A. Rojas', 'Student Affairs and Guidance Coordinator', 'marjorierojas@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:24:09', '2023-01-25 14:24:09'),
(23, 'male.png', 'Mr. Theo Jay ', 'M&#039;lleno Sanson', 'Visiting Lecturer', 'theojaysanson@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:24:52', '2023-01-25 14:24:52'),
(24, 'tahil.png', 'Mr. Salimar B.  ', 'Tahil, MEnggEd-ICT', 'Asst. Director, MISTO', 'salimartahil@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:25:31', '2023-01-25 14:25:31'),
(25, 'timpangco.png', 'Mr. Whesley', 'G. Timpangco ', 'LMS Network Engineer', 'whesleytimpangco@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:26:12', '2023-01-25 14:26:12'),
(26, 'jackaria.png', 'Ms. Alhadzra  ', 'M. Jackaria', 'Laboratory Technician', 'alhadzrajackaria@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:26:58', '2023-01-25 14:26:58'),
(27, 'male.png', 'Mr. John Roy  ', 'S. Velario', 'Administrative Assistant', 'johnroyvelario@wmsu.edu.ph', 'Active Employee', '2023-01-25 14:27:34', '2023-01-25 14:27:34'),
(32, 'male.png', 'Emil John', 'Magcanta', 'Tampa LeadDev', 'ejpogi@wmsu.edu.ph', 'Active Employee', '2023-01-26 12:11:00', '2023-01-26 12:11:00');

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
(15, 'ejaymcsing@wmsu.edu.ph', 'password', 'Ejay', 'McSing', 'admin'),
(16, 'ejaypogi@wmsu.edu.ph', 'password', 'Ejay', 'Pogi', 'staff'),
(17, 'ejaypogi@gmail.com', 'password', 'Ejay', 'Pogi', 'admin'),
(18, 'ejmagcanta@gmail.com', 'password', 'Ejay', 'Magcanta', 'staff'),
(23, 'joshuayasil@wmsu.edu.ph', 'password', 'Josh', 'Yasil', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
