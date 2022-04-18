-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 07:38 AM
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
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `sno` int(100) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `assessment_marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`sno`, `registration_no`, `subject_name`, `assessment_marks`) VALUES
(148, '9800950201', 'Programming with R and Python', 11),
(149, '9800950202', 'Programming with R and Python', 15),
(150, '9800950201', 'Compiler Construction', 11),
(151, '9800950202', 'Compiler Construction', 15),
(152, '9800950201', 'Mobile Application Development', 11),
(153, '9800950202', 'Mobile Application Development', 15),
(154, '9800950201', 'Computer Graphics', 11),
(155, '9800950202', 'Computer Graphics', 15),
(156, '9800950203', 'Programming with R and Python', 14),
(157, '9800950204', 'Programming with R and Python', 8),
(158, '9800950205', 'Programming with R and Python', 4),
(159, '9800950206', 'Programming with R and Python', 4),
(160, '9800950207', 'Programming with R and Python', 7),
(161, '9800950208', 'Programming with R and Python', 5),
(162, '9800950209', 'Programming with R and Python', 4),
(163, '9800950210', 'Programming with R and Python', 4),
(164, '9800950211', 'Programming with R and Python', 7),
(165, '9800950212', 'Programming with R and Python', 6),
(166, '9800950213', 'Programming with R and Python', 6),
(167, '9800950214', 'Programming with R and Python', 0),
(168, '9800950215', 'Programming with R and Python', 0),
(169, '9800950216', 'Programming with R and Python', 0),
(170, '9800950217', 'Programming with R and Python', 0),
(171, '9800950218', 'Programming with R and Python', 0),
(172, '9800950219', 'Programming with R and Python', 0),
(173, '9800950220', 'Programming with R and Python', 0),
(174, '9800950221', 'Programming with R and Python', 0),
(175, '9800950203', 'Compiler Construction', 14),
(176, '9800950204', 'Compiler Construction', 8),
(177, '9800950205', 'Compiler Construction', 4),
(178, '9800950206', 'Compiler Construction', 4),
(179, '9800950207', 'Compiler Construction', 7),
(180, '9800950208', 'Compiler Construction', 5),
(181, '9800950209', 'Compiler Construction', 4),
(182, '9800950210', 'Compiler Construction', 4),
(183, '9800950211', 'Compiler Construction', 7),
(184, '9800950212', 'Compiler Construction', 6),
(185, '9800950213', 'Compiler Construction', 6),
(186, '9800950214', 'Compiler Construction', 0),
(187, '9800950215', 'Compiler Construction', 0),
(188, '9800950216', 'Compiler Construction', 0),
(189, '9800950217', 'Compiler Construction', 0),
(190, '9800950218', 'Compiler Construction', 0),
(191, '9800950219', 'Compiler Construction', 0),
(192, '9800950220', 'Compiler Construction', 0),
(193, '9800950221', 'Compiler Construction', 0),
(194, '9800950203', 'Mobile Application Development', 14),
(195, '9800950204', 'Mobile Application Development', 8),
(196, '9800950205', 'Mobile Application Development', 4),
(197, '9800950206', 'Mobile Application Development', 4),
(198, '9800950207', 'Mobile Application Development', 7),
(199, '9800950208', 'Mobile Application Development', 5),
(200, '9800950209', 'Mobile Application Development', 4),
(201, '9800950210', 'Mobile Application Development', 4),
(202, '9800950211', 'Mobile Application Development', 7),
(203, '9800950212', 'Mobile Application Development', 6),
(204, '9800950213', 'Mobile Application Development', 6),
(205, '9800950214', 'Mobile Application Development', 0),
(206, '9800950215', 'Mobile Application Development', 0),
(207, '9800950216', 'Mobile Application Development', 0),
(208, '9800950217', 'Mobile Application Development', 0),
(209, '9800950218', 'Mobile Application Development', 0),
(210, '9800950219', 'Mobile Application Development', 0),
(211, '9800950220', 'Mobile Application Development', 0),
(212, '9800950221', 'Mobile Application Development', 0),
(213, '9800950203', 'Computer Graphics', 14),
(214, '9800950204', 'Computer Graphics', 8),
(215, '9800950205', 'Computer Graphics', 4),
(216, '9800950206', 'Computer Graphics', 4),
(217, '9800950207', 'Computer Graphics', 7),
(218, '9800950208', 'Computer Graphics', 5),
(219, '9800950209', 'Computer Graphics', 4),
(220, '9800950210', 'Computer Graphics', 4),
(221, '9800950211', 'Computer Graphics', 7),
(222, '9800950212', 'Computer Graphics', 6),
(223, '9800950213', 'Computer Graphics', 6),
(224, '9800950214', 'Computer Graphics', 0),
(225, '9800950215', 'Computer Graphics', 0),
(226, '9800950216', 'Computer Graphics', 0),
(227, '9800950217', 'Computer Graphics', 0),
(228, '9800950218', 'Computer Graphics', 0),
(229, '9800950219', 'Computer Graphics', 0),
(230, '9800950220', 'Computer Graphics', 0),
(231, '9800950221', 'Computer Graphics', 0),
(238, '99542301', 'Operating System', 17),
(239, '99542302', 'Operating System', 10),
(240, '99542303', 'Operating System', 14),
(241, '99542304', 'Operating System', 6),
(242, '99542305', 'Operating System', 7),
(243, '99542301', 'Dot Net using C#', 17),
(244, '99542302', 'Dot Net using C#', 10),
(245, '99542303', 'Dot Net using C#', 14),
(246, '99542304', 'Dot Net using C#', 6),
(247, '99542305', 'Dot Net using C#', 7),
(248, '99542301', 'Artificial Intelligence (AI)', 15),
(249, '99542302', 'Artificial Intelligence (AI)', 6),
(250, '99542303', 'Artificial Intelligence (AI)', 10),
(251, '99542304', 'Artificial Intelligence (AI)', 6),
(252, '99542305', 'Artificial Intelligence (AI)', 7),
(253, '99542306', 'Operating System', 16),
(254, '99542307', 'Operating System', 11),
(255, '99542308', 'Operating System', 10),
(256, '99542309', 'Operating System', 9),
(257, '99542310', 'Operating System', 2),
(258, '99542306', 'Dot Net using C#', 16),
(259, '99542307', 'Dot Net using C#', 11),
(260, '99542308', 'Dot Net using C#', 10),
(261, '99542309', 'Dot Net using C#', 9),
(262, '99542310', 'Dot Net using C#', 2),
(263, '99542306', 'Artificial Intelligence (AI)', 11),
(264, '99542307', 'Artificial Intelligence (AI)', 6),
(265, '99542308', 'Artificial Intelligence (AI)', 10),
(266, '99542309', 'Artificial Intelligence (AI)', 9),
(267, '99542310', 'Artificial Intelligence (AI)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `sno` int(11) NOT NULL,
  `registration_no` varchar(100) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `assignment_1` int(11) NOT NULL,
  `assignment_2` int(11) NOT NULL,
  `assignment_marks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`sno`, `registration_no`, `subject_name`, `assignment_1`, `assignment_2`, `assignment_marks`) VALUES
