-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 11:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website1`
--

-- --------------------------------------------------------

--
-- Table structure for table `incentive_logs`
--

CREATE TABLE `incentive_logs` (
  `card_no` bigint(20) NOT NULL,
  `daily_incentives` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incentive_logs`
--

INSERT INTO `incentive_logs` (`card_no`, `daily_incentives`, `date`, `time`) VALUES
(961857867, 15, NULL, NULL),
(21112713936, 5, NULL, NULL),
(21112713936, 10, NULL, NULL),
(21112713936, 15, NULL, NULL),
(25210084211, 5, NULL, NULL),
(961857867, 15, '2019-02-07', '20:47:44'),
(961857867, 15, '2019-02-07', '20:49:10'),
(961857867, 15, '2019-02-07', '20:50:30'),
(961857867, 15, '2019-02-07', '20:51:01'),
(961857867, 15, '2019-02-07', '20:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `incentive_table`
--

CREATE TABLE `incentive_table` (
  `card_no` int(30) NOT NULL,
  `daily_incentives` int(11) DEFAULT NULL,
  `weekly_incentives` int(11) DEFAULT NULL,
  `total_incentives` int(11) DEFAULT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incentive_table`
--

INSERT INTO `incentive_table` (`card_no`, `daily_incentives`, `weekly_incentives`, `total_incentives`, `TIMESTAMP`) VALUES
(961857867, 15, NULL, NULL, '2019-02-07 09:52:51'),
(2147483647, NULL, NULL, NULL, '2019-02-10 09:11:41'),
(2147483647, NULL, NULL, NULL, '2019-02-10 09:13:13'),
(2147483647, NULL, NULL, NULL, '2019-02-10 09:16:12'),
(2147483647, NULL, NULL, NULL, '2019-02-10 09:17:27'),
(2147483647, NULL, NULL, NULL, '2019-02-10 09:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `email_access` enum('a','b') NOT NULL DEFAULT 'a',
  `email_id` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(6) UNSIGNED NOT NULL,
  `station` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `station`, `status`, `remark`, `Date`, `Time`, `count`) VALUES
(270, 'Touched', '961857867', NULL, '2019-02-07', '20:59:10', 18),
(269, 'Touched', '961857867', NULL, '2019-02-07', '20:51:01', 17),
(268, 'Touched', '961857867', NULL, '2019-02-07', '20:50:30', 16),
(267, 'Touched', '961857867', NULL, '2019-02-07', '20:49:10', 15),
(266, 'Touched', '961857867', NULL, '2019-02-07', '20:47:44', 14),
(265, 'Touched', '961857867', NULL, '2019-02-07', '20:43:36', 13),
(264, 'Touched', '961857867', NULL, '2019-02-07', '20:36:46', 12),
(263, 'Touched', '961857867', NULL, '2019-02-07', '20:35:55', 11),
(262, 'Touched', '961857867', NULL, '2019-02-07', '20:21:02', 10),
(261, 'Touched', '961857867', NULL, '2019-02-07', '20:18:33', 9),
(260, 'Touched', '25210084211', NULL, '2019-02-07', '16:15:00', 1),
(259, 'Not Touched', '21112713936', NULL, '2019-02-07', '16:13:28', 4),
(258, 'Touched', '21112713936', NULL, '2019-02-07', '16:13:07', 4),
(257, 'Touched', '21112713936', NULL, '2019-02-07', '16:10:09', 3),
(256, 'Touched', '21112713936', NULL, '2019-02-07', '16:09:24', 2),
(255, 'Touched', '961857867', NULL, '2019-02-07', '16:08:51', 8),
(254, 'Touched', '961857867', NULL, '2019-02-07', '16:06:26', 7),
(253, 'Touched', '961857867', NULL, '2019-02-07', '16:03:29', 6),
(252, 'Touched', '961857867', NULL, '2019-02-07', '16:02:45', 5),
(251, 'Touched', '961857867', NULL, '2019-02-07', '16:02:27', 4),
(250, 'Touched', '961857867', NULL, '2019-02-07', '15:25:57', 3),
(249, 'Touched', '21112713936', NULL, '2019-02-07', '15:24:58', 1),
(248, 'Touched', '961857867', NULL, '2019-02-07', '15:23:29', 2),
(247, 'Not Touched', '21112713936', NULL, '2019-02-07', '15:21:46', 0),
(246, 'Touched', '961857867', NULL, '2019-02-07', '15:19:47', 1),
(245, 'Touched', '961857867', NULL, '2019-02-06', '22:09:28', 12),
(244, 'Touched', '961857867', NULL, '2019-02-06', '22:06:38', 11),
(243, 'Touched', '21112713936', NULL, '2019-02-06', '22:02:00', 1),
(242, 'Touched', '961857867', NULL, '2019-02-06', '22:00:29', 10),
(241, 'Not Touched', '961857867', NULL, '2019-02-06', '22:00:17', 9),
(240, 'Touched', '961857867', NULL, '2019-02-06', '21:59:50', 9),
(239, 'Not Touched', '961857867', NULL, '2019-02-06', '21:59:38', 8),
(238, 'Touched', '961857867', NULL, '2019-02-06', '21:58:35', 8),
(237, 'Not Touched', '961857867', NULL, '2019-02-06', '21:58:24', 6),
(236, 'Touched', '961857867', NULL, '2019-02-06', '21:58:04', 6),
(235, 'Touched', '961857867', NULL, '2019-02-06', '21:57:12', 5),
(234, 'Not Touched', '961857867', NULL, '2019-02-06', '21:56:50', 3),
(233, 'Not Touched', '961857867', NULL, '2019-02-06', '21:54:47', 3),
(232, 'Touched', '961857867', NULL, '2019-02-06', '21:53:58', 2),
(200, 'NT', '961857867', NULL, '2019-01-17', '11:45:35', 0),
(201, 'NT', '914623211', NULL, '2019-01-17', '11:45:43', 0),
(202, 'NT', '961857867', NULL, '2019-01-17', '11:45:58', 0),
(203, 'NT', NULL, NULL, NULL, NULL, 0),
(204, 'NT', '961857867', NULL, '2019-01-18', '18:19:32', 0),
(205, 'NT', '961857867', NULL, '2019-01-18', '18:19:38', 0),
(206, 'NT', '961857867', NULL, '2019-01-18', '18:19:43', 0),
(207, 'NT', '961857867', NULL, '2019-01-18', '18:21:51', 0),
(208, 'NT', '914623211', NULL, '2019-01-18', '18:22:13', 0),
(209, 'NT', '961857867', NULL, '2019-01-18', '18:22:30', 0),
(210, 'T', '961857867', NULL, '2019-01-18', '18:22:36', 0),
(211, 'T', '961857867', NULL, '2019-01-18', '18:22:42', 0),
(212, 'NT', '914623211', NULL, '2019-01-19', '16:22:36', 0),
(213, 'NT', '914623211', NULL, '2019-01-19', '16:22:42', 0),
(214, 'NT', '961857867', NULL, '2019-01-19', '16:26:06', 0),
(215, 'NT', '961857867', NULL, '2019-01-19', '16:26:12', 0),
(216, 'NT', '961857867', NULL, '2019-01-19', '16:26:17', 0),
(217, 'T', '961857867', NULL, '2019-01-19', '16:26:23', 0),
(218, 'NT', '961857867', NULL, '2019-01-19', '16:26:28', 0),
(219, 'NT', '914623211', NULL, '2019-01-19', '16:30:28', 0),
(220, 'NT', '961857867', NULL, '2019-01-19', '16:32:57', 0),
(221, 'NT', '961857867', NULL, '2019-01-19', '16:33:03', 0),
(222, 'NT', '961857867', NULL, '2019-01-19', '16:33:10', 0),
(223, 'T', '961857867', NULL, '2019-01-19', '16:33:16', 0),
(224, 'Not Touched', '21112713936', NULL, '2019-02-05', '21:12:12', 0),
(225, 'Not Touched', '21112713936', NULL, '2019-02-05', '21:16:01', 0),
(226, 'Touched', '21112713936', NULL, '2019-02-05', '21:16:13', 0),
(227, 'Not Touched', '961857867', NULL, '2019-02-05', '21:17:55', 0),
(228, 'Not Touched', '25210084211', NULL, '2019-02-05', '21:18:22', 0),
(229, 'Not Touched', '914623211', NULL, '2019-02-05', '21:18:37', 0),
(230, 'Touched', '21112713936', NULL, '2019-02-05', '21:41:05', 0),
(231, 'Touched', '961857867', NULL, '2019-02-06', '21:40:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `name`, `email`, `password`, `repassword`) VALUES
(1, 'somy', 'somesh12', '1234', '1234'),
(2, 'anuska', 'anuska', 'anuska', 'anuska'),
(3, 'moni', 'nomi', 'tomi', 'tomi'),
(4, 'somy', 'anuska', '567', '567'),
(5, 'anuska', 'somu', '1234', '1234'),
(6, 'somesh', 'aw@gmail.com', '12345', '12345'),
(7, 'shreya', 'shreya@gmail', 'devin', 'devin'),
(8, 'Somesh', 'bhavesh@gmail.com', 'bhavesh123', 'bhavesh123'),
(9, 'Somesh', 'mehakkatra@gmail.com', 'aloo', 'aloo'),
(10, 'Abhinav', 'papa@gmai.com', 'chutiya', 'chutiya'),
(11, 'bhavesh', 'bhk2103@gmail.com', '123', '123'),
(12, 'bhavesh123', 'BHK@GMAIL.COM', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `full_name` varchar(50) DEFAULT NULL,
  `mobile_no` bigint(12) DEFAULT NULL,
  `res_address` varchar(300) DEFAULT NULL,
  `card_no` varchar(10) NOT NULL,
  `aa_no` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`full_name`, `mobile_no`, `res_address`, `card_no`, `aa_no`) VALUES
('somu  ', 8554812652, 'pune mumbai chutiya', '2111271393', '123478965412');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `card_id` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`card_id`) VALUES
(21112713936);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incentive_table`
--
ALTER TABLE `incentive_table`
  ADD KEY `card_no` (`card_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`card_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
