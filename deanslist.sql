-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 04:18 PM
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
(3, 'go.png', 'Roderick', 'Go', 'College Dean', 'roderickgo@wmsu.edu.ph', 'Active', '2023-01-25 14:03:58', '2023-01-30 17:14:34'),
(4, 'odon.png', 'Engr. Odon A. ', 'Maravillas, Jr., MSCS', 'Associate Dean', 'odonmaravillas@wmsu.edu.ph', 'Active', '2023-01-25 14:05:17', '2023-01-30 16:50:03'),
(6, 'belamide.png', 'Engr. Gadmar M.', 'Belamide, MEnggEd-ICT', 'College Secretary', 'gadmarbelamide@wmsu.edu.ph', 'Active', '2023-01-25 14:06:48', '2023-01-30 16:49:32'),
(7, 'sadiwa.png', 'Ms. Lucy  ', 'Felix-Sadiwa, MSCS', 'CS Department Head', 'lucyfelix@wmsu.edu.ph', 'Active', '2023-01-25 14:10:13', '2023-01-30 16:50:18'),
(8, 'escorialj.png', 'Mr. John Augustus', 'A. Escorial, MIT', 'IT Department Head', 'johnaugustus@wmsu.edu.ph', 'Active', '2023-01-25 14:11:18', '2023-01-30 16:50:35'),
(9, 'escoriala.png', 'Mrs. Aida  ', 'A. Escorial, MIT', 'Graduate Program Chair', 'aidaescorial@wmsu.edu.ph', 'Active', '2023-01-25 14:12:48', '2023-01-30 16:50:44'),
(10, 'aripE.png', 'Engr. Edwin I.  ', 'Arip, MEnggEd-ICT', 'External Studies Unit Technical Associate', 'edwinarip@wmsu.edu.ph', 'Active', '2023-01-25 14:13:50', '2023-01-30 17:14:44'),
(11, 'aripJ.png', 'Mr. John Paul ', ' I. Arip LMS', 'Quality Assurance', 'johpaularip@wmsu.edu.ph', 'Active', '2023-01-25 14:14:25', '2023-01-30 16:51:21'),
(12, 'female.png', 'Mrs. Justin Anne ', ' Albay-Arip', 'Visiting Lecturer', 'justinannearip@wmsu.edu.ph', 'Active', '2023-01-25 14:15:02', '2023-01-30 16:51:34'),
(13, 'ballaho.png', 'Mr. Jaydee  ', 'C. Ballaho', 'LMS Lead Developer', 'jaydeeballaho@wmsu.edu.ph', 'Active', '2023-01-25 14:15:37', '2023-01-30 16:51:42'),
(14, 'catadman.png', 'Mr. Jason', 'A. Catadman ', 'LMS Assistant Developer', 'jasoncatadman@wmsu.edu.ph', 'Active', '2023-01-25 14:16:11', '2023-01-30 16:51:52'),
(15, 'flores.png', 'Engr. Mark L. ', 'Flores, MEnggEd-ICT ', 'Director, Data Protection and Security', 'markflores@wmsu.edu.ph', 'Active', '2023-01-25 14:17:53', '2023-01-30 16:52:01'),
(16, 'gregana.png', 'Ms. Pauleen Jean ', 'E. Gregana ', 'Visiting Lecturer', 'pauleenjeangregana@wmsu.edu.ph', 'Active', '2023-01-25 14:18:37', '2023-01-30 16:52:09'),
(17, 'female.png', 'Ms. Aradzna ', ' M. Kamman', 'Visiting Lecturer', 'aradznakamman@wmsu.edu.ph', 'Active', '2023-01-25 14:19:25', '2023-01-30 16:52:20'),
(18, 'female.png', 'Ms. Mara ', 'Marie Liao', 'Visiting Lecturer', 'maramarieliao@wmsu.edu.ph', 'Active', '2023-01-25 14:20:14', '2023-01-30 16:52:30'),
(19, 'lines.png', 'Engr. Marvic ', 'A. Lines, MEnggEd-ICT', 'LMS Training and Management', 'marviclines@wmsu.edu.ph', 'Active', '2023-01-25 14:21:12', '2023-01-30 16:52:47'),
(20, 'female.png', 'Ms. Ceed Janelle  ', 'B. Lorenzo', 'Visiting Lecturer', 'ceedjanellelorenzo@wmsu.edu.ph', 'Active', '2023-01-25 14:22:11', '2023-01-30 16:53:01'),
(21, 'lorenzo.png', 'Engr. Ceed Jezreel  ', 'B. Lorenzo, MIT', 'Research Coordinator', 'ceedjezreellorenzo@wmsu.edu.ph', 'Active', '2023-01-25 14:23:18', '2023-01-30 16:53:13'),
(22, 'rojas.png', 'Engr. Marjorie  ', 'A. Rojas', 'Student Affairs and Guidance Coordinator', 'marjorierojas@wmsu.edu.ph', 'Active', '2023-01-25 14:24:09', '2023-01-30 16:53:26'),
(23, 'male.png', 'Mr. Theo Jay ', 'M&#039;lleno Sanson', 'Visiting Lecturer', 'theojaysanson@wmsu.edu.ph', 'Active', '2023-01-25 14:24:52', '2023-01-30 16:53:37'),
(24, 'tahil.png', 'Mr. Salimar B.  ', 'Tahil, MEnggEd-ICT', 'Asst. Director, MISTO', 'salimartahil@wmsu.edu.ph', 'Active', '2023-01-25 14:25:31', '2023-01-30 16:53:50'),
(25, 'timpangco.png', 'Mr. Whesley', 'G. Timpangco ', 'LMS Network Engineer', 'whesleytimpangco@wmsu.edu.ph', 'Active', '2023-01-25 14:26:12', '2023-01-30 16:54:00'),
(26, 'jackaria.png', 'Ms. Alhadzra  ', 'M. Jackaria', 'Laboratory Technician', 'alhadzrajackaria@wmsu.edu.ph', 'Active', '2023-01-25 14:26:58', '2023-01-30 16:54:11'),
(27, 'male.png', 'Mr. John Roy  ', 'S. Velario', 'Administrative Assistant', 'johnroyvelario@wmsu.edu.ph', 'Active', '2023-01-25 14:27:34', '2023-01-30 16:54:24'),
(39, 'female.png', 'bushra', 'jaafar', 'QA', 'bush@wmsu.edu.ph', 'Active', '2023-02-03 04:44:36', '2023-02-03 04:45:05'),
(41, 'female.png', 'arjay', 'malaga', 'dean', 'arjaymalaga@wmsu.edu.ph', 'Active', '2023-02-10 05:28:05', '2023-02-10 05:28:05'),
(42, 'male.png', 'Ejay ', 'McSing', 'Tampa LeadDev', 'ejaymcsing@wmsu.edu.ph', 'Active', '2023-02-22 12:06:38', '2023-02-22 12:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `average` varchar(255) NOT NULL,
  `units` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `curriculum` varchar(255) NOT NULL,
  `yearlevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `subject`, `grade`, `status`, `average`, `units`, `email`, `schoolyear`, `semester`, `curriculum`, `yearlevel`) VALUES
(1073, 'Josh Yasil', 'Math', 2, 'pending', '1.46875', 2, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1074, 'Josh Yasil', 'PE', 1, 'pending', '1.46875', 2, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1075, 'Josh Yasil', 'ComProg', 1, 'pending', '1.46875', 3, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1076, 'Josh Yasil', 'Math', 2, 'pending', '1.46875', 2, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1077, 'Josh Yasil', 'PE', 2, 'pending', '1.46875', 3, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1078, 'Josh Yasil', 'ComProg', 2, 'pending', '1.46875', 2, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1079, 'Josh Yasil', 'PE', 1, 'pending', '1.46875', 3, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1080, 'Josh Yasil', 'PE', 2, 'pending', '1.46875', 2, 'joshuayasil@wmsu.edu.ph', 'School Year 2023-2024', 'Second semester', 'Computer Science', 'Third Year'),
(1089, 'Denise Gerzon', 'Math', 2, 'pending', '1.40625', 2, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1090, 'Denise Gerzon', 'PE', 1, 'pending', '1.40625', 3, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1091, 'Denise Gerzon', 'ComProg', 1, 'pending', '1.40625', 2, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1092, 'Denise Gerzon', 'Math', 2, 'pending', '1.40625', 3, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1093, 'Denise Gerzon', 'PE', 2, 'pending', '1.40625', 2, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1094, 'Denise Gerzon', 'ComProg', 1, 'pending', '1.40625', 2, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1095, 'Denise Gerzon', 'ComProg', 2, 'pending', '1.40625', 2, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1096, 'Denise Gerzon', 'PE', 1, 'pending', '1.40625', 2, 'denisegerzon@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Computer Science', 'Third Year'),
(1097, 'Mark T. Vladimir', 'Math', 2, 'pending', '1.46875', 2, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1098, 'Mark T. Vladimir', 'PE', 1, 'pending', '1.46875', 3, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1099, 'Mark T. Vladimir', 'ComProg', 1, 'pending', '1.46875', 2, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1100, 'Mark T. Vladimir', 'Math', 2, 'pending', '1.46875', 2, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1101, 'Mark T. Vladimir', 'PE', 2, 'pending', '1.46875', 2, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1102, 'Mark T. Vladimir', 'ComProg', 2, 'pending', '1.46875', 2, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1103, 'Mark T. Vladimir', 'Math', 1, 'pending', '1.46875', 3, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1104, 'Mark T. Vladimir', 'PE', 2, 'pending', '1.46875', 2, 'markvlad@wmsu.edu.ph', 'School Year 2022-2023', 'Second Semester', 'Information Technology', 'Third Year'),
(1105, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1106, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1107, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1108, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1109, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1110, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1111, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1112, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1113, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1114, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1115, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1116, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1117, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1118, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1119, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1120, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1121, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1122, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1123, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1124, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1125, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1126, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1127, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1128, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1129, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1130, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1131, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1132, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1133, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1134, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1135, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1136, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1137, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1138, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1139, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1140, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1141, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1142, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1143, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1144, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1145, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1146, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1147, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1148, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1149, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1150, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1151, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1152, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1153, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1154, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1155, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1156, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1157, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1158, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1159, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1160, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1161, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1162, '', 'PE', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1163, '', 'ComProg', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1164, '', 'PE', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1165, '', 'Math', 1, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1166, '', 'PE', 2, 'pending', '1.5', 3, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1167, '', 'ComProg', 1, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1168, '', 'Math', 2, 'pending', '1.5', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1169, '', 'PE', 1, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1170, '', 'Math', 2, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1171, '', 'PE', 3, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1172, '', 'ComProg', 2, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1173, '', 'Math', 2, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1174, '', 'PE', 2, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1175, '', 'ComProg', 2, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year'),
(1176, '', 'PE', 2, 'pending', '2', 2, '', 'School Year 2022-2023', 'First Semester', 'Computer Science', 'Third Year');

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
(6, 'BSCE', 'BS Computer Engineering', 5, 'Bachelor', 90, 'Phase-Out', '0000-00-00 00:00:00', '2023-02-03 04:42:34'),
(10, '123', 'senior high school', 4, 'Associate', 70, 'Phase-Out', '2023-02-03 04:43:11', '2023-02-03 04:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL,
  `subject4` varchar(50) NOT NULL,
  `subject5` varchar(50) NOT NULL,
  `average` decimal(5,2) NOT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 'ejaymcsing@wmsu.edu.ph', 'password', 'Ejay', 'McSing', 'admin'),
(16, 'ejaypogi@wmsu.edu.ph', 'password', 'Ejay', 'Pogi', 'staff'),
(17, 'ejaypogi@gmail.com', 'password', 'Ejay', 'Pogi', 'admin'),
(18, 'ejmagcanta@gmail.com', 'password', 'Ejay', 'Magcanta', 'staff'),
(23, 'joshuayasil@wmsu.edu.ph', 'password', 'Josh', 'Yasil', 'staff'),
(24, 'mamartdomo@wmsu.edu.ph', 'password', 'Mamart', 'Domo', 'staff'),
(25, 'denisegerzon@wmsu.edu.ph', 'password', 'Denise', 'Gerzon', 'staff'),
(26, 'markvlad@wmsu.edu.ph', 'password', 'Mark', 'Vladimir', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1177;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