(217, '9800950201', 'Programming with R and Python', 1, 5, 3),
(218, '9800950202', 'Programming with R and Python', 5, 5, 5),
(219, '9800950201', 'Compiler Construction', 0, 0, 0),
(220, '9800950202', 'Compiler Construction', 0, 0, 0),
(221, '9800950201', 'Mobile Application Development', 0, 0, 0),
(222, '9800950202', 'Mobile Application Development', 0, 0, 0),
(223, '9800950201', 'Computer Graphics', 0, 0, 0),
(224, '9800950202', 'Computer Graphics', 0, 0, 0),
(225, '9800950203', 'Programming with R and Python', 2, 3, 3),
(226, '9800950204', 'Programming with R and Python', 3, 4, 4),
(227, '9800950205', 'Programming with R and Python', 0, 5, 3),
(228, '9800950206', 'Programming with R and Python', 5, 0, 3),
(229, '9800950207', 'Programming with R and Python', 5, 1, 3),
(230, '9800950208', 'Programming with R and Python', 3, 5, 4),
(231, '9800950209', 'Programming with R and Python', 3, 0, 2),
(232, '9800950210', 'Programming with R and Python', 1, 0, 1),
(233, '9800950211', 'Programming with R and Python', 4, 0, 2),
(234, '9800950212', 'Programming with R and Python', 4, 0, 2),
(235, '9800950213', 'Programming with R and Python', 3, 2, 3),
(236, '9800950214', 'Programming with R and Python', 3, 4, 4),
(237, '9800950215', 'Programming with R and Python', 5, 0, 3),
(238, '9800950216', 'Programming with R and Python', 5, 0, 3),
(239, '9800950217', 'Programming with R and Python', 0, 0, 0),
(240, '9800950218', 'Programming with R and Python', 5, 0, 3),
(241, '9800950219', 'Programming with R and Python', 5, 1, 3),
(242, '9800950220', 'Programming with R and Python', 5, 3, 4),
(243, '9800950221', 'Programming with R and Python', 0, 5, 3),
(244, '9800950203', 'Compiler Construction', 0, 0, 0),
(245, '9800950204', 'Compiler Construction', 0, 0, 0),
(246, '9800950205', 'Compiler Construction', 0, 0, 0),
(247, '9800950206', 'Compiler Construction', 0, 0, 0),
(248, '9800950207', 'Compiler Construction', 0, 0, 0),
(249, '9800950208', 'Compiler Construction', 0, 0, 0),
(250, '9800950209', 'Compiler Construction', 0, 0, 0),
(251, '9800950210', 'Compiler Construction', 0, 0, 0),
(252, '9800950211', 'Compiler Construction', 0, 0, 0),
(253, '9800950212', 'Compiler Construction', 0, 0, 0),
(254, '9800950213', 'Compiler Construction', 0, 0, 0),
(255, '9800950214', 'Compiler Construction', 0, 0, 0),
(256, '9800950215', 'Compiler Construction', 0, 0, 0),
(257, '9800950216', 'Compiler Construction', 0, 0, 0),
(258, '9800950217', 'Compiler Construction', 0, 0, 0),
(259, '9800950218', 'Compiler Construction', 0, 0, 0),
(260, '9800950219', 'Compiler Construction', 0, 0, 0),
(261, '9800950220', 'Compiler Construction', 0, 0, 0),
(262, '9800950221', 'Compiler Construction', 0, 0, 0),
(263, '9800950203', 'Mobile Application Development', 0, 0, 0),
(264, '9800950204', 'Mobile Application Development', 0, 0, 0),
(265, '9800950205', 'Mobile Application Development', 0, 0, 0),
(266, '9800950206', 'Mobile Application Development', 0, 0, 0),
(267, '9800950207', 'Mobile Application Development', 0, 0, 0),
(268, '9800950208', 'Mobile Application Development', 0, 0, 0),
(269, '9800950209', 'Mobile Application Development', 0, 0, 0),
(270, '9800950210', 'Mobile Application Development', 0, 0, 0),
(271, '9800950211', 'Mobile Application Development', 0, 0, 0),
(272, '9800950212', 'Mobile Application Development', 0, 0, 0),
(273, '9800950213', 'Mobile Application Development', 0, 0, 0),
(274, '9800950214', 'Mobile Application Development', 0, 0, 0),
(275, '9800950215', 'Mobile Application Development', 0, 0, 0),
(276, '9800950216', 'Mobile Application Development', 0, 0, 0),
(277, '9800950217', 'Mobile Application Development', 0, 0, 0),
(278, '9800950218', 'Mobile Application Development', 0, 0, 0),
(279, '9800950219', 'Mobile Application Development', 0, 0, 0),
(280, '9800950220', 'Mobile Application Development', 0, 0, 0),
(281, '9800950221', 'Mobile Application Development', 0, 0, 0),
(282, '9800950203', 'Computer Graphics', 0, 0, 0),
(283, '9800950204', 'Computer Graphics', 0, 0, 0),
(284, '9800950205', 'Computer Graphics', 0, 0, 0),
(285, '9800950206', 'Computer Graphics', 0, 0, 0),
(286, '9800950207', 'Computer Graphics', 0, 0, 0),
(287, '9800950208', 'Computer Graphics', 0, 0, 0),
(288, '9800950209', 'Computer Graphics', 0, 0, 0),
(289, '9800950210', 'Computer Graphics', 0, 0, 0),
(290, '9800950211', 'Computer Graphics', 0, 0, 0),
(291, '9800950212', 'Computer Graphics', 0, 0, 0),
(292, '9800950213', 'Computer Graphics', 0, 0, 0),
(293, '9800950214', 'Computer Graphics', 0, 0, 0),
(294, '9800950215', 'Computer Graphics', 0, 0, 0),
(295, '9800950216', 'Computer Graphics', 0, 0, 0),
(296, '9800950217', 'Computer Graphics', 0, 0, 0),
(297, '9800950218', 'Computer Graphics', 0, 0, 0),
(298, '9800950219', 'Computer Graphics', 0, 0, 0),
(299, '9800950220', 'Computer Graphics', 0, 0, 0),
(300, '9800950221', 'Computer Graphics', 0, 0, 0),
(302, '99542301', 'Operating System', 0, 0, 0),
(303, '99542302', 'Operating System', 0, 0, 0),
(304, '99542303', 'Operating System', 0, 0, 0),
(305, '99542304', 'Operating System', 0, 0, 0),
(306, '99542305', 'Operating System', 0, 0, 0),
(307, '99542301', 'Dot Net using C#', 0, 0, 0),
(308, '99542302', 'Dot Net using C#', 0, 0, 0),
(309, '99542303', 'Dot Net using C#', 0, 0, 0),
(310, '99542304', 'Dot Net using C#', 0, 0, 0),
(311, '99542305', 'Dot Net using C#', 0, 0, 0),
(312, '99542301', 'Artificial Intelligence (AI)', 5, 5, 0),
(313, '99542302', 'Artificial Intelligence (AI)', 3, 5, 0),
(314, '99542303', 'Artificial Intelligence (AI)', 3, 4, 0),
(315, '99542304', 'Artificial Intelligence (AI)', 0, 0, 0),
(316, '99542305', 'Artificial Intelligence (AI)', 0, 0, 0),
(317, '99542306', 'Operating System', 0, 0, 0),
(318, '99542307', 'Operating System', 0, 0, 0),
(319, '99542308', 'Operating System', 0, 0, 0),
(320, '99542309', 'Operating System', 0, 0, 0),
(321, '99542310', 'Operating System', 0, 0, 0),
(322, '99542306', 'Dot Net using C#', 0, 0, 0),
(323, '99542307', 'Dot Net using C#', 0, 0, 0),
(324, '99542308', 'Dot Net using C#', 0, 0, 0),
(325, '99542309', 'Dot Net using C#', 0, 0, 0),
(326, '99542310', 'Dot Net using C#', 0, 0, 0),
(327, '99542306', 'Artificial Intelligence (AI)', 5, 5, 0),
(328, '99542307', 'Artificial Intelligence (AI)', 4, 5, 0),
(329, '99542308', 'Artificial Intelligence (AI)', 0, 0, 0),
(330, '99542309', 'Artificial Intelligence (AI)', 0, 0, 0),
(331, '99542310', 'Artificial Intelligence (AI)', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `sno` int(122) NOT NULL,
  `registration_no` varchar(100) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `max_attendence` int(11) NOT NULL,
  `obtained_attendence` int(11) NOT NULL,
  `attendence_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sno`, `registration_no`, `subject_name`, `max_attendence`, `obtained_attendence`, `attendence_marks`) VALUES
