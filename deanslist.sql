-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `tbl_list_grades`
--

CREATE TABLE `tbl_list_grades` (
  `grades_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_list_grades`
--

INSERT INTO `tbl_list_grades` (`grades_id`, `subject_id`, `applicant_id`, `grade`) VALUES
(36, 50, 31, 3),
(37, 51, 31, 3),
(38, 1, 32, 5),
(39, 2, 32, 5),
(40, 39, 32, 5),
(41, 40, 32, 5),
(42, 41, 32, 5),
(43, 42, 32, 5),
(44, 43, 32, 5),
(45, 1, 31, 4),
(46, 2, 31, 4),
(47, 39, 31, 4),
(48, 40, 31, 4),
(49, 41, 31, 4),
(50, 42, 31, 4),
(51, 43, 31, 4),
(52, 50, 34, 2),
(53, 51, 34, 2),
(54, 1, 35, 3),
(55, 2, 35, 3),
(56, 39, 35, 3),
(57, 40, 35, 3),
(58, 41, 35, 3),
(59, 42, 35, 3),
(60, 43, 35, 3),
(61, 50, 36, 10),
(62, 51, 36, 10),
(63, 1, 37, 1),
(64, 2, 37, 1),
(65, 39, 37, 3),
(66, 40, 37, 2),
(67, 41, 37, 2),
(68, 42, 37, 1),
(69, 43, 37, 1),
(70, 1, 37, 2),
(71, 2, 37, 2),
(72, 39, 37, 2),
(73, 40, 37, 2),
(74, 41, 37, 2),
(75, 42, 37, 2),
(76, 43, 37, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `curriculum` varchar(50) NOT NULL,
  `year_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_name`, `sem`, `curriculum`, `year_level`) VALUES
(1, 'Software Engineering 1', 1, 'cs', 3),
(2, 'Automata Theory and Formal Languages', 1, 'cs', 3),
(6, 'Introduction to Computing', 1, 'cs', 1),
(7, 'Computer Programming 1', 1, 'cs', 1),
(8, 'Purposive Communication', 1, 'cs', 1),
(9, 'Mathematics in the Modern World', 1, 'cs', 1),
(10, 'Understanding the Self', 1, 'cs', 1),
(11, 'Komunikasyon sa Akedimikong Filipino', 1, 'cs', 1),
(12, 'Physical Education 1', 1, 'cs', 1),
(13, 'National Service Training Program 1', 1, 'cs', 1),
(14, 'Euthenics A', 1, 'cs', 1),
(15, 'Discrete Structures 1', 2, 'cs', 1),
(16, 'Computer Programming 2', 2, 'cs', 1),
(17, 'Calculus 1', 2, 'cs', 1),
(18, 'The Contemporary World', 2, 'cs', 1),
(19, 'Science, Technology and Society', 2, 'cs', 1),
(20, 'Retorika', 2, 'cs', 1),
(21, 'Physical Education 2', 2, 'cs', 1),
(22, 'National Service Training Program 2', 2, 'cs', 1),
(23, 'Euthenics B', 2, 'cs', 1),
(24, 'Object-Oriented Programming', 1, 'cs', 2),
(25, 'Discrete Structures 2', 1, 'cs', 2),
(26, 'Digital Design', 1, 'cs', 2),
(27, 'Human Computer Interaction', 1, 'cs', 2),
(28, 'Data Structures and Algorithms', 1, 'cs', 2),
(29, 'Calculus 2', 1, 'cs', 2),
(30, 'Philippine Literature', 1, 'cs', 2),
(31, 'Physical Education 3', 1, 'cs', 2),
(32, 'Architecture and Organization', 2, 'cs', 2),
(33, 'Design and Analysis of Algorithms', 2, 'cs', 2),
(34, 'Programming Languages', 2, 'cs', 2),
(35, 'Networks and Communications', 2, 'cs', 2),
(36, 'CS Elective 1', 2, 'cs', 2),
(37, 'Information Management', 2, 'cs', 2),
(38, 'Physical Education 4', 2, 'cs', 2),
(39, 'Advanced Database Systems', 1, 'cs', 3),
(40, 'Information Assurance and Security', 1, 'cs', 3),
(41, 'Web Programming and Development', 1, 'cs', 3),
(42, 'CS Elective 2', 1, 'cs', 3),
(43, 'Application Development and Emerging Technologies', 1, 'cs', 3),
(44, 'CS Thesis 1', 2, 'cs', 3),
(45, 'Software Engineering 2', 2, 'cs', 3),
(46, 'Operating Systems', 2, 'cs', 3),
(47, 'Modeling and Simulation', 2, 'cs', 3),
(48, 'CS Elective 3', 2, 'cs', 3),
(49, 'Ethics 101', 2, 'cs', 3),
(50, 'Thesis 2', 1, 'cs', 4),
(51, 'Life and Works of Rizal', 1, 'cs', 4),
(52, 'Social Issues and Professional Practice', 2, 'cs', 4),
(53, 'Reading in Philippine History', 2, 'cs', 4),
(54, 'Art Appreciation', 2, 'cs', 4),
(55, 'Introduction to Computing', 1, 'it', 1),
(56, 'Computer Programming 1', 1, 'it', 1),
(57, 'Purposive Communication', 1, 'it', 1),
(58, 'Mathematics in the Modern World', 1, 'it', 1),
(59, 'Understanding the Self', 1, 'it', 1),
(60, 'Komunikasyon sa Akademikong Filipino', 1, 'it', 1),
(61, 'Physical Education 1', 1, 'it', 1),
(62, 'National Service Training Program', 1, 'it', 1),
(63, 'Euthenics A', 1, 'it', 1),
(64, 'Discrete Mathematics', 2, 'it', 1),
(65, 'Operating Systems', 2, 'it', 1),
(66, 'Computer Programming 2', 2, 'it', 1),
(67, 'Life and Works of Rizal', 2, 'it', 1),
(68, 'Art Appreciation', 2, 'it', 1),
(69, 'Retorika', 2, 'it', 1),
(70, 'Physical Education 2', 2, 'it', 1),
(71, 'National Service Training Program 2', 2, 'it', 1),
(72, 'Euthenics B', 2, 'it', 1),
(73, 'Object-Oriented Programming', 1, 'it', 2),
(74, '', 1, 'it', 2),
(75, 'Platform Technologies', 1, 'it', 2),
(76, 'Human Computer Interaction', 1, 'it', 2),
(77, 'Data Structues and Algorithms', 1, 'it', 2),
(78, 'Readings in Philippine History', 1, 'it', 2),
(79, 'Science, Technology and Society', 1, 'it', 2),
(80, 'Philippine Literature', 1, 'it', 2),
(81, 'Physical Education 3', 1, 'it', 2),
(82, 'Integrative Programming and Technologies', 2, 'it', 2),
(83, 'Networking 1', 2, 'it', 2),
(84, 'Quantitative Methods', 2, 'it', 2),
(85, 'Information Management', 2, 'it', 2),
(86, 'The Contemporary World', 2, 'it', 2),
(87, 'Ethics', 2, 'it', 2),
(88, 'Physical Education 4', 2, 'it', 2),
(89, 'Advanced Database Systems', 1, 'it', 3),
(90, 'Networking 2', 1, 'it', 3),
(91, 'Systems Integration and Technologies', 1, 'it', 3),
(92, 'Web Systems and Technologies', 1, 'it', 3),
(93, 'IT Elective 1', 1, 'it', 3),
(94, 'Application Development and Emerging Technologies', 1, 'it', 3),
(95, 'Information Assurance and Security 1', 2, 'it', 3),
(96, 'Software Engineering', 2, 'it', 3),
(97, 'Social and Professional Practice', 2, 'it', 3),
(98, 'IT Elective 2', 2, 'it', 3),
(99, 'IT Elective 3', 2, 'it', 3),
(100, 'Capstone Project and Research 2', 1, 'it', 4),
(101, 'Information Assurance and Security 2', 1, 'it', 4),
(102, 'IT Elective 4', 1, 'it', 4),
(103, 'Systems Administration and Maintenance', 2, 'it', 4),
(104, 'Practicum/Industry Immersion', 2, 'it', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_applicant`
--

CREATE TABLE `tlb_applicant` (
  `applicant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grade_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tlb_applicant`
--

INSERT INTO `tlb_applicant` (`applicant_id`, `user_id`, `grade_file`) VALUES
(31, 23, NULL),
(32, 23, NULL),
(33, 23, NULL),
(34, 1, NULL),
(35, 17, NULL),
(36, 16, NULL),
(37, 15, NULL),
(38, 15, NULL),
(39, 15, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `tbl_list_grades`
--
ALTER TABLE `tbl_list_grades`
  ADD PRIMARY KEY (`grades_id`);

--
-- Indexes for table `tlb_applicant`
--
ALTER TABLE `tlb_applicant`
  ADD PRIMARY KEY (`applicant_id`);

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
-- AUTO_INCREMENT for table `tbl_list_grades`
--
ALTER TABLE `tbl_list_grades`
  MODIFY `grades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tlb_applicant`
--
ALTER TABLE `tlb_applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
