-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 10:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `g_id` int(20) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `academic_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`g_id`, `group_name`, `semester`, `academic_year`) VALUES
(1, 'cs2.1', 'Jan-April', '2015/2016'),
(2, 'cs3.1', 'Jan-April', '2015/2016'),
(3, 'cs2.2', 'May-Aug', '2016/2017'),
(4, 'cs3.2', 'May-Aug', '2016/2017');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `l_id` int(20) NOT NULL,
  `g_id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lecregister_no` int(20) NOT NULL,
  `activation_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`l_id`, `g_id`, `first_name`, `last_name`, `pass_word`, `email`, `lecregister_no`, `activation_key`) VALUES
(1, 1, 'patrick', 'Nivasha', 'e807f1fcf82d132f9bb018ca6738a19f', 'patrick@gmail.com', 123456, NULL),
(2, 1, 'opondo', 'orido', 'e807f1fcf82d132f9bb018ca6738a19f', 'opondo@gmail.com', 1234567, NULL),
(3, 1, 'michael', 'kagiri', 'e807f1fcf82d132f9bb018ca6738a19f', 'kagiri@gmail.com', 12345678, NULL),
(4, 2, 'kaburu', 'kaburu', 'e807f1fcf82d132f9bb018ca6738a19f', 'kaburu@gmail.com', 123456789, NULL),
(5, 2, 'oreste', 'kaikai', 'e807f1fcf82d132f9bb018ca6738a19f', 'kaikai@gmail.com', 1234567890, NULL),
(6, 2, 'madam', 'moso', 'e807f1fcf82d132f9bb018ca6738a19f', 'moso@gmail.com', 234567890, NULL),
(7, 2, 'kituku', 'kituku', 'e807f1fcf82d132f9bb018ca6738a19f', 'kituku@gmail.com', 34567890, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(20) NOT NULL,
  `g_id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `register_no` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `activation_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `g_id`, `email`, `first_name`, `last_name`, `register_no`, `pass_word`, `activation_key`) VALUES
(1, 1, 'peter@gmail.com', 'peter', 'musembi', 'C026-01-1041/2016', 'e807f1fcf82d132f9bb018ca6738a19f', NULL),
(2, 1, 'joshua@gmail.com', 'joshua', 'njogu', 'C026-01-1541/2016', 'e807f1fcf82d132f9bb018ca6738a19f', NULL),
(3, 1, 'jonhson@gmail.com', 'johnson', 'nyaanga', 'C026-01-1062/2016', 'e807f1fcf82d132f9bb018ca6738a19f', NULL),
(4, 2, 'frank@gmail.com', 'frank', 'mueke', 'C026-01-1030/2015', 'e807f1fcf82d132f9bb018ca6738a19f', NULL),
(5, 2, 'meshack@gmail.com', 'meshack', 'gitonga', 'C026-01-1033/2015', 'e807f1fcf82d132f9bb018ca6738a19f', NULL),
(6, 2, 'alice@gmail.com', 'alice', 'mifi', 'C026-01-1041/2015', 'e807f1fcf82d132f9bb018ca6738a19f', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unitresults`
--

CREATE TABLE `unitresults` (
  `ur_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `register_no` varchar(255) NOT NULL,
  `assignment1` float DEFAULT NULL,
  `assignment2` float DEFAULT NULL,
  `cat1` float DEFAULT NULL,
  `cat2` float DEFAULT NULL,
  `exam` float DEFAULT NULL,
  `aggre` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitresults`
--

INSERT INTO `unitresults` (`ur_id`, `u_id`, `register_no`, `assignment1`, `assignment2`, `cat1`, `cat2`, `exam`, `aggre`) VALUES
(50, 131, 'C026-01-1041/2016', 112, 111, 11, 22, 22, 33),
(51, 131, 'C026-01-1041/2016', 112, 111, 11, 22, 22, 33),
(52, 131, 'C026-01-1041/2016', 112, 111, 11, 22, 22, 33),
(53, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(54, 131, 'C026-01-1041/2016', 22, 33, 44, 11, 11, 11),
(55, 131, 'C026-01-1041/2016', 22, 33, 44, 11, 11, 11),
(56, 131, 'C026-01-1041/2016', 22, 33, 44, 11, 11, 11),
(57, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(58, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(59, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(60, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(61, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(62, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(63, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(64, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0),
(65, 131, 'C026-01-1041/2016', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `u_id` int(20) NOT NULL,
  `g_id` int(20) DEFAULT NULL,
  `unit_code` varchar(200) NOT NULL,
  `unit_name` varchar(200) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `lecregister_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`u_id`, `g_id`, `unit_code`, `unit_name`, `group_name`, `lecregister_no`) VALUES
(131, 1, '1234', 'vector analysis', 'cs2.1', 1234567),
(132, 1, '19991', 'computer graphics', 'cs2.1', 234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`l_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `lecregister_no` (`lecregister_no`),
  ADD KEY `g_id` (`g_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `register_no` (`register_no`),
  ADD KEY `g_id` (`g_id`);

--
-- Indexes for table `unitresults`
--
ALTER TABLE `unitresults`
  ADD PRIMARY KEY (`ur_id`),
  ADD UNIQUE KEY `ur_id` (`ur_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `register_no` (`register_no`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `lecregister_no` (`lecregister_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unitresults`
--
ALTER TABLE `unitresults`
  MODIFY `ur_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `groups` (`g_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `groups` (`g_id`);

--
-- Constraints for table `unitresults`
--
ALTER TABLE `unitresults`
  ADD CONSTRAINT `unitresults_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `units` (`u_id`),
  ADD CONSTRAINT `unitresults_ibfk_2` FOREIGN KEY (`register_no`) REFERENCES `students` (`register_no`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `groups` (`g_id`),
  ADD CONSTRAINT `units_ibfk_2` FOREIGN KEY (`lecregister_no`) REFERENCES `lecturers` (`lecregister_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