(167, '9800950201', 'Programming with R and Python', 99, 70, 3),
(168, '9800950202', 'Programming with R and Python', 99, 73, 3),
(169, '9800950201', 'Compiler Construction', 0, 0, 0),
(170, '9800950202', 'Compiler Construction', 0, 0, 0),
(171, '9800950201', 'Mobile Application Development', 0, 0, 0),
(172, '9800950202', 'Mobile Application Development', 0, 0, 0),
(173, '9800950201', 'Computer Graphics', 0, 0, 0),
(174, '9800950202', 'Computer Graphics', 0, 0, 0),
(175, '9800950203', 'Programming with R and Python', 99, 81, 5),
(176, '9800950204', 'Programming with R and Python', 99, 60, 1),
(177, '9800950205', 'Programming with R and Python', 99, 80, 5),
(178, '9800950206', 'Programming with R and Python', 99, 0, 0),
(179, '9800950207', 'Programming with R and Python', 99, 74, 3),
(180, '9800950208', 'Programming with R and Python', 99, 75, 4),
(181, '9800950209', 'Programming with R and Python', 99, 67, 2),
(182, '9800950210', 'Programming with R and Python', 99, 73, 3),
(183, '9800950211', 'Programming with R and Python', 99, 74, 3),
(184, '9800950212', 'Programming with R and Python', 99, 71, 3),
(185, '9800950213', 'Programming with R and Python', 99, 79, 4),
(186, '9800950214', 'Programming with R and Python', 99, 76, 4),
(187, '9800950215', 'Programming with R and Python', 99, 21, 0),
(188, '9800950216', 'Programming with R and Python', 99, 90, 7),
(189, '9800950217', 'Programming with R and Python', 99, 97, 8),
(190, '9800950218', 'Programming with R and Python', 99, 88, 6),
(191, '9800950219', 'Programming with R and Python', 99, 87, 6),
(192, '9800950220', 'Programming with R and Python', 99, 67, 2),
(193, '9800950221', 'Programming with R and Python', 99, 76, 4),
(194, '9800950203', 'Compiler Construction', 0, 0, 0),
(195, '9800950204', 'Compiler Construction', 0, 0, 0),
(196, '9800950205', 'Compiler Construction', 0, 0, 0),
(197, '9800950206', 'Compiler Construction', 0, 0, 0),
(198, '9800950207', 'Compiler Construction', 0, 0, 0),
(199, '9800950208', 'Compiler Construction', 0, 0, 0),
(200, '9800950209', 'Compiler Construction', 0, 0, 0),
(201, '9800950210', 'Compiler Construction', 0, 0, 0),
(202, '9800950211', 'Compiler Construction', 0, 0, 0),
(203, '9800950212', 'Compiler Construction', 0, 0, 0),
(204, '9800950213', 'Compiler Construction', 0, 0, 0),
(205, '9800950214', 'Compiler Construction', 0, 0, 0),
(206, '9800950215', 'Compiler Construction', 0, 0, 0),
(207, '9800950216', 'Compiler Construction', 0, 0, 0),
(208, '9800950217', 'Compiler Construction', 0, 0, 0),
(209, '9800950218', 'Compiler Construction', 0, 0, 0),
(210, '9800950219', 'Compiler Construction', 0, 0, 0),
(211, '9800950220', 'Compiler Construction', 0, 0, 0),
(212, '9800950221', 'Compiler Construction', 0, 0, 0),
(213, '9800950203', 'Mobile Application Development', 0, 0, 0),
(214, '9800950204', 'Mobile Application Development', 0, 0, 0),
(215, '9800950205', 'Mobile Application Development', 0, 0, 0),
(216, '9800950206', 'Mobile Application Development', 0, 0, 0),
(217, '9800950207', 'Mobile Application Development', 0, 0, 0),
(218, '9800950208', 'Mobile Application Development', 0, 0, 0),
(219, '9800950209', 'Mobile Application Development', 0, 0, 0),
(220, '9800950210', 'Mobile Application Development', 0, 0, 0),
(221, '9800950211', 'Mobile Application Development', 0, 0, 0),
(222, '9800950212', 'Mobile Application Development', 0, 0, 0),
(223, '9800950213', 'Mobile Application Development', 0, 0, 0),
(224, '9800950214', 'Mobile Application Development', 0, 0, 0),
(225, '9800950215', 'Mobile Application Development', 0, 0, 0),
(226, '9800950216', 'Mobile Application Development', 0, 0, 0),
(227, '9800950217', 'Mobile Application Development', 0, 0, 0),
(228, '9800950218', 'Mobile Application Development', 0, 0, 0),
(229, '9800950219', 'Mobile Application Development', 0, 0, 0),
(230, '9800950220', 'Mobile Application Development', 0, 0, 0),
(231, '9800950221', 'Mobile Application Development', 0, 0, 0),
(232, '9800950203', 'Computer Graphics', 0, 0, 0),
(233, '9800950204', 'Computer Graphics', 0, 0, 0),
(234, '9800950205', 'Computer Graphics', 0, 0, 0),
(235, '9800950206', 'Computer Graphics', 0, 0, 0),
(236, '9800950207', 'Computer Graphics', 0, 0, 0),
(237, '9800950208', 'Computer Graphics', 0, 0, 0),
(238, '9800950209', 'Computer Graphics', 0, 0, 0),
(239, '9800950210', 'Computer Graphics', 0, 0, 0),
(240, '9800950211', 'Computer Graphics', 0, 0, 0),
(241, '9800950212', 'Computer Graphics', 0, 0, 0),
(242, '9800950213', 'Computer Graphics', 0, 0, 0),
(243, '9800950214', 'Computer Graphics', 0, 0, 0),
(244, '9800950215', 'Computer Graphics', 0, 0, 0),
(245, '9800950216', 'Computer Graphics', 0, 0, 0),
(246, '9800950217', 'Computer Graphics', 0, 0, 0),
(247, '9800950218', 'Computer Graphics', 0, 0, 0),
(248, '9800950219', 'Computer Graphics', 0, 0, 0),
(249, '9800950220', 'Computer Graphics', 0, 0, 0),
(250, '9800950221', 'Computer Graphics', 0, 0, 0),
(257, '99542301', 'Operating System', 0, 0, 0),
(258, '99542302', 'Operating System', 0, 0, 0),
(259, '99542303', 'Operating System', 0, 0, 0),
(260, '99542304', 'Operating System', 0, 0, 0),
(261, '99542305', 'Operating System', 0, 0, 0),
(262, '99542301', 'Dot Net using C#', 0, 0, 0),
(263, '99542302', 'Dot Net using C#', 0, 0, 0),
(264, '99542303', 'Dot Net using C#', 0, 0, 0),
(265, '99542304', 'Dot Net using C#', 0, 0, 0),
(266, '99542305', 'Dot Net using C#', 0, 0, 0),
(267, '99542301', 'Artificial Intelligence (AI)', 80, 77, 8),
(268, '99542302', 'Artificial Intelligence (AI)', 80, 60, 3),
(269, '99542303', 'Artificial Intelligence (AI)', 80, 65, 5),
(270, '99542304', 'Artificial Intelligence (AI)', 80, 60, 3),
(271, '99542305', 'Artificial Intelligence (AI)', 80, 71, 6),
(272, '99542306', 'Operating System', 0, 0, 0),
(273, '99542307', 'Operating System', 0, 0, 0),
(274, '99542308', 'Operating System', 0, 0, 0),
(275, '99542309', 'Operating System', 0, 0, 0),
(276, '99542310', 'Operating System', 0, 0, 0),
(277, '99542306', 'Dot Net using C#', 0, 0, 0),
(278, '99542307', 'Dot Net using C#', 0, 0, 0),
(279, '99542308', 'Dot Net using C#', 0, 0, 0),
(280, '99542309', 'Dot Net using C#', 0, 0, 0),
(281, '99542310', 'Dot Net using C#', 0, 0, 0),
(282, '99542306', 'Artificial Intelligence (AI)', 80, 62, 4),
(283, '99542307', 'Artificial Intelligence (AI)', 80, 66, 5),
(284, '99542308', 'Artificial Intelligence (AI)', 80, 74, 7),
(285, '99542309', 'Artificial Intelligence (AI)', 80, 69, 6),
(286, '99542310', 'Artificial Intelligence (AI)', 80, 52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `sno` int(20) NOT NULL,
  `class_id` int(50) NOT NULL,
  `class` varchar(33) NOT NULL,
  `subject_name` varchar(33) NOT NULL,
  `course_name` varchar(33) NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`sno`, `class_id`, `class`, `subject_name`, `course_name`, `duration`) VALUES
