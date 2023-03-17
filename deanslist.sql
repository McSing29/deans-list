-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 01:00 PM
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
-- Table structure for table `listers`
--

CREATE TABLE `listers` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `GPA` float NOT NULL,
  `department` varchar(30) NOT NULL,
  `year_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listers`
--

INSERT INTO `listers` (`firstname`, `lastname`, `GPA`, `department`, `year_level`) VALUES
('Mark', 'Vladimir', 1.25, 'Computer Science', 3),
('Pogi', 'Hamja', 1, 'BSCS', 3),
('hAMJA', 'vLADIMIR', 2, 'BSCS', 4),
('Nash', 'Sari', 1.5, 'BSCS', 3),
('Andrei', 'Cafino', 1.75, 'BSIT', 3),
('Denise', 'Vonn', 1.75, 'BSCS', 3),
('Jsohua', 'Yasil', 1, 'BSCS', 3);

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
(5, 'ACS', 'Associate in Computer Science', 2, 'Associate', 55, 'Phase-Out', '2022-11-13 06:20:18', '2022-11-13 15:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_grades`
--

CREATE TABLE `tbl_list_grades` (
  `grades_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_list_grades`
--

INSERT INTO `tbl_list_grades` (`grades_id`, `subject_id`, `applicant_id`, `grade`) VALUES
(95, 50, 49, 2),
(96, 51, 49, 2),
(97, 52, 50, 2),
(98, 53, 50, 2),
(99, 54, 50, 2),
(100, 50, 51, 3),
(101, 51, 51, 500),
(102, 50, 49, 2),
(103, 51, 49, 2),
(104, 50, 53, 3),
(105, 51, 53, 3),
(106, 50, 53, 3),
(107, 51, 53, 2),
(108, 50, 55, 2),
(109, 51, 55, 2),
(110, 50, 56, 2),
(111, 51, 56, 2),
(112, 50, 57, 2),
(113, 51, 57, 2),
(114, 50, 58, 3),
(115, 51, 58, 2),
(116, 50, 59, 2),
(117, 51, 59, 5),
(118, 50, 60, 2),
(119, 51, 60, 1),
(120, 50, 60, 2),
(121, 51, 60, 1),
(122, 50, 60, 2),
(123, 51, 60, 1),
(124, 50, 60, 2),
(125, 51, 60, 1),
(126, 50, 60, 2),
(127, 51, 60, 1),
(128, 50, 60, 2),
(129, 51, 60, 1),
(130, 6, 66, 3),
(131, 7, 66, 3),
(132, 8, 66, 2),
(133, 9, 66, 1),
(134, 10, 66, 2),
(135, 11, 66, 2),
(136, 12, 66, 1),
(137, 13, 66, 2),
(138, 14, 66, 2),
(139, 6, 67, 2),
(140, 7, 67, 2),
(141, 8, 67, 2),
(142, 9, 67, 2),
(143, 10, 67, 2),
(144, 11, 67, 2),
(145, 12, 67, 2),
(146, 13, 67, 2),
(147, 14, 67, 2),
(148, 6, 67, 1),
(149, 7, 67, 1),
(150, 8, 67, 1),
(151, 9, 67, 1),
(152, 10, 67, 1),
(153, 11, 67, 1),
(154, 12, 67, 1),
(155, 13, 67, 1),
(156, 14, 67, 1),
(157, 6, 67, 1),
(158, 7, 67, 1),
(159, 8, 67, 1),
(160, 9, 67, 1),
(161, 10, 67, 1),
(162, 11, 67, 1),
(163, 12, 67, 1),
(164, 13, 67, 1),
(165, 14, 67, 1),
(166, 6, 67, 1),
(167, 7, 67, 1),
(168, 8, 67, 1),
(169, 9, 67, 1),
(170, 10, 67, 1),
(171, 11, 67, 1),
(172, 12, 67, 1),
(173, 13, 67, 1),
(174, 14, 67, 1),
(175, 6, 67, 1),
(176, 7, 67, 1),
(177, 8, 67, 1),
(178, 9, 67, 1),
(179, 10, 67, 1),
(180, 11, 67, 1),
(181, 12, 67, 1),
(182, 13, 67, 1),
(183, 14, 67, 1),
(184, 6, 67, 1),
(185, 7, 67, 1),
(186, 8, 67, 1),
(187, 9, 67, 1),
(188, 10, 67, 1),
(189, 11, 67, 1),
(190, 12, 67, 1),
(191, 13, 67, 1),
(192, 14, 67, 1),
(193, 6, 67, 1),
(194, 7, 67, 1),
(195, 8, 67, 1),
(196, 9, 67, 1),
(197, 10, 67, 1),
(198, 11, 67, 1),
(199, 12, 67, 1),
(200, 13, 67, 1),
(201, 14, 67, 1),
(202, 6, 67, 1),
(203, 7, 67, 1),
(204, 8, 67, 1),
(205, 9, 67, 1),
(206, 10, 67, 1),
(207, 11, 67, 1),
(208, 12, 67, 1),
(209, 13, 67, 1),
(210, 14, 67, 1),
(211, 6, 67, 1),
(212, 7, 67, 1),
(213, 8, 67, 1),
(214, 9, 67, 1),
(215, 10, 67, 1),
(216, 11, 67, 1),
(217, 12, 67, 1),
(218, 13, 67, 1),
(219, 14, 67, 1),
(220, 6, 67, 1),
(221, 7, 67, 1),
(222, 8, 67, 1),
(223, 9, 67, 1),
(224, 10, 67, 1),
(225, 11, 67, 1),
(226, 12, 67, 1),
(227, 13, 67, 1),
(228, 14, 67, 1),
(229, 6, 67, 1),
(230, 7, 67, 1),
(231, 8, 67, 1),
(232, 9, 67, 1),
(233, 10, 67, 1),
(234, 11, 67, 1),
(235, 12, 67, 1),
(236, 13, 67, 1),
(237, 14, 67, 1),
(238, 6, 67, 1),
(239, 7, 67, 1),
(240, 8, 67, 1),
(241, 9, 67, 1),
(242, 10, 67, 1),
(243, 11, 67, 1),
(244, 12, 67, 1),
(245, 13, 67, 1),
(246, 14, 67, 1),
(247, 6, 67, 1),
(248, 7, 67, 1),
(249, 8, 67, 1),
(250, 9, 67, 1),
(251, 10, 67, 1),
(252, 11, 67, 1),
(253, 12, 67, 1),
(254, 13, 67, 1),
(255, 14, 67, 1),
(256, 6, 67, 1),
(257, 7, 67, 1),
(258, 8, 67, 1),
(259, 9, 67, 1),
(260, 10, 67, 1),
(261, 11, 67, 1),
(262, 12, 67, 1),
(263, 13, 67, 1),
(264, 14, 67, 1),
(265, 6, 67, 1),
(266, 7, 67, 1),
(267, 8, 67, 1),
(268, 9, 67, 1),
(269, 10, 67, 1),
(270, 11, 67, 1),
(271, 12, 67, 1),
(272, 13, 67, 1),
(273, 14, 67, 1),
(274, 6, 67, 1),
(275, 7, 67, 1),
(276, 8, 67, 1),
(277, 9, 67, 1),
(278, 10, 67, 1),
(279, 11, 67, 1),
(280, 12, 67, 1),
(281, 13, 67, 1),
(282, 14, 67, 1),
(283, 6, 67, 1),
(284, 7, 67, 1),
(285, 8, 67, 1),
(286, 9, 67, 1),
(287, 10, 67, 1),
(288, 11, 67, 1),
(289, 12, 67, 1),
(290, 13, 67, 1),
(291, 14, 67, 1),
(292, 6, 67, 1),
(293, 7, 67, 1),
(294, 8, 67, 1),
(295, 9, 67, 1),
(296, 10, 67, 1),
(297, 11, 67, 1),
(298, 12, 67, 1),
(299, 13, 67, 1),
(300, 14, 67, 1),
(301, 6, 67, 1),
(302, 7, 67, 1),
(303, 8, 67, 1),
(304, 9, 67, 1),
(305, 10, 67, 1),
(306, 11, 67, 1),
(307, 12, 67, 1),
(308, 13, 67, 1),
(309, 14, 67, 1),
(310, 6, 67, 1),
(311, 7, 67, 1),
(312, 8, 67, 1),
(313, 9, 67, 1),
(314, 10, 67, 1),
(315, 11, 67, 1),
(316, 12, 67, 1),
(317, 13, 67, 1),
(318, 14, 67, 1),
(319, 6, 67, 1),
(320, 7, 67, 1),
(321, 8, 67, 1),
(322, 9, 67, 1),
(323, 10, 67, 1),
(324, 11, 67, 1),
(325, 12, 67, 1),
(326, 13, 67, 1),
(327, 14, 67, 1),
(328, 6, 67, 1),
(329, 7, 67, 1),
(330, 8, 67, 1),
(331, 9, 67, 1),
(332, 10, 67, 1),
(333, 11, 67, 1),
(334, 12, 67, 1),
(335, 13, 67, 1),
(336, 14, 67, 1),
(337, 6, 67, 1),
(338, 7, 67, 1),
(339, 8, 67, 1),
(340, 9, 67, 1),
(341, 10, 67, 1),
(342, 11, 67, 1),
(343, 12, 67, 1),
(344, 13, 67, 1),
(345, 14, 67, 1),
(346, 6, 67, 1),
(347, 7, 67, 1),
(348, 8, 67, 1),
(349, 9, 67, 1),
(350, 10, 67, 1),
(351, 11, 67, 1),
(352, 12, 67, 1),
(353, 13, 67, 1),
(354, 14, 67, 1),
(355, 6, 67, 1),
(356, 7, 67, 1),
(357, 8, 67, 1),
(358, 9, 67, 1),
(359, 10, 67, 1),
(360, 11, 67, 1),
(361, 12, 67, 1),
(362, 13, 67, 1),
(363, 14, 67, 1),
(364, 6, 67, 1),
(365, 7, 67, 1),
(366, 8, 67, 1),
(367, 9, 67, 1),
(368, 10, 67, 1),
(369, 11, 67, 1),
(370, 12, 67, 1),
(371, 13, 67, 1),
(372, 14, 67, 1),
(373, 6, 67, 1),
(374, 7, 67, 1),
(375, 8, 67, 1),
(376, 9, 67, 1),
(377, 10, 67, 1),
(378, 11, 67, 1),
(379, 12, 67, 1),
(380, 13, 67, 1),
(381, 14, 67, 1),
(382, 6, 67, 1),
(383, 7, 67, 1),
(384, 8, 67, 1),
(385, 9, 67, 1),
(386, 10, 67, 1),
(387, 11, 67, 1),
(388, 12, 67, 1),
(389, 13, 67, 1),
(390, 14, 67, 1),
(391, 6, 67, 1),
(392, 7, 67, 1),
(393, 8, 67, 1),
(394, 9, 67, 1),
(395, 10, 67, 1),
(396, 11, 67, 1),
(397, 12, 67, 1),
(398, 13, 67, 1),
(399, 14, 67, 1),
(400, 6, 67, 1),
(401, 7, 67, 1),
(402, 8, 67, 1),
(403, 9, 67, 1),
(404, 10, 67, 1),
(405, 11, 67, 1),
(406, 12, 67, 1),
(407, 13, 67, 1),
(408, 14, 67, 1),
(409, 6, 67, 1),
(410, 7, 67, 1),
(411, 8, 67, 1),
(412, 9, 67, 1),
(413, 10, 67, 1),
(414, 11, 67, 1),
(415, 12, 67, 1),
(416, 13, 67, 1),
(417, 14, 67, 1),
(418, 6, 67, 1),
(419, 7, 67, 1),
(420, 8, 67, 1),
(421, 9, 67, 1),
(422, 10, 67, 1),
(423, 11, 67, 1),
(424, 12, 67, 1),
(425, 13, 67, 1),
(426, 14, 67, 1),
(427, 6, 67, 1),
(428, 7, 67, 1),
(429, 8, 67, 1),
(430, 9, 67, 1),
(431, 10, 67, 1),
(432, 11, 67, 1),
(433, 12, 67, 1),
(434, 13, 67, 1),
(435, 14, 67, 1),
(436, 6, 67, 1),
(437, 7, 67, 1),
(438, 8, 67, 1),
(439, 9, 67, 1),
(440, 10, 67, 1),
(441, 11, 67, 1),
(442, 12, 67, 1),
(443, 13, 67, 1),
(444, 14, 67, 1),
(445, 6, 67, 1),
(446, 7, 67, 1),
(447, 8, 67, 1),
(448, 9, 67, 1),
(449, 10, 67, 1),
(450, 11, 67, 1),
(451, 12, 67, 1),
(452, 13, 67, 1),
(453, 14, 67, 1),
(454, 6, 67, 1),
(455, 7, 67, 1),
(456, 8, 67, 1),
(457, 9, 67, 1),
(458, 10, 67, 1),
(459, 11, 67, 1),
(460, 12, 67, 1),
(461, 13, 67, 1),
(462, 14, 67, 1),
(463, 6, 67, 1),
(464, 7, 67, 1),
(465, 8, 67, 1),
(466, 9, 67, 1),
(467, 10, 67, 1),
(468, 11, 67, 1),
(469, 12, 67, 1),
(470, 13, 67, 1),
(471, 14, 67, 1),
(472, 6, 67, 1),
(473, 7, 67, 1),
(474, 8, 67, 1),
(475, 9, 67, 1),
(476, 10, 67, 1),
(477, 11, 67, 1),
(478, 12, 67, 1),
(479, 13, 67, 1),
(480, 14, 67, 1),
(481, 6, 67, 1),
(482, 7, 67, 1),
(483, 8, 67, 1),
(484, 9, 67, 1),
(485, 10, 67, 1),
(486, 11, 67, 1),
(487, 12, 67, 3),
(488, 13, 67, 1),
(489, 14, 67, 1),
(490, 6, 67, 1),
(491, 7, 67, 1),
(492, 8, 67, 1),
(493, 9, 67, 1),
(494, 10, 67, 1),
(495, 11, 67, 1),
(496, 12, 67, 3),
(497, 13, 67, 1),
(498, 14, 67, 1),
(499, 6, 67, 1),
(500, 7, 67, 1),
(501, 8, 67, 1),
(502, 9, 67, 1),
(503, 10, 67, 1),
(504, 11, 67, 1),
(505, 12, 67, 3),
(506, 13, 67, 1),
(507, 14, 67, 1),
(508, 6, 67, 1),
(509, 7, 67, 1),
(510, 8, 67, 1),
(511, 9, 67, 1),
(512, 10, 67, 1),
(513, 11, 67, 1),
(514, 12, 67, 3),
(515, 13, 67, 1),
(516, 14, 67, 1),
(517, 6, 123, 1),
(518, 7, 123, 1),
(519, 8, 123, 1),
(520, 9, 123, 1),
(521, 10, 123, 1),
(522, 11, 123, 1),
(523, 12, 123, 1),
(524, 13, 123, 1),
(525, 14, 123, 1),
(526, 6, 124, 1),
(527, 7, 124, 1),
(528, 8, 124, 1),
(529, 9, 124, 2),
(530, 10, 124, 2),
(531, 11, 124, 2),
(532, 12, 124, 2),
(533, 13, 124, 1),
(534, 14, 124, 2),
(535, 6, 124, 1),
(536, 7, 124, 1),
(537, 8, 124, 1),
(538, 9, 124, 2),
(539, 10, 124, 2),
(540, 11, 124, 2),
(541, 12, 124, 2),
(542, 13, 124, 1),
(543, 14, 124, 2),
(544, 6, 124, 1),
(545, 7, 124, 1),
(546, 8, 124, 1),
(547, 9, 124, 2),
(548, 10, 124, 2),
(549, 11, 124, 2),
(550, 12, 124, 2),
(551, 13, 124, 1),
(552, 14, 124, 2),
(553, 6, 124, 1),
(554, 7, 124, 1),
(555, 8, 124, 1),
(556, 9, 124, 2),
(557, 10, 124, 2),
(558, 11, 124, 2),
(559, 12, 124, 2),
(560, 13, 124, 1),
(561, 14, 124, 2),
(562, 15, 67, 1),
(563, 16, 67, 1),
(564, 17, 67, 1),
(565, 18, 67, 1),
(566, 19, 67, 1),
(567, 20, 67, 1),
(568, 21, 67, 1),
(569, 22, 67, 1),
(570, 23, 67, 1),
(571, 6, 67, 1),
(572, 7, 67, 1),
(573, 8, 67, 1),
(574, 9, 67, 1),
(575, 10, 67, 1),
(576, 11, 67, 1),
(577, 12, 67, 1),
(578, 13, 67, 1),
(579, 14, 67, 1),
(580, 6, 130, 1),
(581, 7, 130, 1),
(582, 8, 130, 1),
(583, 9, 130, 1),
(584, 10, 130, 1),
(585, 11, 130, 1),
(586, 12, 130, 1),
(587, 13, 130, 1),
(588, 14, 130, 1),
(589, 6, 131, 1),
(590, 7, 131, 1),
(591, 8, 131, 1),
(592, 9, 131, 1),
(593, 10, 131, 1),
(594, 11, 131, 1),
(595, 12, 131, 1),
(596, 13, 131, 1),
(597, 14, 131, 1),
(598, 6, 131, 1),
(599, 7, 131, 1),
(600, 8, 131, 1),
(601, 9, 131, 1),
(602, 10, 131, 1),
(603, 11, 131, 2),
(604, 12, 131, 1),
(605, 13, 131, 1),
(606, 14, 131, 2),
(607, 6, 67, 2),
(608, 7, 67, 2),
(609, 8, 67, 1),
(610, 9, 67, 2),
(611, 10, 67, 2),
(612, 11, 67, 2),
(613, 12, 67, 1),
(614, 13, 67, 1),
(615, 14, 67, 2),
(616, 6, 67, 1),
(617, 7, 67, 1),
(618, 8, 67, 1),
(619, 9, 67, 1),
(620, 10, 67, 1),
(621, 11, 67, 1),
(622, 12, 67, 1),
(623, 13, 67, 1),
(624, 14, 67, 1),
(625, 6, 135, 1),
(626, 7, 135, 1),
(627, 8, 135, 1),
(628, 9, 135, 1),
(629, 10, 135, 1),
(630, 11, 135, 1),
(631, 12, 135, 1),
(632, 13, 135, 1),
(633, 14, 135, 1),
(634, 6, 135, 1),
(635, 7, 135, 1),
(636, 8, 135, 2),
(637, 9, 135, 1),
(638, 10, 135, 1),
(639, 11, 135, 1),
(640, 12, 135, 2),
(641, 13, 135, 1),
(642, 14, 135, 2),
(643, 6, 123, 1),
(644, 7, 123, 1),
(645, 8, 123, 3),
(646, 9, 123, 2),
(647, 10, 123, 1),
(648, 11, 123, 1),
(649, 12, 123, 1),
(650, 13, 123, 2),
(651, 14, 123, 2),
(652, 6, 67, 2),
(653, 7, 67, 2),
(654, 8, 67, 2),
(655, 9, 67, 1),
(656, 10, 67, 2),
(657, 11, 67, 2),
(658, 12, 67, 1),
(659, 13, 67, 2),
(660, 14, 67, 2),
(661, 6, 67, 1),
(662, 7, 67, 1),
(663, 8, 67, 1),
(664, 9, 67, 1),
(665, 10, 67, 2),
(666, 11, 67, 2),
(667, 12, 67, 2),
(668, 13, 67, 1),
(669, 14, 67, 2),
(670, 50, 67, 2),
(671, 51, 67, 1),
(672, 6, 67, 2),
(673, 7, 67, 2),
(674, 8, 67, 1),
(675, 9, 67, 1),
(676, 10, 67, 1),
(677, 11, 67, 1),
(678, 12, 67, 1),
(679, 13, 67, 1),
(680, 14, 67, 1),
(681, 6, 67, 2),
(682, 7, 67, 1),
(683, 8, 67, 1),
(684, 9, 67, 1),
(685, 10, 67, 2),
(686, 11, 67, 1),
(687, 12, 67, 1),
(688, 13, 67, 1),
(689, 14, 67, 1),
(690, 6, 67, 2),
(691, 7, 67, 1),
(692, 8, 67, 1),
(693, 9, 67, 1),
(694, 10, 67, 2),
(695, 11, 67, 1),
(696, 12, 67, 1),
(697, 13, 67, 1),
(698, 14, 67, 1),
(699, 6, 67, 1),
(700, 7, 67, 1),
(701, 8, 67, 1),
(702, 9, 67, 2),
(703, 10, 67, 2),
(704, 11, 67, 2),
(705, 12, 67, 1),
(706, 13, 67, 2),
(707, 14, 67, 1);

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
-- Table structure for table `tlb_applicant`
--

CREATE TABLE `tlb_applicant` (
  `applicant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grade_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlb_applicant`
--

INSERT INTO `tlb_applicant` (`applicant_id`, `user_id`, `grade_file`) VALUES
(67, 24, NULL),
(68, 24, NULL),
(69, 24, NULL),
(70, 24, NULL),
(71, 24, NULL),
(72, 24, NULL),
(73, 24, NULL),
(74, 24, NULL),
(75, 24, NULL),
(76, 24, NULL),
(77, 24, NULL),
(78, 24, NULL),
(79, 24, NULL),
(80, 24, NULL),
(81, 24, NULL),
(82, 24, NULL),
(83, 24, NULL),
(84, 24, NULL),
(85, 24, NULL),
(86, 24, NULL),
(87, 24, NULL),
(88, 24, NULL),
(89, 24, NULL),
(90, 24, NULL),
(91, 24, NULL),
(92, 24, NULL),
(93, 24, NULL),
(94, 24, NULL),
(95, 24, NULL),
(96, 24, NULL),
(97, 24, NULL),
(98, 24, NULL),
(99, 24, NULL),
(100, 24, NULL),
(101, 24, NULL),
(102, 24, NULL),
(103, 24, NULL),
(104, 24, NULL),
(105, 24, NULL),
(106, 24, NULL),
(107, 24, NULL),
(108, 24, NULL),
(109, 24, NULL),
(110, 24, NULL),
(111, 24, NULL),
(112, 24, NULL),
(113, 24, NULL),
(114, 24, NULL),
(115, 24, NULL),
(116, 24, NULL),
(117, 24, NULL),
(118, 24, NULL),
(119, 24, NULL),
(120, 24, NULL),
(121, 24, NULL),
(122, 24, NULL),
(123, 15, NULL),
(124, 23, NULL),
(125, 23, NULL),
(126, 23, NULL),
(127, 23, NULL),
(128, 24, NULL),
(129, 24, NULL),
(130, 36, NULL),
(131, 37, NULL),
(132, 37, NULL),
(133, 24, NULL),
(134, 24, NULL),
(135, 38, NULL),
(136, 38, NULL),
(137, 15, NULL),
(138, 24, NULL),
(139, 24, NULL),
(140, 24, NULL),
(141, 24, NULL),
(142, 24, NULL),
(143, 24, NULL),
(144, 24, NULL);

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
(16, 'ejaypogi@wmsu.edu.ph', 'password', 'Ejay', 'Pogi', 'student'),
(17, 'gadmarbelamide@wmsu.edu.ph', 'password', 'Gadmar', 'Belamide', 'admin'),
(18, 'ejmagcanta@gmail.com', 'password', 'Ejay', 'Magcanta', 'student'),
(23, 'joshuayasil@wmsu.edu.ph', 'password', 'Josh', 'Yasil', 'student'),
(24, 'daphnagata@wmsu.edu.ph', 'password', 'Daph', 'Nagata', 'student'),
(25, 'denisegerzon@wmsu.edu.ph', 'password', 'Denise', 'Gerzon', 'student'),
(26, 'markvlad@wmsu.edu.ph', 'password', 'Mark', 'Vladimir', 'student'),
(36, 'abdulasishamja@wmsu.edu.ph', 'password', 'Abdul-asis', 'Hamja', 'student'),
(37, 'jaydeeballaho@wmsu.edu.ph', 'password', 'Mr. Jaydee', 'C. Ballaho', 'student'),
(38, 'markvladimir@wmsu.edu.ph', 'password', 'Mark', 'Vladimir', 'student');

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
  MODIFY `grades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=708;

--
-- AUTO_INCREMENT for table `tlb_applicant`
--
ALTER TABLE `tlb_applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