(20, 5, '5th Sem', 'Programming with R and Python', 'MCA', '2020-2022'),
(21, 5, '5th Sem', 'Compiler Construction', 'MCA', '2020-2022'),
(22, 5, '5th Sem', 'Mobile Application Development', 'MCA', '2020-2022'),
(23, 5, '5th Sem', 'Computer Graphics', 'MCA', '2020-2022'),
(24, 3, '3rd Sem', 'Dot Net using C#', 'MCA', '2020-2022'),
(25, 3, '3rd Sem', 'Operating System', 'MCA', '2020-2022'),
(26, 3, '3rd Sem', 'Artificial Intelligence (AI)', 'MCA', '2020-2022'),
(27, 1, '1st Sem', 'Yoga in our life', 'Yoga life', '2021-2023');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sno` int(11) NOT NULL,
  `deptt_name` varchar(44) NOT NULL,
  `course_name` varchar(44) NOT NULL,
  `course_code` varchar(44) NOT NULL,
  `duration` varchar(44) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sno`, `deptt_name`, `course_name`, `course_code`, `duration`, `level`) VALUES
(11, 'Department of English', 'MA English', 'En-45', '2020-2022', 2),
(12, 'Department of Computer Science', 'MCA', 'MCA_22', '2020-2022', 2),
(2, 'Department of Computer Science', 'PGDCA', 'PG_01', '2020-2022', 2),
(10, 'Department of psychology', 'Psychology and life', 'psy_3', '2020-2022', 2),
(13, 'Department of Yoga', 'Yoga life', 'yg_123883', '2021-2023', 2),
(14, 'Department of Yoga', 'yoga life2', 'yg_123884', '2021-2023', 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `sno` int(11) NOT NULL,
  `deptt_name` varchar(77) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`sno`, `deptt_name`, `start_date`) VALUES
(1, 'Department of Computer Science', '2022-01-04 22:12:45'),
(3, 'Department of psy', '2022-01-04 22:12:45'),
(4, 'Department of Yoga', '2022-01-04 22:12:45'),
(5, 'Department of English', '2022-01-04 22:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(44) NOT NULL,
  `phone` int(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `time`) VALUES
(4, 'Sahil', 'pillania', 's@superdupergmail.com', 990000000, 'This Software is super duper.', '2022-01-12 22:28:58'),
(5, 'super', 'duper', 'hit@gmail.com', 2147483647, 'Hello guys, Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed expedita ad officiis incidunt corrupti dolorum ea dolorem eligendi nemo commodi soluta illum, est consequatur eum voluptas, voluptatum, quos dolore quas veritatis. Possimus eveniet similique ratione corrupti molestias culpa architecto perspiciatis aperiam eligendi dicta dolor, iure excepturi expedita cum! Incidunt earum deserunt culpa veritatis nisi voluptatum quia minus dolorum qui necessitatibus. Quae asperiores numquam p', '2022-01-12 22:35:44'),
(7, '', '', '', 0, '', '2022-01-13 22:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessional_test`
--

CREATE TABLE `sessional_test` (
  `sno` int(11) NOT NULL,
  `registration_no` varchar(100) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `sessional_1` int(11) NOT NULL,
  `sessional_2` int(11) NOT NULL,
  `sessional_marks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessional_test`
--

INSERT INTO `sessional_test` (`sno`, `registration_no`, `subject_name`, `sessional_1`, `sessional_2`, `sessional_marks`) VALUES
(36, '9800950201', 'Programming with R and Python', 7, 0, 4),
(37, '9800950202', 'Programming with R and Python', 5, 7, 6),
(38, '9800950201', 'Compiler Construction', 0, 0, 0),
(39, '9800950202', 'Compiler Construction', 0, 0, 0),
(40, '9800950201', 'Mobile Application Development', 0, 0, 0),
(41, '9800950202', 'Mobile Application Development', 0, 0, 0),
(42, '9800950201', 'Computer Graphics', 0, 0, 0),
(43, '9800950202', 'Computer Graphics', 0, 0, 0),
(44, '9800950203', 'Programming with R and Python', 4, 7, 6),
(45, '9800950204', 'Programming with R and Python', 3, 3, 3),
(46, '9800950205', 'Programming with R and Python', 2, 5, 4),
(47, '9800950206', 'Programming with R and Python', 4, 3, 4),
(48, '9800950207', 'Programming with R and Python', 4, 4, 4),
(49, '9800950208', 'Programming with R and Python', 5, 5, 5),
(50, '9800950209', 'Programming with R and Python', 4, 3, 4),
(51, '9800950210', 'Programming with R and Python', 7, 1, 4),
(52, '9800950211', 'Programming with R and Python', 4, 4, 4),
(53, '9800950212', 'Programming with R and Python', 6, 6, 6),
(54, '9800950213', 'Programming with R and Python', 7, 5, 6),
(55, '9800950214', 'Programming with R and Python', 7, 0, 4),
(56, '9800950215', 'Programming with R and Python', 5, 2, 4),
(57, '9800950216', 'Programming with R and Python', 5, 3, 4),
(58, '9800950217', 'Programming with R and Python', 4, 2, 3),
(59, '9800950218', 'Programming with R and Python', 7, 5, 6),
(60, '9800950219', 'Programming with R and Python', 4, 7, 6),
(61, '9800950220', 'Programming with R and Python', 7, 4, 6),
(62, '9800950221', 'Programming with R and Python', 5, 4, 5),
(63, '9800950203', 'Compiler Construction', 0, 0, 0),
(64, '9800950204', 'Compiler Construction', 0, 0, 0),
(65, '9800950205', 'Compiler Construction', 0, 0, 0),
(66, '9800950206', 'Compiler Construction', 0, 0, 0),
(67, '9800950207', 'Compiler Construction', 0, 0, 0),
(68, '9800950208', 'Compiler Construction', 0, 0, 0),
(69, '9800950209', 'Compiler Construction', 0, 0, 0),
(70, '9800950210', 'Compiler Construction', 0, 0, 0),
(71, '9800950211', 'Compiler Construction', 0, 0, 0),
(72, '9800950212', 'Compiler Construction', 0, 0, 0),
(73, '9800950213', 'Compiler Construction', 0, 0, 0),
(74, '9800950214', 'Compiler Construction', 0, 0, 0),
(75, '9800950215', 'Compiler Construction', 0, 0, 0),
(76, '9800950216', 'Compiler Construction', 0, 0, 0),
(77, '9800950217', 'Compiler Construction', 0, 0, 0),
(78, '9800950218', 'Compiler Construction', 0, 0, 0),
(79, '9800950219', 'Compiler Construction', 0, 0, 0),
(80, '9800950220', 'Compiler Construction', 0, 0, 0),
(81, '9800950221', 'Compiler Construction', 0, 0, 0),
(82, '9800950203', 'Mobile Application Development', 0, 0, 0),
(83, '9800950204', 'Mobile Application Development', 0, 0, 0),
(84, '9800950205', 'Mobile Application Development', 0, 0, 0),
(85, '9800950206', 'Mobile Application Development', 0, 0, 0),
(86, '9800950207', 'Mobile Application Development', 0, 0, 0),
(87, '9800950208', 'Mobile Application Development', 0, 0, 0),
(88, '9800950209', 'Mobile Application Development', 0, 0, 0),
(89, '9800950210', 'Mobile Application Development', 0, 0, 0),
(90, '9800950211', 'Mobile Application Development', 0, 0, 0),
(91, '9800950212', 'Mobile Application Development', 0, 0, 0),
(92, '9800950213', 'Mobile Application Development', 0, 0, 0),
(93, '9800950214', 'Mobile Application Development', 0, 0, 0),
(94, '9800950215', 'Mobile Application Development', 0, 0, 0),
(95, '9800950216', 'Mobile Application Development', 0, 0, 0),
(96, '9800950217', 'Mobile Application Development', 0, 0, 0),
(97, '9800950218', 'Mobile Application Development', 0, 0, 0),
(98, '9800950219', 'Mobile Application Development', 0, 0, 0),
(99, '9800950220', 'Mobile Application Development', 0, 0, 0),
(100, '9800950221', 'Mobile Application Development', 0, 0, 0),
(101, '9800950203', 'Computer Graphics', 0, 0, 0),
(102, '9800950204', 'Computer Graphics', 0, 0, 0),
(103, '9800950205', 'Computer Graphics', 0, 0, 0),
(104, '9800950206', 'Computer Graphics', 0, 0, 0),
(105, '9800950207', 'Computer Graphics', 0, 0, 0),
(106, '9800950208', 'Computer Graphics', 0, 0, 0),
(107, '9800950209', 'Computer Graphics', 0, 0, 0),
(108, '9800950210', 'Computer Graphics', 0, 0, 0),
(109, '9800950211', 'Computer Graphics', 0, 0, 0),
(110, '9800950212', 'Computer Graphics', 0, 0, 0),
(111, '9800950213', 'Computer Graphics', 0, 0, 0),
(112, '9800950214', 'Computer Graphics', 0, 0, 0),
(113, '9800950215', 'Computer Graphics', 0, 0, 0),
(114, '9800950216', 'Computer Graphics', 0, 0, 0),
(115, '9800950217', 'Computer Graphics', 0, 0, 0),
(116, '9800950218', 'Computer Graphics', 0, 0, 0),
(117, '9800950219', 'Computer Graphics', 0, 0, 0),
(118, '9800950220', 'Computer Graphics', 0, 0, 0),
(119, '9800950221', 'Computer Graphics', 0, 0, 0),
(121, '99542301', 'Operating System', 0, 0, 0),
(122, '99542302', 'Operating System', 0, 0, 0),
(123, '99542303', 'Operating System', 0, 0, 0),
(124, '99542304', 'Operating System', 0, 0, 0),
(125, '99542305', 'Operating System', 0, 0, 0),
(126, '99542301', 'Dot Net using C#', 0, 0, 0),
(127, '99542302', 'Dot Net using C#', 0, 0, 0),
(128, '99542303', 'Dot Net using C#', 0, 0, 0),
(129, '99542304', 'Dot Net using C#', 0, 0, 0),
(130, '99542305', 'Dot Net using C#', 0, 0, 0),
(131, '99542301', 'Artificial Intelligence (AI)', 7, 7, 7),
(132, '99542302', 'Artificial Intelligence (AI)', 3, 1, 3),
(133, '99542303', 'Artificial Intelligence (AI)', 6, 4, 5),
(134, '99542304', 'Artificial Intelligence (AI)', 4, 2, 3),
(135, '99542305', 'Artificial Intelligence (AI)', 1, 0, 1),
(136, '99542306', 'Operating System', 0, 0, 0),
(137, '99542307', 'Operating System', 0, 0, 0),
(138, '99542308', 'Operating System', 0, 0, 0),
(139, '99542309', 'Operating System', 0, 0, 0),
(140, '99542310', 'Operating System', 0, 0, 0),
(141, '99542306', 'Dot Net using C#', 0, 0, 0),
(142, '99542307', 'Dot Net using C#', 0, 0, 0),
(143, '99542308', 'Dot Net using C#', 0, 0, 0),
(144, '99542309', 'Dot Net using C#', 0, 0, 0),
(145, '99542310', 'Dot Net using C#', 0, 0, 0),
(146, '99542306', 'Artificial Intelligence (AI)', 7, 7, 7),
(147, '99542307', 'Artificial Intelligence (AI)', 1, 1, 1),
(148, '99542308', 'Artificial Intelligence (AI)', 4, 1, 3),
(149, '99542309', 'Artificial Intelligence (AI)', 4, 2, 3),
(150, '99542310', 'Artificial Intelligence (AI)', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sno` int(11) NOT NULL,
  `registration_no` varchar(100) NOT NULL,
  `class_roll_no` int(100) NOT NULL,
  `university_roll_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Assessment_marks` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `deptt_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `registration_no`, `class_roll_no`, `university_roll_no`, `name`, `phone_no`, `email`, `Assessment_marks`, `class`, `course_name`, `duration`, `deptt_name`) VALUES
(44, '1001', 1001, 1001, 'one', '1111111111', 'one@gmail.com', 0, 1, 'MCAA', '2018-2020', 'Deptt of CSA'),
(46, '1002', 2, 2, 'two', '22222222', 'two@gmail.com', 1, 2, 'MCAA', '2018-20', 'deptt of CSA'),
(47, '1003', 3, 3, 'three', '33333333', 'three@gmail.com', 3, 3, 'MCAA', '2018-20', 'deptt of CSA'),
(48, '1004', 4, 4, 'four', '33333333', 'four@gmail.com', 4, 4, 'MCAA', '2018-20', 'deptt of CSA'),
(49, '1005', 5, 5, 'five', '5555555555', 'five@gmail.com', 5, 5, 'MCAA', '2018-20', 'deptt of CSA'),
(50, '1006', 6, 6, 'six', '6666666666', 'six@gmail.com', 6, 6, 'MCAA', '2018-20', 'deptt of CSA'),
(74, '9800950201', 203061, 9047120, 'RENU', '9876543210', 'renu@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(75, '9800950202', 203062, 9047110, 'SANDEEP', '9876543211', 'sandeep@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(76, '9800950203', 203064, 9047116, 'MADHUBALA', '9876543212', 'madhubala@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(77, '9800950204', 203065, 9047111, 'ANSHUL CHAHAL', '98765432123', 'anshul@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(78, '9800950205', 203066, 9047115, 'AJAY', '9876543214', 'ajay@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(79, '9800950206', 203068, 9047103, 'AYUSHI JAIN', '9876543215', 'ayushi@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(80, '9800950207', 203069, 9047101, 'PRADIP DHANDA', '9876543216', 'pradip@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(81, '9800950208', 203070, 9047112, 'REENA', '9876543217', 'reena@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(82, '9800950209', 203071, 9047109, 'NIDHI', '9876543218', 'nidhi@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(83, '9800950210', 203072, 9047119, 'KIRAN', '9876543219', 'kiran@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(84, '9800950211', 203073, 9047117, 'AKHIL', '9876543220', 'akhil@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(85, '9800950212', 203074, 9047113, 'BRIJESH', '9876543221', 'brijesh@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(86, '9800950213', 203075, 9047102, 'ASHISH', '9876543222', 'ashish@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(87, '9800950214', 203076, 9047105, 'JAIDEEP', '9876543223', 'jaideep@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(88, '9800950215', 203077, 9047104, 'DEVENDER', '9876543224', 'devender@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(89, '9800950216', 203079, 9047108, 'DIGVIJAY', '9876543225', 'digvijay@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(90, '9800950217', 203081, 9047106, 'KUSUM', '9876543226', 'kusum@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(91, '9800950218', 203082, 9047107, 'NIKITA', '9876543227', 'nikita@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(92, '9800950219', 203084, 9047114, 'SONIA', '9876543228', 'sonia@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(93, '9800950220', 203085, 9047118, 'MEENU', '9876543229', 'meenu@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(94, '9800950221', 203087, 9047121, 'ANNU', '9876543230', 'annu@gmail.com', 0, 5, 'MCA', '2020-2022', 'Department of Computer Science'),
(125, '99542301', 211701, 6633021, 'ANKUSH', '9865327456', 'ankush@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(126, '99542302', 211702, 6633022, 'RITESH', '6525145654', 'ritesh@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(127, '99542303', 211703, 6633023, 'MUKESH', '8956457845', 'mukesh@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(128, '99542304', 211704, 6633024, 'KARISHMA', '7845123654', 'karishma@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(129, '99542305', 211705, 6633025, 'ANJALI', '8574961245', 'anjali@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(130, '99542306', 211706, 6633026, 'RISHI', '9865324512', 'rishi@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(131, '99542307', 211707, 6633027, 'SAHIL', '8574961245', 'sahil@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(132, '99542308', 211708, 6633028, 'MUKESH', '7485961245', 'mukesh@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(133, '99542309', 211709, 6633029, 'AMIT', '8576945241', 'amit@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science'),
(134, '99542310', 211710, 6633030, 'AJAY', '9584756265', 'ajay@gmail.com', 0, 3, 'MCA', '2020-2022', 'Department of Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sno` int(11) NOT NULL,
  `subject_name` varchar(44) NOT NULL,
  `subject_code` varchar(44) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `course_code` varchar(44) NOT NULL,
  `class` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sno`, `subject_name`, `subject_code`, `course_name`, `course_code`, `class`) VALUES
(29, 'Programming with R and Python', 'MCA-17-51', 'MCA', 'MCA_22', '5'),
(31, 'Compiler Construction', 'MCA-17-52', 'MCA', 'MCA_22', '5'),
(33, 'Mobile Application Development', 'MCA-17-53', 'MCA', 'MCA_22', '5'),
(35, 'Computer Graphics', 'MCA-17-54', 'MCA', 'MCA_22', '5'),
(43, 'Operating System', 'MCA-20-301', 'MCA', 'MCA_22', '3'),
(41, 'Dot Net using C#', 'MCA-20-303', 'MCA', 'MCA_22', '3'),
(45, 'Artificial Intelligence (AI)', 'MCA-20-311', 'MCA', 'MCA_22', '3'),
(53, 'Yoga in our life', 'yg_0032', 'Yoga life', 'yg_123883', '1'),
(54, 'Yoga in our life', 'yg_0032', 'Yoga life', 'yg_123883', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `sno` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(31) NOT NULL,
  `teacher_email` varchar(31) NOT NULL,
  `teacher_phone` varchar(255) NOT NULL,
  `subject_name` varchar(33) NOT NULL,
  `class` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`sno`, `teacher_id`, `teacher_name`, `teacher_email`, `teacher_phone`, `subject_name`, `class`) VALUES
(38, 101, 'Bajrang', 'bajrang@gmail.com', '9856542325', 'Dot Net using C#', 3),
(39, 102, 'Swati gupta', 'sgupta@gmail.com', '9854123657', 'Operating System', 3),
(40, 103, 'Neeraj Sahu', 'NSahu@gmail.com', '9865327456', 'Artificial Intelligence (AI)', 3),
(33, 501, 'Mr narender', 'narendersingh11848@gmail.com', '2147483647', 'Programming with R and Python', 5),
(34, 502, 'Ravinder kumar', 'ravinder@gmail.com', '123456789', 'Compiler Construction', 5),
(35, 503, 'G.S.Bhamra', 'Bhamra@gmail.com', '2147483647', 'Mobile Application Development', 5),
(37, 504, 'Sahil', 'sahil@gmail.com', '9099099090', 'Computer Graphics', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `user_email` varchar(44) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `user_type` varchar(11) NOT NULL,
  `deptt_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_name`, `user_email`, `user_password`, `image_url`, `user_type`, `deptt_name`) VALUES
(20, 'Ashish4', 'ashish@gmail.com', '$2y$10$xiwawSjmhK2HYp.H7uRqgeXnaSnPTx6BDGWurHXcldX6YzwyIT8We', '', 'HOD', 'Department of Yoga'),
(29, 'Anupam Bhatia', 'Bhatia@gmail.com', '$2y$10$gCfU6GRTjLDAEHnBMDdua.NShStrDyWYyzKnIU7t3zXMaa6lP6zMG', '../uploads/card-1.jpg', 'HOD', 'Department of Computer Science'),
(25, 'cheetah', 'c@gmail.com', '$2y$10$frsAETGrHRzHiA12WcMC/.f6Ua3fCHZNr.alBSPR8RIN1IyEFfdPK', '../uploads/2984504.jpg', 'admin', 'Department of Computer Science'),
(22, 'hod', 'HODpage@gmail.com', '$2y$10$IghzeC3JgPs084Qoc.viW.YLi.s294DR..ZjVI4lDtcnqskO27fHW', '', 'HOD', 'Department of Computer Science'),
(28, 'rishi ', 'rishi01@gmail.com', '$2y$10$LUHrnmdoF5S5A7rA0EcHVemiOFX7TZAdTlpj2Uf2E6c58qc2koiRq', '../uploads/pexels-christian-heitz-842711.jpg', 'faculty', 'Department of Computer Science'),
(23, 'Rishi', 'rishi@gmail.com', '$2y$10$Fch/lLp5P3QcYA8Xu/1opOpsZEaohm4TfbLhjg.uDzjUjiryBI5xa', '', 'faculty', 'Department of Computer Science'),
(24, 'Sahil', 'sahil@gmail.com', '$2y$10$imTjTuUj6fxr.q6/pjLHBOitPn6z5X8mdlRqz1Sr18bVPYs4l8D6W', '', 'admin', 'Department of Computer Science'),
(27, 'Sahil Pillania', 'sahilpillania@gmail.com', '$2y$10$5m7eFNld1o3o8LsM2UhHM.QrPdQH55tAi.Zy68cXFCqknJNvkwfoK', '../uploads/905999.jpg', 'admin', 'Department of Computer Science'),
(26, 'teacher', 'teacher@gmail.com', '$2y$10$awwoIpy489JPAxFSkRRBHeTCqTJZiVO.Elrr6QvJoECYqamoRT0HW', '../uploads/pexels-snapwire-34950.jpg', 'faculty', 'Department of Yoga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `registration_no` (`registration_no`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `sno` (`sno`),
  ADD KEY `registration_no` (`registration_no`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `registration_no` (`registration_no`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessional_test`
--
ALTER TABLE `sessional_test`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `registration_no` (`registration_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`registration_no`),
  ADD KEY `sno` (`sno`),
  ADD KEY `registration_no` (`registration_no`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `sno` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sessional_test`
--
ALTER TABLE `sessional_test`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_1` FOREIGN KEY (`registration_no`) REFERENCES `students` (`registration_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`registration_no`) REFERENCES `students` (`registration_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendence`
--
ALTER TABLE `attendence`
  ADD CONSTRAINT `attendence_ibfk_1` FOREIGN KEY (`registration_no`) REFERENCES `students` (`registration_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `students` (`class`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sessional_test`
--
ALTER TABLE `sessional_test`
  ADD CONSTRAINT `sessional_test_ibfk_1` FOREIGN KEY (`registration_no`) REFERENCES `students` (`registration_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
